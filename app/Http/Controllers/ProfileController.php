<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
    public function index()
    {
        return view('user.dashboard');
    }

    public function submitNumbers(Request $request)
    {
        $request->validate([
            'numbers' => 'required|array|min:1|max:20',
            'numbers.*' => 'required|numeric|between:1,999',
        ]);

        $user = auth()->user();

        foreach ($request->numbers as $number) {
            $user->numbers()->create(['number' => $number]);
        }

        // Notify the admin
        \App\Models\Notification::create([
            'type' => 'user_registered',
            'data' => json_encode(['user_id' => $user->id, 'name' => $user->name])
        ]);

        return redirect()->route('user.dashboard')->with('success', 'Numbers submitted successfully');
    }
}

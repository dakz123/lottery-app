<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\UserNumber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NumberController extends Controller
{
    public function submitNumbers(Request $request)
    {
        $validatedData = $request->validate([
            'numbers' => 'required|array|min:1|max:20',
            'numbers.*' => 'required|integer|between:1,999',
        ]);

        foreach ($validatedData['numbers'] as $number) {
            UserNumber::create([
                'user_id' => Auth::id(),
                'number' => $number,
            ]);
        }

        return response()->json(['message' => 'Numbers submitted successfully']);
    }
}

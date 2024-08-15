<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\UserNumber;
use Illuminate\Http\Request;
use Number;

class AdminController extends Controller
{

    public function draw()
    {
        $numbers = Number::select('number')
            ->groupBy('number')
            ->orderByRaw('COUNT(*) DESC')
            ->limit(5)
            ->pluck('number');

        $leastNumbers = Number::select('number')
            ->groupBy('number')
            ->orderByRaw('COUNT(*) ASC')
            ->limit(10)
            ->pluck('number');

        $drawNumbers = $numbers->merge($leastNumbers)->shuffle();


        return response()->json([
            'drawn_numbers' => $drawNumbers,
        ]);
    }

}

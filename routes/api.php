<?php



use App\Http\Controllers\Api\AdminController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\NumberController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth:sanctum', 'admin'])->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();

    });
    Route::post('logout', [AuthController::class, 'logout']);
    Route::get('users', [UserController::class, 'getUsers']);
    Route::post('/submit-numbers', [NumberController::class, 'submitNumbers']);
    Route::post('/admin/lottery/draw', [AdminController::class, 'draw']);


});

Route::post('/login', [AuthController::class, 'login']);
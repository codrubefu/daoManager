<?php


use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth:sanctum','can:create-users'])->group(function () {
    Route::get(
        '/dashboard',
        [DashboardController::class, 'index']
    );

//    Route::post(
//        '/users',
//        [\App\Http\Controllers\UserController::class, 'store']
//    );
});


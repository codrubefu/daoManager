<?php


use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth:sanctum', 'can:manage-users'])->group(function () {
    Route::get(
        '/dashboard',
        [DashboardController::class, 'index']
    );
});




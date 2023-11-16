<?php


use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\Club\ClubController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth:sanctum', 'can:manage-clubs'])->group(function () {
    Route::post(
        '/club/add',
        [ClubController::class, 'add']
    );

    Route::post(
        '/club/edit',
        [UserController::class, 'edit']
    );

    Route::get(
        '/clubs',
        [ClubController::class, 'list']
    );
});

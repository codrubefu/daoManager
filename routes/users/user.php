<?php


use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\Club\ClubController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth:sanctum', 'can:manage-users'])->group(function () {
    Route::post(
        '/user/add',
        [UserController::class, 'add']
    );

    Route::post(
        '/user/edit/{id}',
        [UserController::class, 'edit']
    );
    Route::get(
        '/users',
        [UserController::class, 'list']
    );

    Route::get(
        '/user/{id}',
        [UserController::class, 'getUser']
    );
    Route::delete(
        '/user/delete/{id}',
        [UserController::class, 'delete']
    );
});

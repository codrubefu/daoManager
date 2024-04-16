<?php

use App\Http\Controllers\Club\ClubController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth:sanctum', 'can:manage-clubs'])->group(function () {
    Route::post(
        '/club/add',
        [ClubController::class, 'add']
    );

    Route::patch(
        '/club/edit/{id}',
        [ClubController::class, 'edit']
    );

    Route::get(
        '/clubs',
        [ClubController::class, 'list']
    );


    Route::get(
        '/club/{id}',
        [ClubController::class, 'get']
    );

    Route::patch(
        '/club/deactivate/{id}',
        [ClubController::class, 'deactivate']
    );

    Route::patch(
        '/club/activate/{id}',
        [ClubController::class, 'activate']
    );
});

<?php

use App\Http\Controllers\Group\GroupController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth:sanctum', 'can:manage-users'])->group(function () {
    Route::post(
        '/group/add',
        [GroupController::class, 'add']
    );

    Route::post(
        '/group/edit/{id}',
        [GroupController::class, 'edit']
    );

    Route::get(
        '/groups/list',
        [GroupController::class, 'list']
    );


    Route::get(
        '/group/{id}',
        [GroupController::class, 'getGroup']
    );

    Route::delete(
        '/group/delete/{id}',
        [GroupController::class, 'delete']
    );
});

<?php


use App\Http\Controllers\TrainingClasses\TrainingClassesController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth:sanctum', 'can:manage-users'])->prefix('training_class')->group(function () {
    Route::controller(TrainingClassesController::class)->group(function () {
        Route::post('/add', 'add');
        Route::post('/edit/{id}', 'edit');
        Route::post('/add_users/{id}', 'addUsers');
        Route::post('/add/user', 'addUserToTrainingClass');
        Route::get('/list', 'list');
        Route::get('/{id}', 'get');
        Route::delete('/delete/{id}', 'delete');
    });
});

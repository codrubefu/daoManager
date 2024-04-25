<?php


use App\Http\Controllers\TrainingClasses\TrainingClassesController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth:sanctum', 'can:manage-users'])->group(function () {
    Route::post(
        '/training_class/add',
        [TrainingClassesController::class, 'add']
    );

    Route::post(
        '/training_class/edit/{id}',
        [TrainingClassesController::class, 'edit']
    );

    Route::post(
        '/training_class/add_users/{id}',
        [TrainingClassesController::class, 'addUsers']
    );

    Route::get(
        '/training_class/list/',
        [TrainingClassesController::class, 'list']
    );

    Route::get(
        '/training_class/{id}',
        [TrainingClassesController::class, 'get']
    );

    Route::delete(
        '/training_class/delete/{id}',
        [TrainingClassesController::class, 'delete']
    );
});

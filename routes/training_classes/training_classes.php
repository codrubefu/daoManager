<?php


use App\Http\Controllers\TrainingClasses\TrainingClassesController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth:sanctum', 'can:manage-users'])->group(function () {
    Route::post(
        '/training_class/add',
        [TrainingClassesController::class, 'addOrEdit']
    );

    Route::post(
        '/training_class/edit/{id}',
        [TrainingClassesController::class, 'addOrEdit']
    );

    Route::post(
        '/training_class/add_users/{id}',
        [TrainingClassesController::class, 'addUsers']
    );
    Route::get(
        '/training_classes',
        [TrainingClassesController::class, 'list']
    );

    Route::get(
        '/training_class/{id}',
        [TrainingClassesController::class, 'get']
    );

    Route::delete(
        '/training_class/{id}',
        [TrainingClassesController::class, 'delete']
    );
});

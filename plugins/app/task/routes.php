<?php 
use App\Task\Http\Controllers\TaskController;

Route::prefix('api/v1/tasks')->group(function () {
    Route::get('index', [TaskController::class, 'index']);
    Route::post('store', [TaskController::class, 'store']);
    Route::post('update/{id}', [TaskController::class, 'update']);
    Route::post('complete/{id}', [TaskController::class, 'complete']);
});
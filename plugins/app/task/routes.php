<?php 
use App\Task\Http\Controllers\TaskController;

Route::prefix('api/v1/tasks')->group(function () {

    Route::middleware(['auth'])->group(function() 
    {
        Route::get('index', [TaskController::class, 'index']);
        Route::post('store', [TaskController::class, 'store']);
        Route::post('update/{key}', [TaskController::class, 'update']);
        Route::post('complete/{key}', [TaskController::class, 'complete']);
    });
});
<?php

use App\Project\Http\Controllers\ProjectController;

Route::prefix('api/v1/projects')->group(function () 
{
    Route::get('index', [ProjectController::class, 'index']);
    Route::post('store', [ProjectController::class, 'store']);
    Route::post('update/{id}', [ProjectController::class, 'update']);
    Route::post('done/{id}', [ProjectController::class, 'done']);
});
<?php

use App\Project\Http\Controllers\ProjectController;
use App\Project\Http\Middlewares\ProjectMiddleware;

Route::prefix('api/v1/projects')->group(function () 
{
    Route::get('index', [ProjectController::class, 'index']);

Route::middleware(['auth'])->group(function() 
{
        Route::post('store', [ProjectController::class, 'store']);
        Route::post('update/{key}', [ProjectController::class, 'update']);
        Route::post('done/{key}', [ProjectController::class, 'done']);
    });
});
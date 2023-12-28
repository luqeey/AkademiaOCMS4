<?php

use App\Project\Http\Controllers\ProjectController;

Route::prefix('api/v1')->group(function () 
{
    Route::get('projects/{id}', [ProjectController::class, 'index']);
    Route::post('projects', [ProjectController::class, 'store']);
    Route::put('projects/{id}', [ProjectController::class, 'update']);
});
<?php

use App\TimeEntries\Http\Controllers\TimeEntryController;
use App\TimeEntries\Http\Middlewares\TimeEntryMiddleware;

Route::prefix('api/v1/TimeEntries')->group(function () {

    Route::middleware(['auth'])->group(function() 
    {
        Route::post('start', [TimeEntryController::class, 'startTracking']);

    Route::middleware([TimeEntryMiddleware::class])->group(function () {

        Route::post('end/{key}', [TimeEntryController::class, 'endTracking']);
    });
    });
});
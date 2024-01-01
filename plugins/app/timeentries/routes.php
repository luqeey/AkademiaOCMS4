<?php

use App\TimeEntries\Http\Controllers\TimeEntryController;

Route::prefix('api/v1/TimeEntries')->group(function () {

    Route::middleware(['auth'])->group(function() 
    {
        Route::post('start', [TimeEntryController::class, 'startTracking']);
        Route::post('end/{key}', [TimeEntryController::class, 'endTracking']);
    });
});
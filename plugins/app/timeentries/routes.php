<?php

use App\TimeEntries\Http\Controllers\TimeEntryController;

Route::prefix('api/v1/TimeEntries')->group(function () {
    Route::post('start', [TimeEntryController::class, 'startTracking']);
    Route::post('end/{id}', [TimeEntryController::class, 'endTracking']);
});
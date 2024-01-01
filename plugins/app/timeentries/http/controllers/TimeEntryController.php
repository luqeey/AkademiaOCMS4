<?php

namespace App\TimeEntries\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\TimeEntries\Models\TimeEntry;
use App\TimeEntries\Http\Resources\TimeEntryResource;
use Carbon\Carbon;


class TimeEntryController extends Controller 
{
    public function startTracking() 
    {
        $user = auth()->user();
        $user_id = $user->id;

        $timeentry = new TimeEntry();
        $timeentry->user_id = $user_id;
        $timeentry->start_time = post('start_time');
        $timeentry->save();
        return new TimeEntryResource($timeentry);
    }

    public function endTracking($key) 
    {
        $timeentry = TimeEntry::findOrFail($key);
        // $timeentry->end_time = Carbon::create(now());
        $timeentry->end_time = post('end_time');
        $timeentry->save();
        return new TimeEntryResource($timeentry);
    }
}
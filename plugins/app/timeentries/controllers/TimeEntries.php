<?php 
namespace App\TimeEntries\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use App\TimeEntries\Http\Resources\TimeEntryResource;
use App\TimeEntries\Models\TimeEntry;
use Carbon\Carbon;

/**
 * Time Entries Back-end Controller
 */
class TimeEntries extends Controller
{
    /**
     * @var array Behaviors that are implemented by this controller.
     */
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('App.TimeEntries', 'timeentries', 'timeentries');
    }

    // public function create() 
    // {
    //     $timeentry = new TimeEntry();
    //     $timeentry->start_time = post('start_time');
    //     $timeentry->save();
    //     return new TimeEntryResource($timeentry);
    // }

    // public function update($key) 
    // {
    //     $timeentry = TimeEntry::findOrFail($key);
    //     $timeentry->end_time = Carbon::create(now());
    //     $timeentry->save();
    //     return new TimeEntryResource($timeentry->refresh());
    // }
}

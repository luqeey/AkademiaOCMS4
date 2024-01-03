<?php 
namespace App\TimeEntries\Models;

use Model;
use App\Task\Models\Task;
use RainLab\User\Models\User;

class Timeentry extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $table = 'app_timeentries_timeentries';

    public $rules = [
        'user_id' => 'required|exists:users,id',
        'start_time' => 'required|date',
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    public $belongsTo = [
        'task' => Task::class,
        'user' => User::class
    ];
}

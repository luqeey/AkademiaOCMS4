<?php 
namespace App\Task\Models;

use Model;
use App\TimeEntries\Models\Timeentry;
use App\Project\Models\Project;
use RainLab\User\Models\User;

class Task extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $table = 'app_task_tasks';

    public $rules = [
        'planned_start' => 'required|date',
        'planned_end' => 'required|date|after:planned_start',
        'planned_time' => 'numeric|min:0',
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    public $belongsTo = [
        'project' => Project::class,
        'user' => User::class
    ];

    public $hasMany = [
        'timeEntries' => Timeentry::class
    ];
}
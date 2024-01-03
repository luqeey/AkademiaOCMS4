<?php 
namespace App\Project\Models;

use Model;
use App\Task\Models\Task;
use RainLab\User\Models\User;

class Project extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $table = 'app_project_projects';

    public $rules = [
        'title' => 'required|string|max:255',
        'project_id' => 'required|integer',
        'customer' => 'required|string|max:255',
        'projectManager' => 'required|string|max:255',
        'is_done' => 'boolean',
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    public $hasMany = [
        'tasks' => Task::class
    ];

    public $belongsTo = [
        'user' => User::class
    ];
}

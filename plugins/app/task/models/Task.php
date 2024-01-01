<?php 
namespace App\Task\Models;

use Model;
use App\TimeEntries\Models\Timeentry;
use App\Project\Models\Project;
use RainLab\User\Models\User;
/**
 * Task Model
 */
class Task extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'app_task_tasks';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = ['planned_start', 'planned_end', 'planned_time'];

    /**
     * @var array Validation rules for attributes
     */
    public $rules = [
        'planned_start' => 'required|date',
        'planned_end' => 'required|date|after:planned_start',
        'planned_time' => 'numeric|min:0',
    ];

    /**
     * @var array Attributes to be cast to native types
     */
    protected $casts = [
        'planned_start' => 'datetime',
        'planned_end' => 'datetime',
        'planned_time' => 'float',
    ];


    /**
     * @var array Attributes to be cast to JSON
     */
    protected $jsonable = [];

    /**
     * @var array Attributes to be appended to the API representation of the model (ex. toArray())
     */
    protected $appends = [];

    /**
     * @var array Attributes to be removed from the API representation of the model (ex. toArray())
     */
    protected $hidden = [];

    /**
     * @var array Attributes to be cast to Argon (Carbon) instances
     */
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

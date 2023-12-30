<?php 
namespace App\Project\Models;

use Model;
use App\Task\Models\Task;

/**
 * Project Model
 */
class Project extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'app_project_projects';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = ['title', 'project_id', 'customer', 'projectManager', 'is_done'];

    /**
     * @var array Validation rules for attributes
     */
    public $rules = [
        'title' => 'required|string|max:255',
        'project_id' => 'required|integer',
        'customer' => 'required|string|max:255',
        'projectManager' => 'required|string|max:255',
        'is_done' => 'boolean',
    ];

    /**
     * @var array Attributes to be cast to native types
     */
    protected $casts = [
        'is_done' => 'boolean',
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

    public $hasMany = [
        'tasks' => Task::class
    ];
}

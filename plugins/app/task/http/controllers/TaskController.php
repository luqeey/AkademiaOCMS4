<?php 

namespace App\Task\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Task\Models\Task;
use App\Task\Http\Resources\TaskResource;

class TaskController extends Controller
{
    public function index()
    {
        return TaskResource::collection(Task::all());
    }

    public function store() 
    {
        $user = auth()->user();
        $user_id = $user->id;

        $task = new Task();
        $task->user_id = $user_id;
        $task->task_id = post('task_id');
        $task->planned_start = post('planned_start');
        $task->planned_end = post('planned_end');
        $task->planned_time = post('planned_time');
        $task->save();
        return new TaskResource($task);
    }

    public function update($key) 
    {
        $task = Task::findOrFail($key);

        if ($task->user_id !== auth()->user()->id) {
            abort(403, 'Unauthorized action.');
        }
        
        $task->task_id = post('task_id') ?: $task->task_id;
        $task->planned_start = post('planned_start') ?: $task->planned_start;
        $task->planned_end = post('planned_end') ?: $task->planned_end;
        $task->planned_time = post('planned_time') ?: $task->planned_time;
        $task->save();
        return new TaskResource($task);
    }

    public function complete($key) 
    {
        $task = Task::findOrFail($key);

        if ($task->user_id !== auth()->user()->id) {
            abort(403, 'Unauthorized action.');
        }
        
        $task->is_done = true;
        $task->save();
        return new TaskResource($task);
    }
}
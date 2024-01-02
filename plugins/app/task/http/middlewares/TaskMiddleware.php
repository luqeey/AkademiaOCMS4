<?php 

namespace App\Task\Http\Middlewares;

use App\Task\Models\Task; 
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TaskMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        $taskId = $request->route('key');

        $task = Task::findOrFail($taskId);

        $user = auth()->user();

        if ($task->user_id !== $user->id) {
            abort(403, 'This is not your task and you cannot modify it.');
        }

        return $next($request);
    }
}
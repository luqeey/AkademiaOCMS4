<?php 

namespace App\Project\Http\Middlewares;

use App\Project\Models\Project; 
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProjectMiddleware 
{
    public function handle(Request $request, Closure $next): Response
    {
        $projectId = $request->route('key');

        $project = Project::findOrFail($projectId);

        $user = auth()->user();

        if ($project->user_id !== $user->id) {
            abort(403, 'This is not your project and you cannot modify it.');
        }

        return $next($request);
    }
}
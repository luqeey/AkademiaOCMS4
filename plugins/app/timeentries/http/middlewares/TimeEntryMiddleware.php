<?php 

namespace App\TimeEntries\Http\Middlewares;

use App\TimeEntries\Models\Timeentry; 
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TimeEntryMiddleware 
{
    public function handle(Request $request, Closure $next): Response
    {
        $timeentryId = $request->route('key');

        $timeentry = Timeentry::findOrFail($timeentryId);

        $user = auth()->user();

        if ($timeentry->user_id !== $user->id) {
            abort(403, 'You cannot modify time entries that arent yours. ');
        }

        return $next($request);
    }
}
<?php

namespace App\Project\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Project\Models\Project;
use App\Project\Http\Resources\ProjectResource;

class ProjectController extends Controller
{
    public function index() 
    {
        return ProjectResource::collection(Project::all());
    }

    public function store() 
    {
        $project = new Project();
        $project->title = post('title');
        $project->project_id = post('project_id');
        $project->customer = post('customer');
        $project->projectManager = post('projectManager');
        $project->save();
    
        return ProjectResource::make($project);
    }

    public function update($key)
    {
        $project = Project::findOrFail($key);
        $project->title = post('title') ?: $project->title;
        $project->project_id = post('project_id') ?: $project->project_id;
        $project->customer = post('customer') ?: $project->customer;
        $project->projectManager = post('projectManager') ?: $project->projectManager;
        $project->save();
        return new ProjectResource($project);
    }

    public function done($key)
    {
        $project = Project::findOrFail($key);
        $project->is_done = true;
        $project->save();
        return new ProjectResource($project);
    }

}
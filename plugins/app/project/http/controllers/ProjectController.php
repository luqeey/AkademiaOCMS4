<?php

namespace App\Project\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Project\Models\Project;
use App\Project\Http\Resources\ProjectResource;

class ProjectController extends Controller
{
    public function store(Request $request) 
    {
        $project = new Project();
        $project->title = post('title');
        $project->project_id = post('project_id');
        $project->customer = post('customer');
        $project->projectManager = post('projectManager');

        return ProjectResource::make($project);
    }

    public function index($id) 
    {
        $data = Project::all();

        return ProjectResource::make($data);
    }

    public function update(Request $request, $id)
    {
        return ['message' => 'Project updated successfully'];
    }
}
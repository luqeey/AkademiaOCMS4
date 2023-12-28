<?php

namespace App\Project\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource {
    public function toArray($request)
    {
        return [
            'title' => $this->title,
            'project_id' => $this->project_id,
            'customer' => $this->customer,
            'projectManager' => $this->projectManager   
        ];
    }
}
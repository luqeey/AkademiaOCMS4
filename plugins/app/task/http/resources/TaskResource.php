<?php

namespace App\Task\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TaskResource extends JsonResource 
{
    public function toArray($request)
    {
        return [
            'task_id' => $this->task_id,
            'planned_start' => $this->planned_start,
            'planned_end' => $this->planned_end,
            'planned_time' => $this->planned_time,
            'is_done' => $this->is_done
        ];
    }
}
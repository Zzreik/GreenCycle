<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TreeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'seed_type_id' => $this->seed_type_id,
            'name' => $this->name,
            'level' => $this->level,
            'health' => $this->health,
            'progress' => $this->progress,
            'status' => $this->status,
            'last_cared_at' => $this->last_cared_at?->toISOString(),
            'next_care_at'  => $this->next_care_at?->toISOString(),
            'last_decay_at' => $this->last_decay_at?->toISOString(),
            'harvested_at'  => $this->harvested_at?->toISOString(),
            'created_at' => $this->created_at?->toISOString(),
        ];
    }
}

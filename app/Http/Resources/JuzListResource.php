<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class JuzListResource extends JsonResource
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
            'number' => $this->number,
            'verse' => [
                'first' => $this->first_verse,
                'last' => $this->last_verse,
            ],
            'chapters' => ChaptersListResource::collection($this->chapters),
        ];
    }
}

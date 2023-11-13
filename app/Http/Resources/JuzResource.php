<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class JuzResource extends JsonResource
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
            'first_verse' => [
                'id' => $this->first_verse_id,
                'text' => $this->first_verse
            ],
            'last_verse' => [
                'id' => $this->last_verse_id,
                'text' => $this->last_verse
            ],
            'chapters' => ChapterResource::collection($this->whenLoaded('chapters')),
            'verses' => VersesListResource::collection($this->whenLoaded('verses')),
        ];
    }
}

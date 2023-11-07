<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ChapterResource extends JsonResource
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
            'name' => $this->name,
            'number_of_verses' => $this->number_of_verses,
            'revelation' => $this->revelation == 'MC' ? 'Makkiyah' : 'Madaniyah',
            'sequence' => $this->sequence,
            'has_sajda' => $this->has_sajda ? true : false,
            'verses' => VerseResource::collection($this->verses),
        ];
    }
}

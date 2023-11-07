<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class VersesListResource extends JsonResource
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
            'text' => $this->text,
            'page' => $this->page,
            'sajda' => $this->sajda ? true : false,

            'juz' => $this->juz_id,
            'hizb' => $this->hizb_id,
        ];
    }
}

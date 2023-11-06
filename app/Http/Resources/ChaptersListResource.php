<?php

namespace App\Http\Resources;

use App\Models\Juz;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ChaptersListResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'number' => $this->number,
            'name' => $this->name,
            'verses' => $this->number_of_verses,
            'revelation' => $this->revelation == 'MC' ? 'Makkiyah' : 'Madaniyah',
            'order' => $this->chronological_order,
            'has_sajda' => $this->has_sajda ? true : false,
            'juz' => $this->juz_id,
            'hizb' => $this->hizb_id,
        ];
    }
}

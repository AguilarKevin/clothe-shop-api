<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClotheResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'discount' => $this->discount->percentage ?? null,
            'media' => new MediaCollection($this->clotheMedia),
            'colors' => new ClotheColorCollection($this->colors),
        ];
    }
}

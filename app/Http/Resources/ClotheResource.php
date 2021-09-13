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
            'media' => new MediaCollection($this->clotheMedia),
            'discount' => $this->discount->percentage ?? 0.0,
            'colors' => new ClotheColorCollection($this->colors),
        ];
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'discount' => $this->discount ?? 0,
            'media' => new MediaCollection($this->media),
            'colors' => new ProductColorCollection($this->colors),
        ];
    }
}

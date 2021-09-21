<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductColorResource extends JsonResource
{

    public function toArray($request)
    {
        return $this->color_hex;
    }
}

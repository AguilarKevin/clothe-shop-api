<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClotheColorResource extends JsonResource
{

    public function toArray($request)
    {
        return $this->color_hex;
    }
}

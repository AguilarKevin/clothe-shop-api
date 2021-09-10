<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ClotheColor extends Model
{
    use HasFactory;

    protected $fillable = ['color_hex', 'clothe_id'];

    public function clothe():BelongsTo{
        return $this->belongsTo(Clothe::class);
    }
}

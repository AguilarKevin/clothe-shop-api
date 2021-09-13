<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Discount extends Model
{
    use HasFactory;

    protected $fillable = ['clothe_id', 'percentage'];

    public function clothe(): BelongsTo
    {
        return $this->belongsTo(Clothe::class);
    }
}

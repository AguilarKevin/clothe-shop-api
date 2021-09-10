<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Clothe extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'price',
        'collection_id'
    ];

    public function collection(): BelongsTo
    {
        return $this->belongsTo(Collection::class);
    }

    public function colors():HasMany{
        return $this->hasMany(ClotheColor::class);
    }

    public function discount():HasOne{
        return $this->hasOne(Discount::class);
    }

}

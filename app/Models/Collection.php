<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Collection extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description'];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    public function collectionMedia(): MorphMany
    {
        return $this->morphMany(Media::class, 'mediable');
    }
}

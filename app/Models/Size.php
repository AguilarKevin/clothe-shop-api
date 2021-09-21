<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Size extends Model
{
    use HasFactory;
    protected $fillable = ['size_name'];

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(
            Product::class,
            'product_size',
            'product_id',
            'size_id'
        );
    }
}

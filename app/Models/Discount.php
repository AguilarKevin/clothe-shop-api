<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;

    protected $fillable = ['clothe_id', 'discount'];

    public function clothe(){
        return $this->belongsTo(Clothe::class);
    }
}

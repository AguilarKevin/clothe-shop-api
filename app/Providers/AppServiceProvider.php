<?php

namespace App\Providers;

use App\Models\Clothe;
use App\Models\Collection;
use App\Models\Product;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
    }

    public function boot()
    {
        Relation::enforceMorphMap([
            'product' => Product::class,
            'collection' => Collection::class,
        ]);
    }
}

<?php

namespace App\Providers;

use App\Models\Clothe;
use App\Models\Collection;
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
            'clothe' => Clothe::class,
            'collection' => Collection::class,
        ]);
    }
}

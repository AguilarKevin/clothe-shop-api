<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CollectionCollection;
use App\Http\Resources\CollectionResource;
use App\Models\Collection;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function index()
    {
        return new CollectionCollection(Collection::query()->get());
    }

    public function show(Collection $collection)
    {
        return new CollectionResource($collection);
    }
}

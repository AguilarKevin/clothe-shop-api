<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductCollection;
use App\Models\Product;

class DiscountsController extends Controller
{

    public function index()
    {
        return new ProductCollection(Product::query()->where('discount', '<>' , null)->limit(3)->get());
    }
}

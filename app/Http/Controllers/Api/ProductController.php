<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductCollection;
use App\Http\Resources\ProductResource;
use App\Models\Clothe;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return new ProductCollection(Product::with(['media'])->latest()->paginate(15));
    }

    public function show(Product $product){
        $product->load(['media']);

        return new ProductResource($product);
    }
}

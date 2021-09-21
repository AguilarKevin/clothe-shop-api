<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductCollection;
use App\Models\Clothe;
use Illuminate\Http\Request;

class DiscountsController extends Controller
{

    public function index()
    {
        return new ProductCollection(Clothe::has('discount')->limit(3)->get()->load(['discount']));
    }


    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}

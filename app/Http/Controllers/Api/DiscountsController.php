<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ClotheCollection;
use App\Http\Resources\CollectionCollection;
use App\Http\Resources\DiscountCollection;
use App\Models\Clothe;
use App\Models\Collection;
use Illuminate\Http\Request;

class DiscountsController extends Controller
{

    public function index()
    {
        return new DiscountCollection(Clothe::has('discount')->limit(3)->get()->load(['discount']));
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

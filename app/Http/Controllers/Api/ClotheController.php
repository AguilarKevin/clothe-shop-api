<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductCollection;
use App\Http\Resources\ProductResource;
use App\Models\Clothe;
use Illuminate\Http\Request;

class ClotheController extends Controller
{

    public function index()
    {
        return new ProductCollection(Clothe::query()->latest()->with(['discount', 'clotheMedia'])->paginate(15));
    }

    public function store(Request $request)
    {
    }

    public function show(Clothe $clothe)
    {
        $clothe->load(['discount', 'clotheMedia']);

        return new ProductResource($clothe);
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ClotheCollection;
use App\Http\Resources\ClotheResource;
use App\Models\Clothe;
use Illuminate\Http\Request;

class ClotheController extends Controller
{

    public function index()
    {
        return new ClotheCollection(Clothe::query()->latest()->with(['discount, clotheMedia'])->paginate(10));
    }

    public function store(Request $request)
    {
    }

    public function show(Clothe $clothe)
    {
        return new ClotheResource($clothe);
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}

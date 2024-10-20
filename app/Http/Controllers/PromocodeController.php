<?php

namespace App\Http\Controllers;

use App\Models\Promocode;
use App\Http\Requests\Promocode\StoreRequest;
use App\Http\Requests\Promocode\UpdateRequest;
use App\Http\Resources\Promocode\PromocodeResource;
use Illuminate\Http\Response;

class PromocodeController extends Controller
{
    public function index()
    {
        return PromocodeResource::collection(Promocode::all())->resolve();
    }

    public function store(StoreRequest $storeRequest)
    {
        $data = $storeRequest->validated();
        $promocode = Promocode::create($data);
        return PromocodeResource::make($promocode)->resolve();
    }

    public function show(Promocode $promocode)
    {
        return PromocodeResource::make($promocode)->resolve();
    }

    public function update(UpdateRequest $updateRequest, Promocode $promocode)
    {
        $data = $updateRequest->validated();
        $promocode->update($data);
        $promocode = $promocode->fresh();
        return PromocodeResource::make($promocode)->resolve();
    }

    public function destroy(Promocode $promocode)
    {
        $promocode->delete();
        return response(Response::HTTP_OK);
    }
}

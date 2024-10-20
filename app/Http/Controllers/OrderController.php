<?php

namespace App\Http\Controllers;

use App\Models\Order;

use App\Http\Requests\Order\StoreRequest;
use App\Http\Requests\Order\UpdateRequest;
use App\Http\Resources\Order\OrderResource;
use Illuminate\Http\Response;

class OrderController extends Controller
{

    public function index()
    {
        return OrderResource::collection(Order::all())->resolve();
    }

    public function store(StoreRequest $storeRequest)
    {
        $data = $storeRequest->validated();
        $order = Order::create($data);
        return OrderResource::make($order)->resolve();
    }

    public function show(Order $order)
    {
        return OrderResource::make($order)->resolve();
    }

    public function update(UpdateRequest $updateRequest, Order $order)
    {
        $data = $updateRequest->validated();
        $order->update($data);
        $order = $order->fresh();
        return OrderResource::make($order)->resolve();
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return response(Response::HTTP_OK);
    }
}
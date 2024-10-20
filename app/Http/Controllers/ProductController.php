<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;
use App\Http\Resources\Product\ProductResource;
use App\Models\Product;
use Illuminate\Http\Response;

class ProductController extends Controller
{
	public function index()
	{
		return ProductResource::collection(Product::all())->resolve();
	}

	public function show(Product $product)
	{
		return ProductResource::make($product)->resolve();
	}

	public function store(StoreRequest $storeRequest)
	{
		$data = $storeRequest->validated();
		$product = Product::create($data);
		return ProductResource::make($product)->resolve();
	}

	public function update(UpdateRequest $updateRequest, Product $product)
	{
		$data = $updateRequest->validated();
		$product->update($data);
		$product = $product->fresh();
		return ProductResource::make($product)->resolve();
	}

	public function destroy(Product $product)
	{
		$product->delete();
		return response(Response::HTTP_OK);
	}
}

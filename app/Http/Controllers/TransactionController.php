<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Http\Requests\Transaction\StoreRequest;
use App\Http\Requests\Transaction\UpdateRequest;
use App\Http\Resources\Transaction\TransactionResource;

class TransactionController extends Controller
{

    public function index()
    {
        return TransactionResource::collection(Transaction::all())->resolve();
    }

    public function store(StoreRequest $storeRequest)
    {
        $data = $storeRequest->validated();
        $transaction = Transaction::create($data);
        return TransactionResource::make($transaction)->resolve();
    }

    public function show(Transaction $transaction)
    {
        return TransactionResource::make($transaction)->resolve();
    }

    public function update(UpdateRequest $updateRequest, Transaction $transaction)
    {
        $data = $updateRequest->validated();
        $transaction->update($data);
        $transaction = $transaction->fresh();
        return TransactionResource::make($transaction)->resolve();
    }
}
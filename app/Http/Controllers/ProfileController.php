<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Http\Requests\Profile\StoreRequest;
use App\Http\Requests\Profile\UpdateRequest;
use App\Http\Resources\Profile\ProfileResource;
use Illuminate\Http\Response;

class ProfileController extends Controller
{
    public function index()
    {
        return ProfileResource::collection(Profile::all())->resolve();
    }

    public function store(StoreRequest $storeRequest)
    {
        $data = $storeRequest->validated();
        $profile = Profile::create($data);
        return ProfileResource::make($profile)->resolve();
    }

    public function show(Profile $profile)
    {
        return ProfileResource::make($profile)->resolve();
    }

    public function update(UpdateRequest $updateRequest, Profile $profile)
    {
        $data = $updateRequest->validated();
        $profile->update($data);
        $profile = $profile->fresh();
        return ProfileResource::make($profile)->resolve();
    }

    public function destroy(Profile $profile)
    {
        $profile->delete();
        return response(Response::HTTP_OK);
    }
}
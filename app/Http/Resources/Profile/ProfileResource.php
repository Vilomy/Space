<?php

namespace App\Http\Resources\Profile;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProfileResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'middle_name' => $this->middle_name,
            'phone' => $this->phone,
            'gender' => $this->gender,
            'birthed_at' => $this->birthed_at,
            'address' => $this->address,
            'specialization' => $this->specialization,
            'balance' => $this->balance,
            'login' => $this->login,
        ];
    }
}

<?php

namespace App\Http\Resources\Promocode;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PromocodeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'code' => $this->code,
            'value' => $this->value,
            'expired_at' => $this->expired_at,
            'limit_from' => $this->limit_from,
            'user' => $this->user,
        ];
    }
}

<?php

namespace App\Http\Requests\Profile;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'middle_name' => 'required|string',
            'phone' => 'required|string',
            'gender' => 'required|integer',
            'birthed_at' => 'required|date',
            'address' => 'required|string',
            'specialization' => 'required|string',
            'balance' => 'required|numeric',
            'login' => 'required|string',
        ];
    }
}

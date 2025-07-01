<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppartementRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'street' => 'required|string',
            'city' => 'required|string',
            'country' => 'required|string',
            'description' => 'required|string',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'price_per_day' => 'required|numeric|min:0',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
            'user_id' => 'required|integer|exists:users,id'
        ];
    }


}

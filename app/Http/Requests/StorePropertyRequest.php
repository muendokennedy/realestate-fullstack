<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePropertyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
            return [
                'ownersName' => 'required | string',
                'category' => 'required | string',
                'location' => 'required | string',
                'price' => 'required | numeric',
                'status' => 'required | string'
             ];

    }

    public function messages(): array
    {
        return [
            'ownersName.required' => 'You must enter the name of the owner of the property',
            'category.required' => 'You must select the category of the property',
            'location.required' => 'You must enter the location of the property',
            'price.required' => 'You must enter the price of the property',
        ];
    }
}

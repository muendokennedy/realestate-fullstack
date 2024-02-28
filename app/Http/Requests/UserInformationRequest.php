<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserInformationRequest extends FormRequest
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
            'name' => 'required | string',
            'email' => 'required | string',
            'birthdate' => 'required | date',
            'mobilenumber' => 'required | numeric',
            'gender' => 'required | string',
            'occupation' => 'required | string',
            'identitydocument' => 'required | string',
            'IDnumber' => 'required | numeric',
            'issueplace' => 'required | string',
            'expirydate' => 'required | date',
            'countryissued' => 'required | string',
            'issueauthority' => 'required | string',
            'county' => 'required | string',
            'subcounty' => 'required | string',
            'ward' => 'required | string',
            'zipcode' => 'required | string',
            'address' => 'required | string',
            'town' => 'required | string',
            'propertyID' => 'required | numeric'
        ];
    }

    public function messages(): array
    {
        return [
            //
            'name.required' => 'We need to confirm your name please!',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password as PasswordRules;

class RegisterRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'first_name' =>['required','string'],
            'email' =>['required','email','unique:users,email'],
            'last_name' =>['required','string'],
            'shipping_address' =>['required','string'],
            'password' =>[
                'required',
                'confirmed',
                PasswordRules::min(8)->letters()->numbers()
            ]
        ];
    }
}

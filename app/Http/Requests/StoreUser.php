<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
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
            'email' => 'required|email|unique:users',
            'name' => 'required|string|max:50',
            'password' => 'required|confirmed|min"8'
        ];
    }
    
    public function messages()
    {
        return [
            'email.required' => 'Email is required',
            'name.required' => 'Name is required',
            'password.required' => 'Password is required'
        ];
    }
}

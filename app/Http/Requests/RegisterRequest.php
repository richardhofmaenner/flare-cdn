<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
          'firstname' => 'required|alpha|min:2|max:100',
          'lastname' => 'required|alpha|min:2|max:100',
          'email' => 'required|confirmed|unique:App\Models\User,email|email:rfc',
          'password' => 'required|confirmed|min:8'
        ];
    }
}

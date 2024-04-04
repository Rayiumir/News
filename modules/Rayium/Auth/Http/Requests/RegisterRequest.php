<?php

namespace modules\Rayium\Auth\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use modules\Rayium\Auth\Rules\ValidEmail;
use modules\Rayium\Auth\Rules\ValidPassword;

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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:6|max:255',
            'email' => ['required','email','unique:users,email', new ValidEmail()],
            'password' => ['required','string', new ValidPassword()]
        ];
    }
}

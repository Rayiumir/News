<?php

namespace modules\Rayium\Auth\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendEmailPasswordRecoveryRequest extends FormRequest
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
            'email' => 'required|email|min:6|max:190|exists:users,email'
        ];
    }
}

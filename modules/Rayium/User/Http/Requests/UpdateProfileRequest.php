<?php

namespace modules\Rayium\User\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check() === true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:3|max:255|unique:users,name,' . auth()->id(),
            'email' => 'required|email|min:3|max:255|unique:users,email,' . auth()->id(),
            'password' => 'nullable|string|min:6|max:255',
            'telegram' => 'nullable|string|min:3|max:255|unique:users,telegram,' . auth()->id(),
            'linkedin' => 'nullable|string|min:3|max:255|unique:users,linkedin,' . auth()->id(),
            'twitter' => 'nullable|string|min:3|max:255|unique:users,twitter,' . auth()->id(),
            'instagram' => 'nullable|string|min:3|max:255|unique:users,instagram,' . auth()->id(),
            'bio' => 'nullable|string|min:3',
            'imageName' => 'nullable|string',
            'imagePath' => 'nullable|string',
        ];
    }
}

<?php

namespace modules\Rayium\Role\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use modules\Rayium\Category\Models\Category;

class RoleRequest extends FormRequest
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
        $rules = [
            'name' => 'required|string|min:6|max:190|unique:roles,name',
            'permissions' => 'required|array|min:1',
        ];

        if (request()->method === 'PATCH')
        {
            $rules['name'] = 'required|string|min:6|max:190|unique:roles,name' . request()->id;
            $rules['permissions'] = 'nullable|array|min:1';
        }

        return $rules;
    }
}

<?php

namespace modules\Rayium\Category\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use modules\Rayium\Category\Models\Category;

class CategoryRequest extends FormRequest
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
            'parent_id' => 'nullable|exists:categories,id',
            'title' => 'required|string|min:6|max:190|unique:categories,id',
            'keywords' => 'nullable|string|min:3|max:250',
            'description' => 'nullable|string|min:3',
            'status' => ['required', 'string', Rule::in(Category::$statuses)]
        ];

        if (request()->method === 'PATCH')
        {
            $rules['title'] = 'required|string|min:6|max:190|unique:categories,id' . request()->id;
        }

        return $rules;
    }
}

<?php

namespace modules\Rayium\Post\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use modules\Rayium\Category\Models\Category;
use modules\Rayium\Post\Models\Post;

class PostRequest extends FormRequest
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
            'category_id' => 'nullable|exists:categories,id',
            'title' => 'required|string|min:6|max:190|unique:posts,title',
            'time_to_read' => 'nullable|numeric',
            'image' => 'required|mimes:png,jpeg,jpg|max:2048',
            'score' => 'nullable|numeric|in:1,2,3,4,5,6,7,8,9,10',
            'body' => 'nullable|string|min:3',
            'status' => ['required', Rule::in(Post::$statuses)],
            'type' => ['required', Rule::in(Post::$types)]
        ];

        if (request()->method === 'PATCH')
        {
            $rules['title'] = 'required|string|min:6|max:190|unique:posts,title' . request()->id;
            $rules['image'] = 'nullable|mimes:png,jpeg,jpg|max:2048';
        }

        return $rules;
    }
}

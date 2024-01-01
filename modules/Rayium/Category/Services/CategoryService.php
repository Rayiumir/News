<?php

namespace modules\Rayium\Category\Services;

use modules\Rayium\Category\Models\Category;

class CategoryService
{
    public function store($request)
    {
        return Category::query()->create([
            'user_id' => auth()->id(),
            'parent_id' => $request->parent_id,
            'title' => $request->title,
            'slug' => $this->makeSlug($request->title),
            'keywords' => $request->keywords,
            'description' => $request->description,
            'status' =>$request->status
        ]);
    }

    public function update($request, $id)
    {
        return Category::query()->whereId($id)->update([
            'user_id' => auth()->id(),
            'parent_id' => $request->parent_id,
            'title' => $request->title,
            'slug' => $this->makeSlug($request->title),
            'keywords' => $request->keywords,
            'description' => $request->description,
            'status' =>$request->status
        ]);
    }

    private function makeSlug($title)
    {
        $url = str_replace('_', '', $title);
        return preg_replace('/\s+/', '-', $url);
    }
}

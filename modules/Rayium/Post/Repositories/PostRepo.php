<?php

namespace modules\Rayium\Post\Repositories;

use modules\Rayium\Post\Models\Post;

class PostRepo
{
    public function index()
    {
        return $this->query()->latest();
    }

    public function findById($id)
    {
        return $this->query()->findOrFail($id);
    }

    public function delete($id)
    {
        return $this->query()->where('id', $id)->delete();
    }

    private function query()
    {
        return Post::query();
    }

    public function findBySlug($slug)
    {
        return $this->query()->whereSlug($slug)->first();
    }

    public function relatedPosts($categoryId, $id)
    {
        return $this->query()->where('category_id', $categoryId)->whereStatus(Post::STATUS_ACTIVE)->where('id', '!=', $id);
    }

    public function getPostsByCategoryId($category_id)
    {
        return $this->query()->whereStatus(Post::STATUS_ACTIVE)->where('category_id', $category_id);
    }

    public function getPostsByView()
    {
        return $this->query()->whereStatus(Post::STATUS_ACTIVE)->orderByViews();
    }

}

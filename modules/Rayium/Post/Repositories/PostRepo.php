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
}

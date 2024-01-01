<?php

namespace modules\Rayium\Category\Repositories;

use modules\Rayium\Category\Models\Category;

class CategoryRepo
{
    public function index()
    {
        return $this->query()->latest();
    }

    public function findById($id)
    {
        return $this->query()->findOrFail($id);
    }

    public function all()
    {
        return $this->query()->get();
    }

    public function delete()
    {
        return $this->query()->where('id', $id)->delete();
    }

    private function query()
    {
        return Category::query();
    }
}

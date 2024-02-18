<?php

namespace modules\Rayium\Comment\Repositories;

use modules\Rayium\Comment\Models\Comment;

class CommentRepo
{
    public function index()
    {
        return $this->query()->latest();
    }

    public function delete($id)
    {
        return $this->query()->where('id', $id)->delete();
    }

    public function findById($id)
    {
        return $this->query()->findOrFail($id);
    }

    public function changeStatus($id, $status)
    {
        return $this->findById($id)->update(['status' => $status]);
    }

    private function query()
    {
        return Comment::query();
    }

    public function getLatestComments()
    {
        return $this->query()->where('status', Comment::STATUS_ACTIVE)->latest();
    }

}

<?php

namespace modules\Rayium\User\Repositories;

use modules\Rayium\User\Models\User;

class UserRepo
{
    public function index()
    {
        return User::orderBy('last_seen', 'DESC')->latest()->paginate(10);

    }
    public function findById($id)
    {
        return User::query()->findOrFail($id);
    }

    public function delete($id)
    {
        return User::query()->where('id', $id)->delete();
    }

}

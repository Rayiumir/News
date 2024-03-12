<?php

namespace modules\Rayium\User\Repositories;

use modules\Rayium\Role\Models\Permission;
use modules\Rayium\User\Models\User;

class AuthorRepo
{
    public function authors()
    {
        return $this->query()->permission(Permission::PERMISSION_AUTHORS)->latest();
    }

    public function query()
    {
        return User::query();
    }

    public function findByName( $name )
    {
        return $this->query()->whereName($name)->permission(Permission::PERMISSION_AUTHORS)->first();
    }

}

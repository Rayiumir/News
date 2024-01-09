<?php

namespace modules\Rayium\Role\Repositories;

use Spatie\Permission\Models\Role;

class RoleRepo
{
    public function findById($id)
    {
        return $this->query()->findOrFail($id);
    }

    public function index()
    {
        return $this->query()->latest();
    }

    private function query()
    {
        return Role::query();
    }

    public function delete($id)
    {
        return $this->query()->whereId($id)->delete();
    }

}

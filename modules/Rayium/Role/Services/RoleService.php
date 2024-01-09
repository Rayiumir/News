<?php

namespace modules\Rayium\Role\Services;

use modules\Rayium\Role\Repositories\RoleRepo;
use Spatie\Permission\Models\Role;

class RoleService
{
    public function store($request)
    {
        return Role::query()->create(['name' => $request->name])->syncPermissions($request->permissions);
    }

    public function update($request, $id)
    {
        $roleRepo = new RoleRepo;
        $role = $roleRepo->findById($id);

        return $role->syncPermissions($request->permissions)->update(['name' => $request->name]);
    }
}

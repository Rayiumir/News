<?php

namespace modules\Rayium\User\Services;

use modules\Rayium\User\Models\User;

class UserService
{
    public function store($request)
    {
        return User::query()->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            //'password' => hash::make($request->password),
        ]);
    }

    public function update($request, $id)
    {
        return User::query()->where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
    }

    public function AddRole($role, $user)
    {
        return $user->assignRole($role);
    }

    public function deleteRole($user, $role)
    {
        return $user->removeRole($role);
    }
}

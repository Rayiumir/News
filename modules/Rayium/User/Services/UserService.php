<?php

namespace modules\Rayium\User\Services;

use Illuminate\Support\Facades\Storage;
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

    public function updateProfile($request, $id, $imageName, $imagePath){
        return User::query()->where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'telegram' => $request->telegram,
            'linkedin' => $request->linkedin,
            'instagram' => $request->instagram,
            'twitter' => $request->twitter,
            'bio' => $request->bio,
            'imageName' => $imageName,
            'imagePath' => $imagePath,
        ]);
    }

    public function uploadImage($file): array
    {
        $name = time() . '.' . $file->getClientOriginalExtension();

        Storage::disk('public')->putFileAs('images', $file, $name);

        $path = asset('storage/images/' . $name);

        return [$path, $name];
    }
}


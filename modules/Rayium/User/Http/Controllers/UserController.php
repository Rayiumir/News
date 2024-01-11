<?php

namespace modules\Rayium\User\Http\Controllers;

use App\Http\Controllers\Controller;
use modules\Rayium\Role\Repositories\RoleRepo;
use modules\Rayium\User\Http\Requests\AddRoleRequest;
use modules\Rayium\User\Http\Requests\UserRequest;
use modules\Rayium\User\Http\Requests\UserUpdateRequest;
use modules\Rayium\User\Repositories\UserRepo;
use modules\Rayium\User\Services\UserService;

class UserController extends Controller
{
    public UserRepo $repo;
    public UserService $service;

    public function __construct(UserRepo $userRepo, UserService $userService)
    {
        $this->repo = $userRepo;
        $this->service = $userService;
    }

    public function index()
    {
        $users = $this->repo->index();
        return view('User::index', compact('users'));
    }

    public function create()
    {
        return view('User::create');
    }

    public function store(UserRequest $request)
    {
        $this->service->store($request);

        $notification = array(
            'message' => 'کاربر جدید با موفقیت ایجاد شد.',
            'alert-type' => 'success'
        );

        return to_route('users.index')->with($notification);
    }

    public function edit($id)
    {
        $user = $this->repo->findById($id);

        return view('User::edit', compact('user'));
    }

    public function update(UserUpdateRequest $request, $id)
    {
        $this->service->update($request, $id);

        $notification = array(
            'message' => 'کاربر با موفقیت ویرایش شد.',
            'alert-type' => 'success'
        );

        return to_route('users.index')->with($notification);
    }

    public function destroy($id)
    {
        $this->repo->delete($id);

        $notification = array(
            'message' => 'کاربر با موفقیت حذف شد.',
            'alert-type' => 'success'
        );

        return to_route('users.index')->with($notification);
    }

    public function addRole($user_id, RoleRepo $roleRepo)
    {
        $roles = $roleRepo->index()->get();
        return view('User::addRole', compact('user_id', 'roles'));
    }

    public function storeRole(AddRoleRequest $request, $userId)
    {
        $user = $this->repo->findById($userId);
        $this->service->AddRole($request->role, $user);

        $notification = array(
            'message' => 'دسترسی به کاربر با موفقیت افزوده شد.',
            'alert-type' => 'success'
        );

        return to_route('users.index')->with($notification);
    }

    public function removeRole($userId, $roleId, RoleRepo $roleRepo)
    {
        $user = $this->repo->findById($userId);
        $role = $roleRepo->findById($roleId);
        $this->service->deleteRole($user, $role->name);

        $notification = array(
            'message' => 'دسترسی کاربر با موفقیت حذف شد.',
            'alert-type' => 'success'
        );

        return to_route('users.index')->with($notification);
    }
}

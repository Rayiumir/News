<?php

namespace modules\Rayium\User\Http\Controllers;

use App\Http\Controllers\Controller;
use modules\Rayium\Role\Repositories\RoleRepo;
use modules\Rayium\User\Http\Requests\AddRoleRequest;
use modules\Rayium\User\Http\Requests\UpdateProfileRequest;
use modules\Rayium\User\Http\Requests\UserRequest;
use modules\Rayium\User\Http\Requests\UserUpdateRequest;
use modules\Rayium\User\Models\User;
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
        $this->authorize('index', User::class);
        $users = $this->repo->index();
        $role = auth()->user();
        $roles = optional($role->roles->first())->name ?? 'عادی';
        return view('User::index', compact('users', 'roles'));
    }

    public function create()
    {
        $this->authorize('index', User::class);
        return view('User::create');
    }

    public function store(UserRequest $request)
    {
        $this->authorize('index', User::class);
        $this->service->store($request);

        $notification = array(
            'message' => 'کاربر جدید با موفقیت ایجاد شد.',
            'alert-type' => 'success'
        );

        return to_route('users.index')->with($notification);
    }

    public function edit($id)
    {
        $this->authorize('index', User::class);
        $user = $this->repo->findById($id);

        return view('User::edit', compact('user'));
    }

    public function update(UserUpdateRequest $request, $id)
    {
        $this->authorize('index', User::class);
        $this->service->update($request, $id);

        $notification = array(
            'message' => 'کاربر با موفقیت ویرایش شد.',
            'alert-type' => 'success'
        );

        return to_route('users.index')->with($notification);
    }

    public function destroy($id)
    {
        $this->authorize('index', User::class);
        $this->repo->delete($id);

        $notification = array(
            'message' => 'کاربر با موفقیت حذف شد.',
            'alert-type' => 'success'
        );

        return to_route('users.index')->with($notification);
    }

    public function addRole($user_id, RoleRepo $roleRepo)
    {
        $this->authorize('index', User::class);
        $roles = $roleRepo->index()->get();
        return view('User::addRole', compact('user_id', 'roles'));
    }

    public function storeRole(AddRoleRequest $request, $userId)
    {
        $this->authorize('index', User::class);
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
        $this->authorize('index', User::class);
        $user = $this->repo->findById($userId);
        $role = $roleRepo->findById($roleId);
        $this->service->deleteRole($user, $role->name);

        $notification = array(
            'message' => 'دسترسی کاربر با موفقیت حذف شد.',
            'alert-type' => 'success'
        );

        return to_route('users.index')->with($notification);
    }

    public function profile()
    {
        return view('User::profile');
    }
    public function updateProfile(UpdateProfileRequest $request, UserService $userService)
    {
        if ($request->image) {
            [$imageName, $imagePath] = $this->service->uploadImage($request->file('image'), 'users');
        } else {
            $imageName = auth()->user()->imageName;
            $imagePath = auth()->user()->imagePath;
        }

        $userService->updateProfile($request, auth()->id(), $imageName, $imagePath);

        $notification = array(
            'message' => 'نمایه با موفقیت به روز شد',
            'alert-type' => 'success'
        );

        return back()->with($notification);
    }
}

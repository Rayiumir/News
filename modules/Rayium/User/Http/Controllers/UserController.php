<?php

namespace modules\Rayium\User\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
        return view('User::index');
    }

    public function edit($id)
    {
        $user = $this->repo->findById($id);
        return view('User::edit', compact('user'));
    }

    public function update(UserUpdateRequest $request, $id)
    {
        $this->service->update($request, $id);
        return to_route('users.index');
    }

    public function destroy($id)
    {
        $this->repo->delete($id);
        return to_route('users.index');
    }
}

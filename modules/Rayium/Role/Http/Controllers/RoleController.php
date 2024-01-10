<?php

namespace modules\Rayium\Role\Http\Controllers;

use App\Http\Controllers\Controller;
use modules\Rayium\Role\Http\Requests\RoleRequest;
use modules\Rayium\Role\Repositories\PermissionRepo;
use modules\Rayium\Role\Repositories\RoleRepo;
use modules\Rayium\Role\Services\RoleService;

class RoleController extends Controller
{
    public RoleRepo $repo;
    public RoleService $service;

    public function __construct(RoleRepo $roleRepo, RoleService $roleService)
    {
        $this->repo = $roleRepo;
        $this->service = $roleService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = $this->repo->index()->paginate(10);
        return view('Role::index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(PermissionRepo $permissionRepo)
    {
        $permissions = $permissionRepo->all();
        return view('Role::create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RoleRequest $request)
    {
        $this->service->store($request);

        $notification = array(
            'message' => 'مقام با موفقیت ایجاد شد',
            'alert-type' => 'success'
        );

        return to_route('roles.index')->with($notification);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PermissionRepo $permissionRepo, $id)
    {
        $role = $this->repo->findById($id);
        $permissions = $permissionRepo->all();
        return view('Role::edit', compact('permissions', 'role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RoleRequest $request, $id)
    {
        $this->service->update($request, $id);

        $notification = array(
            'message' => 'مقام با موفقیت ویرایش شد',
            'alert-type' => 'success'
        );

        return to_route('roles.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $this->repo->delete($id);

        $notification = array(
            'message' => 'مقام با موفقیت حذف شد',
            'alert-type' => 'success'
        );

        return to_route('roles.index')->with($notification);
    }
}

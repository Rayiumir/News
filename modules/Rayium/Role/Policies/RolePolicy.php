<?php

namespace modules\Rayium\Role\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use modules\Rayium\Role\Models\Permission;
use modules\Rayium\User\Models\User;

class RolePolicy
{
    use HandlesAuthorization;
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function index(User $user)
    {
        if($user->hasPermissionTo(Permission::PERMISSION_ROLES))
        {
            return true;
        }
    }
}

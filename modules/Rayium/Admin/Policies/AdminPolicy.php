<?php

namespace modules\Rayium\Admin\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use modules\Rayium\Role\Models\Permission;
use modules\Rayium\User\Models\User;

class AdminPolicy
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
        if($user->hasPermissionTo(Permission::PERMISSION_ADMIN))
        {
            return true;
        }
    }
}

<?php

namespace modules\Rayium\Role\Models;

use Spatie\Permission\Models\Permission as PermissionSpatie;
class Permission extends PermissionSpatie
{
    PUBLIC CONST PERMISSION_SUPER_ADMIN = 'permission super admin';
    PUBLIC CONST PERMISSION_ADMIN = 'permission admin';
    PUBLIC CONST PERMISSION_USERS = 'permission users';
    PUBLIC CONST PERMISSION_CATEGORIES = 'permission categories';
    PUBLIC CONST PERMISSION_ROLES = 'permission roles';
    PUBLIC CONST PERMISSION_POSTS = 'permission posts';

    public static array $permissions = [
        self::PERMISSION_SUPER_ADMIN,
        self::PERMISSION_ADMIN,
        self::PERMISSION_USERS,
        self::PERMISSION_CATEGORIES,
        self::PERMISSION_ROLES,
        self::PERMISSION_POSTS
    ];
}

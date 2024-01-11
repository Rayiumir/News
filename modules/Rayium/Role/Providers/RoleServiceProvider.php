<?php

namespace modules\Rayium\Role\Providers;

use Database\Seeders\DatabaseSeeder;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use modules\Rayium\Role\Database\Seeders\PermissionSeeder;
use modules\Rayium\Role\Models\Permission;

class RoleServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
        $this->loadViewsFrom(__DIR__ . '/../Resources/Views', 'Role');
        $this->loadRoutesFrom(__DIR__ . '/../Routes/role_routes.php');
        $this->loadJsonTranslationsFrom(__DIR__ . '/../Resources/Lang');
        DatabaseSeeder::$seeders[] = PermissionSeeder::class;

        Gate::before(static function ($user){
            return $user->hasPermissionTo(Permission::PERMISSION_SUPER_ADMIN) ? true : null;
        });
    }

    public function boot()
    {
        $this->app->booted(static function(){
            config()->set('AdminConfig.menus.role', [
                'url' => route('roles.index'),
                'title' => 'دسترسی',
                'icon' => 'fa-lock'
            ]);
        });
    }
}

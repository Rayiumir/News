<?php

namespace modules\Rayium\Role\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class RoleServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
        $this->loadViewsFrom(__DIR__ . '/../Resources/Views', 'Role');
        Route::middleware('web')->group(__DIR__ . '/../Routes/role_routes.php');
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

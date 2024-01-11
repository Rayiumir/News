<?php

namespace modules\Rayium\User\Provider;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use modules\Rayium\User\Models\User;
use modules\Rayium\User\Policies\UserPolicy;

class UserServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
        $this->loadViewsFrom(__DIR__ . '/../Resources/Views', 'User');
        $this->loadRoutesFrom(__DIR__ . '/../Routes/user_routes.php');
        Gate::policy(User::class, UserPolicy::class);
    }

    public function boot()
    {
        $this->app->booted(static function(){
            config()->set('AdminConfig.menus.users', [
                'url' => route('users.index'),
                'title' => 'کاربران',
                'icon' => 'fa-users'
            ]);
        });
    }
}

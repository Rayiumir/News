<?php

namespace modules\Rayium\User\Provider;

use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
        $this->loadViewsFrom(__DIR__ . '/../Resources/Views', 'User');
        $this->loadRoutesFrom(__DIR__ . '/../Routes/user_routes.php');
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

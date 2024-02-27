<?php

namespace modules\Rayium\User\Provider;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use modules\Rayium\User\Models\User;
use modules\Rayium\User\Policies\UserPolicy;

class UserServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
        $this->loadViewsFrom(__DIR__ . '/../Resources/Views', 'User');
        $this->loadRoutesFrom(__DIR__ . '/../Routes/user_routes.php');
        Gate::policy(User::class, UserPolicy::class);
        Factory::guessFactoryNamesUsing(static function (string $name){
            return '\modules\Rayium\User\Database\Factories\\' .class_basename($name). 'Factory';
        });
    }

    public function boot(): void
    {
        $this->app->booted(static function(){
            config()->set('AdminConfig.menus.users', [
                'url' => route('User::index'),
                'title' => 'کاربران',
                'icon' => 'fa-users'
            ]);
        });
    }
}

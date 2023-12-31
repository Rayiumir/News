<?php

namespace modules\Rayium\Auth\Provider;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    public function register()
    {
        //$this->loadRoutesFrom(__DIR__ . '/../Routes/auth_routes.php');
        Route::middleware('web')->group(__DIR__ . '/../Routes/auth_routes.php');
        $this->loadViewsFrom(__DIR__ . '/../Resources/Views', 'Auth');
    }
}

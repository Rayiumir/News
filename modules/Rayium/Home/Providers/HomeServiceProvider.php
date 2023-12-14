<?php

namespace modules\Rayium\Home\Providers;

use Illuminate\Support\ServiceProvider;

class HomeServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadRoutesFrom(__DIR__ . '/../Routes/home_route.php');
        $this->loadViewsFrom(__DIR__ . '/../Resources/Views', 'Home');
    }

    public function boot()
    {
        //
    }
}

<?php

namespace modules\Rayium\Admin\Provider;

use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadRoutesFrom(__DIR__ . '/../Routes/Admin_routes.php');
        $this->loadViewsFrom(__DIR__ . '/../Resources/Views', 'Admin');
    }
}

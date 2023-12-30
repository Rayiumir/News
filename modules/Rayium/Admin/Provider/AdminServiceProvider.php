<?php

namespace modules\Rayium\Admin\Provider;

use Closure;
use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadRoutesFrom(__DIR__ . '/../Routes/admin_routes.php');
        $this->loadViewsFrom(__DIR__ . '/../Resources/Views', 'Admin');
        $this->mergeConfigFrom(__DIR__ . '/../Config/config.php', 'AdminConfig');
    }

    public function boot()
    {
        $this->app->booted(static function(){
            config()->set('AdminConfig.menus.admin', [
                'url' => route('admin.index'),
                'title' => 'میزکار اصلی',
                'icon' => 'fa-home'
            ]);
        });
    }
}

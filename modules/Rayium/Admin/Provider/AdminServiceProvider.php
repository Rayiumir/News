<?php

namespace modules\Rayium\Admin\Provider;

use Closure;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use modules\Rayium\Admin\Models\Admin;
use modules\Rayium\Admin\Policies\AdminPolicy;

class AdminServiceProvider extends ServiceProvider
{
    public function register()
    {
        Route::middleware('web')->group(__DIR__ . '/../Routes/admin_routes.php');
        $this->loadViewsFrom(__DIR__ . '/../Resources/Views', 'Admin');
        $this->mergeConfigFrom(__DIR__ . '/../Config/config.php', 'AdminConfig');
        Gate::policy(Admin::class,AdminPolicy::class);
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

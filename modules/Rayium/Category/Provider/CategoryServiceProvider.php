<?php

namespace modules\Rayium\Category\Provider;

use Illuminate\Support\ServiceProvider;

class CategoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadRoutesFrom(__DIR__ . '/../Routes/category_routes.php');
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
        $this->loadViewsFrom(__DIR__ . '/../Resources/Views', 'Category');
    }

    public function boot()
    {
        $this->app->booted(static function(){
            config()->set('AdminConfig.menus.category', [
                'url' => route('category.index'),
                'title' => 'دسته بندی ها',
                'icon' => 'fa-list-tree'
            ]);
        });
    }
}

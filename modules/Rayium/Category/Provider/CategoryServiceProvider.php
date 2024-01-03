<?php

namespace modules\Rayium\Category\Provider;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class CategoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        Route::middleware('web')->group(__DIR__ . '/../Routes/category_routes.php');
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
        $this->loadViewsFrom(__DIR__ . '/../Resources/Views', 'Category');
        $this->loadJsonTranslationsFrom(__DIR__ . '/../Resources/Lang');
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

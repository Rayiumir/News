<?php

namespace modules\Rayium\Home\Providers;

use Illuminate\Support\ServiceProvider;
use modules\Rayium\Category\Repositories\CategoryRepo;

class HomeServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/../Routes/home_route.php');
        $this->loadViewsFrom(__DIR__ . '/../Resources/Views', 'Home');
    }

    public function boot(): void
    {
        view()->composer(['Home::parts.header', 'Home::parts.footer'], static function($view){
            $categoryRepo = new CategoryRepo;
            $categories = $categoryRepo->getActiveCategories()->get();

            $view->with(['categories' => $categories]);
        });
    }
}

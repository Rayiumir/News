<?php

namespace modules\Rayium\Post\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use modules\Rayium\Post\Models\Post;
use modules\Rayium\Post\Policies\PostPolicy;

class PostServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
        $this->loadViewsFrom(__DIR__ . '/../Resources/Views', 'Post');
        $this->loadRoutesFrom(__DIR__ . '/../Routes/post_routes.php');
        $this->loadJsonTranslationsFrom(__DIR__ . '/../Resources/Lang');
        Gate::policy(Post::class, PostPolicy::class);
    }

    public function boot()
    {
        $this->app->booted(static function(){
            config()->set('AdminConfig.menus.post', [
                'url' => route('posts.index'),
                'title' => 'نوشته ها',
                'icon' => 'fa-newspaper'
            ]);
        });
    }
}

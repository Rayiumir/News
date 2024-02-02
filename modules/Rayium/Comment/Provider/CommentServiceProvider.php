<?php

namespace modules\Rayium\Comment\Provider;

use Illuminate\Support\ServiceProvider;

class CommentServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/../Routes/comment_routes.php');
        $this->loadViewsFrom(__DIR__ . '/../Resources/Views', 'Comment');
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
    }
    public function boot(): void
    {
        $this->app->booted(static function(){
            config()->set('AdminConfig.menus.Comment', [
                'url' => route('comments.index'),
                'title' => 'نظرات',
                'icon' => 'fa-comments'
            ]);
        });
    }
}

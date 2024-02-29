<?php

namespace modules\Rayium\Comment\Provider;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use modules\Rayium\Comment\Models\Comment;
use modules\Rayium\Comment\Policies\CommentPolicy;

class CommentServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/../Routes/comment_routes.php');
        $this->loadViewsFrom(__DIR__ . '/../Resources/Views', 'Comment');
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
        Gate::policy(Comment::class,CommentPolicy::class);
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

<?php

Route::group(['prefix' => 'admin', 'middleware' => 'web'], static function ($router){
    $router->patch('/posts/{id}/status', [\modules\Rayium\Post\Http\Controllers\PostController::class, 'changeStatus'])->name('posts.status');
    $router->resource('/posts', \modules\Rayium\Post\Http\Controllers\PostController::class)->except('show');
});

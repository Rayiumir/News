<?php

Route::group([ 'namespace' => 'Rayium\Home', 'middleware' => 'web'], function ($router){
    $router->get('/', [\modules\Rayium\Home\Http\Controllers\HomeController::class, 'index'])->name('home.index');
});

Route::group(['namespace' => 'Rayium\Home', 'middleware' => 'web'], function ($router){
    $router->get('/posts/{slug}', [\modules\Rayium\Home\Http\Controllers\HomeController::class, 'single'])->name('home.single');
});

Route::group(['namespace' => 'Rayium\Home'], static function ($router){
    $router->get('/authors', [ \modules\Rayium\User\Http\Controllers\AuthorController::class, 'authors']);
    $router->get('/authors/{name}', [ \modules\Rayium\User\Http\Controllers\AuthorController::class, 'author'])->name('authors.author');

    $router->get('/profile', [\modules\Rayium\User\Http\Controllers\UserController::class, 'profile'])->name('users.profile');
    $router->patch('/profile', [\modules\Rayium\User\Http\Controllers\UserController::class, 'updateProfile'])->name('users.update.profile');
});

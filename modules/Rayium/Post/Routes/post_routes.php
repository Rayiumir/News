<?php

Route::group(['prefix' => 'admin', 'middleware' => 'web'], static function ($router){
    $router->resource('/posts', \modules\Rayium\Post\Http\Controllers\PostController::class)->except('show');
});

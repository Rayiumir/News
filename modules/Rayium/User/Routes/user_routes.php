<?php


use modules\Rayium\User\Http\Controllers\UserController;

Route::group(['prefix' => 'admin', 'middleware' => 'web'], function ($router){
    $router->resource('/users', UserController::class)->except('show');
});


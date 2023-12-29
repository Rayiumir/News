<?php

Route::group(['prefix' => 'admin', 'middleware' => 'web'], function ($router){
    $router->resource('/users', \modules\Rayium\User\Http\Controllers\UserController::class)->except('show');
});


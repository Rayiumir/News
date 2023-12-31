<?php

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], static function ($router){
    $router->resource('/users', \modules\Rayium\User\Http\Controllers\UserController::class)->except('show');
});


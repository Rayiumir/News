<?php

use modules\Rayium\Home\Http\Controllers\HomeController;


Route::group(['namespace' => 'Rayium\Home', 'middleware' => 'web'], function ($router){
    $router->get('/', [HomeController::class, 'index'])->name('home.index');
});

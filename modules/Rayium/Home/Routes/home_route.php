<?php

use modules\Rayium\Home\Http\Controllers\HomeController;


Route::group(['namespace' => 'Rayium\Home'], function ($router){
    $router->get('/', [HomeController::class, 'index']);
});

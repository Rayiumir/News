<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'middleware' => 'web'], function ($router){
    $router->resource('/category', \modules\Rayium\Category\Http\Controllers\CategoryController::class)->except('show');
});

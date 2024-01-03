<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin'], function ($router){
    $router->patch('categories/{id}/status', [\modules\Rayium\Category\Http\Controllers\CategoryController::class, 'changeStatus'])->name('categories.status');
    $router->resource('/category', \modules\Rayium\Category\Http\Controllers\CategoryController::class)->except('show');
});

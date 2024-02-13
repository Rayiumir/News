<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'middleware' => 'web'], function ($router){
    $router->patch('categories/{id}/status', [\modules\Rayium\Category\Http\Controllers\CategoryController::class, 'changeStatus'])->name('categories.status');
    $router->resource('/category', \modules\Rayium\Category\Http\Controllers\CategoryController::class)->except('show');
});

Route::group(['namespace' => 'Rayium/Home'], function ($router){
    $router->get('categories/{slug}', [\modules\Rayium\Category\Http\Controllers\CategoryController::class, 'Single'])->name('categories.single');
});


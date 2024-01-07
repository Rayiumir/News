<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin'], function ($router){
    //$router->patch('categories/{id}/status', [\modules\Rayium\Role\Http\Controllers\RoleController::class, 'changeStatus'])->name('categories.status');
    $router->resource('/roles', \modules\Rayium\Role\Http\Controllers\RoleController::class)->except('show');
});

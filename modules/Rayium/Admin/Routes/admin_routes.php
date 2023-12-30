<?php

use modules\Rayium\Admin\Http\Controllers\AdminController;

Route::group(['middleware' => 'web'], function ($router){
    $router->resource('/admin', AdminController::class)->except('show');
});

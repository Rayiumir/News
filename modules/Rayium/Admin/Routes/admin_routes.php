<?php

use modules\Rayium\Admin\Http\Controllers\AdminController;

Route::group(['namespace' => 'Rayium\Admin'], function ($router){
    $router->get('/admin', [AdminController::class, 'index'])->name('admin.index');
});

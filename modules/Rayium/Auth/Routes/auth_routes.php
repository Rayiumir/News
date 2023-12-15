<?php


use modules\Rayium\Auth\Http\Controllers\RegisterController;

Route::group(['namespace' => 'Rayium\Auth'], function ($router){
    $router->get('/register', [RegisterController::class, 'index'])->name('auth.register');
    $router->post('/register', [RegisterController::class, 'register'])->name('auth.register.store');
});

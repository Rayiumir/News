<?php


use modules\Rayium\Auth\Http\Controllers\LoginController;
use modules\Rayium\Auth\Http\Controllers\RegisterController;
use modules\Rayium\Auth\Http\Controllers\VerifyController;

Route::group(['namespace' => 'Rayium\Auth', 'middleware' => 'web'], function ($router){
    $router->get('/register', [RegisterController::class, 'index'])->name('auth.register');
    $router->post('/register', [RegisterController::class, 'store'])->name('auth.register.store');

    $router->get('/login', [LoginController::class, 'index'])->name('auth.login');
    $router->post('/login', [LoginController::class, 'store'])->name('auth.login.store');

    Route::group(['middleware' => 'auth', 'signed', 'throttle:5,1'], function ($router){
        $router->get('verify/email', [VerifyController::class, 'view'])->name('auth.email.verify');
        $router->get('email/verify/{id}/{hash}', [VerifyController::class, 'verify'])->name('verification.verify');
        $router->get('email/verify/resend', [VerifyController::class, 'resend'])->name('verify.resend');
    });

});

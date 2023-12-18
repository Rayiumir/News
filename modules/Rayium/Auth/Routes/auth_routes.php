<?php


use modules\Rayium\Auth\Http\Controllers\LoginController;
use modules\Rayium\Auth\Http\Controllers\RegisterController;
use modules\Rayium\Auth\Http\Controllers\ResetController;
use modules\Rayium\Auth\Http\Controllers\VerifyController;

Route::group(['namespace' => 'Rayium\Auth'], function ($router){

    // Register User

    $router->get('/register', [RegisterController::class, 'index'])->name('auth.register');
    $router->post('/register', [RegisterController::class, 'store'])->name('auth.register.store');

    // Login User

    $router->get('/login', [LoginController::class, 'index'])->name('auth.login');
    $router->post('/login', [LoginController::class, 'store'])->name('auth.login.store');

    // Verify Email

    $router->get('verify/email', [VerifyController::class, 'view'])->name('auth.email.verify');
    $router->get('email/verify/{id}/{hash}', [VerifyController::class, 'verify'])->name('verification.verify')->middleware(['auth', 'signed']);
    $router->get('email/verify/resend', [VerifyController::class, 'resend'])->name('verify.resend')->middleware(['auth', 'throttle:5,1']);

    // Password Reset

    $router->get('password/email', [ResetController::class, 'view'])->name('auth.password.email')->middleware('guest');
    $router->post('password/send-email', [ResetController::class, 'SendEmail'])->name('auth.password.send.email')->middleware('guest');
    $router->get('password/reset', [ResetController::class, 'reset'])->name('auth.password.reset')->middleware('guest');
});

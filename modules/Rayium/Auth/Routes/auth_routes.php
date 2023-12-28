<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'modules\Rayium\Auth\Http\Controllers', 'middleware' => 'web'], function ($router){

    // Register User

    $router->get('register', [RegisterController::class, 'index'])->name('auth.register');
    $router->post('register', [RegisterController::class, 'store'])->name('auth.register.store');

    // Login User

    $router->get('login', [LoginController::class, 'index'])->name('login');
    //$router->get('login', [LoginController::class, 'index'])->name('auth.login');
    $router->post('login', [LoginController::class, 'store'])->name('auth.login.store');

    // Verify Email

    $router->get('verify/email', [VerifyController::class, 'view'])->name('auth.email.verify');
    $router->get('email/verify/{id}/{hash}', [VerifyController::class, 'verify'])->name('verification.verify')->middleware(['auth', 'signed']);
    $router->get('email/verify/resend', [VerifyController::class, 'resend'])->name('verify.resend')->middleware(['auth', 'throttle:5,1']);

    // Password Reset

    $router->get('password/email', [ResetController::class, 'view'])->name('auth.password.email')->middleware('guest');
    $router->post('password/send-email', [ResetController::class, 'SendEmail'])->name('auth.password.send.email')->middleware('guest');
    $router->get('password/reset', [ResetController::class, 'reset'])->name('password.reset')->middleware('guest');
    $router->post('password/reset', [ResetController::class, 'update'])->name('auth.password.update')->middleware('guest');

    // Logout

    $router->get('logout', LogoutController::class)->name('auth.logout')->middleware('auth');
});
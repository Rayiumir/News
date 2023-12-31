<?php

use Illuminate\Support\Facades\Route;

Route::group([], function ($router){

    // Register User

    $router->get('register', [\modules\Rayium\Auth\Http\Controllers\RegisterController::class, 'index'])->name('auth.register');
    $router->post('register', [\modules\Rayium\Auth\Http\Controllers\RegisterController::class, 'store'])->name('auth.register.store');

    // Login User

    $router->get('login', [\modules\Rayium\Auth\Http\Controllers\LoginController::class, 'index'])->name('login');
    //$router->get('login', [LoginController::class, 'index'])->name('auth.login');
    $router->post('login', [\modules\Rayium\Auth\Http\Controllers\LoginController::class, 'store'])->name('auth.login.store');

    // Verify Email

    $router->get('verify/email', [\modules\Rayium\Auth\Http\Controllers\VerifyController::class, 'view'])->name('auth.email.verify');
    $router->get('email/verify/{id}/{hash}', [\modules\Rayium\Auth\Http\Controllers\VerifyController::class, 'verify'])->name('verification.verify')->middleware(['auth', 'signed']);
    $router->get('email/verify/resend', [\modules\Rayium\Auth\Http\Controllers\VerifyController::class, 'resend'])->name('verify.resend')->middleware(['auth', 'throttle:5,1']);

    // Password Reset

    $router->get('password/email', [\modules\Rayium\Auth\Http\Controllers\ResetController::class, 'view'])->name('auth.password.email')->middleware('guest');
    $router->post('password/send-email', [\modules\Rayium\Auth\Http\Controllers\ResetController::class, 'SendEmail'])->name('auth.password.send.email')->middleware('guest');
    $router->get('password/reset', [\modules\Rayium\Auth\Http\Controllers\ResetController::class, 'reset'])->name('password.reset')->middleware('guest');
    $router->post('password/reset', [\modules\Rayium\Auth\Http\Controllers\ResetController::class, 'update'])->name('auth.password.update')->middleware('guest');

    // Logout

    $router->get('logout', \modules\Rayium\Auth\Http\Controllers\LogoutController::class)->name('auth.logout')->middleware('auth');
});

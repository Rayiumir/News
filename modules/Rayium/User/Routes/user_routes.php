<?php

Route::group(['prefix' => 'admin', 'middleware' => 'web'], static function ($router){

    $router->get('/users/add/{id}/role', [\modules\Rayium\User\Http\Controllers\UserController::class, 'addRole'])->name('users.add.roles');
    $router->post('/users/store/{id}/role', [\modules\Rayium\User\Http\Controllers\UserController::class, 'storeRole'])->name('users.store.roles');
    $router->delete('/users/remove/{userId}/role/{roleId}', [\modules\Rayium\User\Http\Controllers\UserController::class, 'removeRole'])->name('users.remove.roles');

    $router->resource('/users', \modules\Rayium\User\Http\Controllers\UserController::class)->except('show');

    $router->get('/profile', [\modules\Rayium\User\Http\Controllers\UserController::class, 'profile'])->name('users.profile')->middleware('auth');
    $router->patch('/profile', [\modules\Rayium\User\Http\Controllers\UserController::class, 'updateProfile'])->name('update.profile')->middleware('auth');
});

//Route::group(['prefix' => 'users', 'middleware' => 'web'], static function ($router) {
//    $router->get('/profile', [\modules\Rayium\User\Http\Controllers\ProfileController::class, 'index'])->name('profile.index');
//    $router->post('/profile/store', [\modules\Rayium\User\Http\Controllers\ProfileController::class, 'store'])->name('profile.store');
//});


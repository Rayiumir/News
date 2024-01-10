<?php

Route::group(['prefix' => 'admin', 'middleware' => 'web'], static function ($router){
    $router->get('/users/add/{id}/role', [\modules\Rayium\User\Http\Controllers\UserController::class, 'addRole'])->name('users.add.roles');
    $router->post('/users/store/{id}/role', [\modules\Rayium\User\Http\Controllers\UserController::class, 'storeRole'])->name('users.store.roles');
    $router->delete('/users/remove/{id}/role/{roleId}', [\modules\Rayium\User\Http\Controllers\UserController::class, 'removeRole'])->name('users.remove.roles');

    $router->resource('/users', \modules\Rayium\User\Http\Controllers\UserController::class)->except('show');
});


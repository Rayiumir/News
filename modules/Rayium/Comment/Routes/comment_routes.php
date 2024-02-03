<?php

Route::group(['prefix' => 'admin', 'middleware' => 'web'], static function ($router){
    $router->patch('/comments/{id}/status/active', [\modules\Rayium\Comment\Http\Controllers\CommentController::class, 'active'])->name('comments.status.active');
    $router->patch('/comments/{id}/status/inactive', [\modules\Rayium\Comment\Http\Controllers\CommentController::class, 'inactive'])->name('comments.status.inactive');
    $router->resource('/comments', \modules\Rayium\Comment\Http\Controllers\CommentController::class)->except('show');
    $router->delete('/comments/{id}', [\modules\Rayium\Comment\Http\Controllers\CommentController::class, 'destroy'])->name('comments.destroy');
});

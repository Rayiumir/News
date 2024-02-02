<?php

Route::group(['prefix' => 'admin', 'middleware' => 'web'], static function ($router){
    $router->patch('/comments/{id}/status', [\modules\Rayium\Comment\Http\Controllers\CommentController::class, 'changeStatus'])->name('comments.status');
    $router->resource('/comments', \modules\Rayium\Comment\Http\Controllers\CommentController::class)->except('show');
    $router->delete('/comments/{id}', [\modules\Rayium\Comment\Http\Controllers\CommentController::class, 'destroy'])->name('comments.destroy');
});

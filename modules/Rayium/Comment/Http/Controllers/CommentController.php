<?php

namespace modules\Rayium\Comment\Http\Controllers;

use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    public function index()
    {
        return view('Comment::index');
    }
}

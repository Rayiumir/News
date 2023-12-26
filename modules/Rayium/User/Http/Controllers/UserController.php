<?php

namespace modules\Rayium\User\Http\Controllers;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        return view('User::index');
    }
}

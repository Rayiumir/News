<?php

namespace modules\Rayium\Auth\Http\Controllers;

use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function index(){
        return view('Auth::login');
    }
}

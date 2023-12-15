<?php

namespace modules\Rayium\Auth\Http\Controllers;

use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function index(){
        return view('Auth::index');
    }
}

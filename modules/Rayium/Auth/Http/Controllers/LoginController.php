<?php

namespace modules\Rayium\Auth\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use modules\Rayium\Auth\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function index(){
        return view('Auth::login');
    }

    public function store(LoginRequest $request){

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return to_route('home.index');
        }
    }
}

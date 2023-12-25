<?php

namespace modules\Rayium\Auth\Http\Controllers;

use App\Http\Controllers\Controller;
use Auth;

class LogoutController extends Controller
{
    public function logout()
    {
        Auth::logout();
        return to_route('login');
    }


}

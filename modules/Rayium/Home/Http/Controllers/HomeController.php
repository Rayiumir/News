<?php

namespace modules\Rayium\Home\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        return view('Home::index');
    }
}

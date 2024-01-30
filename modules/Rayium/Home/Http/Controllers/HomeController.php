<?php

namespace modules\Rayium\Home\Http\Controllers;

use App\Http\Controllers\Controller;
use modules\Rayium\Home\Repositories\HomeRepo;

class HomeController extends Controller
{
    public function index(HomeRepo $homeRepo){
        return view('Home::index', compact('homeRepo'));
    }
}

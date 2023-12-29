<?php

namespace modules\Rayium\Category\Http\Controllers;

use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        return view('Category::index');
    }
}

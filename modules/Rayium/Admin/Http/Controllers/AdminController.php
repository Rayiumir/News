<?php

namespace modules\Rayium\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use modules\Rayium\Admin\Models\Admin;

class AdminController extends Controller
{
    public function index()
    {
        $this->authorize('index', Admin::class);
        return view('Admin::index');
    }

}

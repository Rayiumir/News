<?php

namespace modules\Rayium\Auth\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use JetBrains\PhpStorm\NoReturn;
use modules\Rayium\Auth\Http\Requests\RegisterRequest;
use modules\Rayium\Auth\Services\RegisterService;

class RegisterController extends Controller
{
    public function index(){
        return view('Auth::register');
    }

    public function store(RegisterRequest $request, RegisterService $registerService){
        $user = $registerService->generateUser($request);

        auth()->loginUsingId($user->id);
        event(new Registered($user));
        return to_route('home.index');
    }
}

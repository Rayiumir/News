<?php

namespace modules\Rayium\User\Http\Controllers;

use App\Http\Controllers\Controller;
use modules\Rayium\User\Http\Requests\UpdateProfileRequest;
use modules\Rayium\User\Models\User;
use modules\Rayium\User\Services\UserService;

class ProfileController extends Controller
{
    public function index() {
        $users = User::all();
		return view( 'User::profile', compact('users'));
	}

    public function store(UpdateProfileRequest $request, UserService $userService)
    {
        [$imageName, $imagePath] = $this->service->uploadImage($request->file('image'), 'users');

        $userService->updateProfile($request, auth()->id(), $imageName, $imagePath);

        $notification = array(
            'message' => 'نمایه با موفقیت به روز شد',
            'alert-type' => 'success'
        );

        return back()->with($notification);
    }
}

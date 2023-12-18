<?php

namespace modules\Rayium\Auth\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Password;
use modules\Rayium\Auth\Http\Requests\SendEmailPasswordRecoveryRequest;

class ResetController extends Controller
{
    public function view()
    {
        return view('Auth::password.send-email');
    }

    public function SendEmail(SendEmailPasswordRecoveryRequest $request)
    {
        $reset = Password::sendResetLink($request->only('email'));

        return $reset == Password::RESET_LINK_SENT ?
            back()->with(['message' => 'پیوند بازیابی رمز عبور با موفقیت به ایمیل شما ارسال شد.'])
            :
            back()->withErrors(['error' => 'یک مشکلی در سیستم به وجود آمده است, لطفا دوباره تلاش کنید.']);
    }

    public function reset($token)
    {
        return view('Auth::password.reset', ['token' => $token]);
    }
}

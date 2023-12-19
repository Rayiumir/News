<?php

namespace modules\Rayium\Auth\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use modules\Rayium\Auth\Http\Requests\PasswordUpdateRequest;
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
        //dd($reset);
        return $reset === Password::RESET_LINK_SENT ?
            back()->with(['message' => 'پیوند بازیابی رمز عبور با موفقیت به ایمیل شما ارسال شد.'])
            :
            back()->withErrors(['error' => 'یک مشکلی در سیستم به وجود آمده است, لطفا دوباره تلاش کنید.']);
    }

    public function reset(Request $request)
    {
        $token = $request->token;
        $email = $request->email;

        return view('Auth::password.reset', compact(['token', 'email']));
    }

    public function update(PasswordUpdateRequest $request)
    {
        $reset = Password::reset(
            $request->only('token', 'email', 'password', 'password_confirmation'),
            static function ($user, $password)
            {
                $user->forceFill(['password' => bcrypt($password)])->setRememberToken(Str::random(60));

                event(new ResetPassword($user));

                $user->save();
            }
        );

        return $reset === Password::PASSWORD_RESET ? to_route('auth.login')
            ->with(['success_reset_password' => 'رمز عبور شما با موفقیت تغییر کرد.'])
            : back()->withErrors(['error_reset_password' => 'شکلی در سیستم به وجود آمد است, لطفا دوباره تلاش کنید.']);
    }
}

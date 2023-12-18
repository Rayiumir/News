<?php

namespace modules\Rayium\Auth\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

class VerifyController extends Controller
{
    public function view()
    {
        return view('Auth::verify.email');
    }

    public function verify(EmailVerificationRequest $request)
    {
        $request->fulfill();
        return to_route('home.index');
    }

    public function resend(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();

//        $notification = array(
//            'message' => 'پیوند تایید به ایمیل شما ارسال شد.',
//            'alert-type' => 'success'
//        );

        return redirect()->back()->with(['message' => 'پیوند تایید به ایمیل شما ارسال شد.']);
    }
}

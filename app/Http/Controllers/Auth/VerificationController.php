<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Support\Facades\Auth;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    use VerifiesEmails;

    /**
     * Where to redirect users after verification.
     *
     * @var string
     */
    //protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        if (Auth::check() && Auth::user()->role->id ==2){
            $this->redirectTo = route('author/home');
        }elseif (Auth::check() && Auth::user()->role->id ==3){
            $this->redirectTo = route('editor/home');
        }elseif (Auth::check() && Auth::user()->role->id ==4){
            $this->redirectTo = route('moderator/home');
        }elseif (Auth::check() && Auth::user()->role->id ==5){
            $this->redirectTo = route('advertiser/home');
        }else{
            $this->redirectTo = route('admin/home');
        }


        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }
}

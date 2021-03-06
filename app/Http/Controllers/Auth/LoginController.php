<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    public function redirectTo()
    {
        $user = Auth::user();
        if($user->role == 4){
            if(\Auth::guard()->check()){
                $this->redirectTo = '/pos';
                //        return $this->redirectTo;
            }
        }elseif ($user->role == 5){
            if(\Auth::guard()->check()){
                $this->redirectTo = '/kitchen';
                //        return $this->redirectTo;
            }
        }
        else {
            if(\Auth::guard()->check()){
                $this->redirectTo = '/';
                //        return $this->redirectTo;
            }
        }
        return $this->redirectTo;
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $this->validateLogin($request);

        $username = User::where('email', '=', $request->email)->first();

        if(is_null($username)){
            return redirect()->back()->with('error1', ' '.$request->email.' does not exist!');
        }

        if($username->status == 1){
            return redirect()->back()->with('error1', ' '.$request->email.' has been suspended!Please contact admin');
        }
        User::find($username->id)->update(['last_login' => Carbon::now(),]);
        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }
}

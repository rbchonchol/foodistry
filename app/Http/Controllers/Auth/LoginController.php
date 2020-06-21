<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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

    protected function redirectTo(){
         if (Auth::user()->role->id == 1  ) {
            return route('admin.Dashboard');
        }
        elseif(Auth::user()->role->id == 2){
            return route('author.Dashboard');
        }
    }

    /**
     * Create a new controller instance.
     *
     *
     *
     *
     * @return void
     */
    public function __construct()
    {

         $this->middleware('guest')->except('logout');
    }
}

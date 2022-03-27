<?php

namespace App\Http\Controllers\Dealer\Auth;

use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    
    protected $redirectTo = RouteServiceProvider::HOMECP;
    public function __construct()
    {        
        $this->middleware('guest:dealer')->except('logout');
    }
    public function showLoginForm()
    {    
            return view('auth.dealer.login');
    }
    
    protected function guard()
    {
        return Auth::guard('dealer');
    }
    
    
    /**
     * The user has logged out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    protected function loggedOut(Request $request)
    {
        //
        return redirect()->route('dealer.login');
    }
}


<?php

namespace App\Http\Controllers\Admin\Auth;

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
        $this->middleware('guest:admin')->except('logout');
    }
    public function showLoginForm()
    {    
            return view('auth.admin.login');
    }
    
    protected function guard()
    {
        return Auth::guard('admin');
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
        return redirect()->route('admin.login');
    }
}


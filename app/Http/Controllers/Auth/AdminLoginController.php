<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminLoginController extends Controller
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

    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }


    public function showLoginForm()
    {
        return view('admin.login');

    }

    public function login(Request $request){

        $credentials = ['email'=>$request->email, 'password'=>$request->password];
        $remember = $request->remember ;

        //1.0 validate the form data
        $this->validate( $request, [
            'email' => 'required|email' , 'password' => 'required|min:6'
        ]);

        //2.0 Attempt to login
        if(Auth::guard('admin')->attempt($credentials ,$remember)) {
            return redirect()->intended(route('admin'));
        }

        return redirect()->back()->withInput($request->only('email','remember'));
    }


}

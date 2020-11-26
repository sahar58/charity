<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Auth;

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
    protected $redirectTo = RouteServiceProvider::ADMIN;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
        $this->middleware('guest:charity')->except('logout');
        $this->middleware('guest:pCase')->except('logout');
    }
    //Admin Login
    public function showAdminLogin()
    {
        return view('admin.login');
    }
    public function checkAdminLogin(Request $request)
    {
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|min:6'
        ]);
        if(Auth::guard('admin')->attempt(['email'=>$request->email , 'password'=> $request->password]))
        {
            return redirect()->intended('admin/home');
        }
        return back()->withInput($request->only('email'));
    }
    //Charity Login
    public function showcharityLogin()
    {
        return view('charity.login');
    }
    public function checkCharityLogin(Request $request)
    {
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|min:6'
        ]);
        if(Auth::guard('charity')->attempt(['email'=>$request->email , 'password'=> $request->password]))
        {
            return redirect()->intended(' charity/home');
        }
        return back()->withInput($request->only('email'));
    }
    //pCase Login
    public function showpCaseLogin()
    {
        return view('pCase.login');
    }
    public function checkpCaseLogin(Request $request)
    {
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|min:6'
        ]);
        if(Auth::guard('pCase')->attempt(['email'=>$request->email , 'password'=> $request->password]))
        {
            return redirect()->intended(' pCase/home');
        }
        return back()->withInput($request->only('email'));
    }
}

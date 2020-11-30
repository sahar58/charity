<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\pCase;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:pCase');

    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'Nid' => ['required'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
    /**
     * Create a new pCase instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\pCase
     */
    protected function createCase(Request $request)
    {
        $request->validate(['name'=>'required','Nid'=>'required',
        'email'=>'required','password'=>'required']);
        $data  =$request->all();
        $data['private_account']='0';
        $data['support_status']='0';
        $data['password']=Hash::make($request->password);
        if($request->marital_status=='on')
        {
            $data['marital_status']='1';
        }
        else{
            $data['marital_status']='0';
        }
        if($request->monthly_treatment=='on'){
            $data['monthly_treatment']='1';
        }
        else{
            $data['monthly_treatment']='0';
        }
        if($request->rent=='on'){
            $data['rent']='1';
        }
        else{
            $data['rent']='0';
        }
        pCase::create($data);
        return redirect()->intended('home');
    }
}

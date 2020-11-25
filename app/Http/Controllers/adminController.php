<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth; 
class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
       // $this->middleware('auth:adminCK');
       $this->middleware('auth:admin')->except(['adminLogin','checkAdminLogin']);//
    }
    public function index()
    {
        //
    }
    public function dashboard()
    {
        return view('adminpage');
    }
    public function site()
    {
        return view('welcome');
    }
    public function adminLogin()
    {
        return view('admin.adminLogin');
    }
    public function checkAdminLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {


            return redirect()->intended('/adminDash');
             }
            else{
                   return back()->withInput($request->only('email'));
                 // return view('welcome');
             }
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(admin $admin)
    {
        return view ('admin.edit',compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, admin $admin)
    {
        $request->validate(['name'=>'required','email'=>'required','password'=>'required']);
        $admin->update($request->all());
        return redirect()->route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

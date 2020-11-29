<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\admin;
use App\charity;
use App\pCase;
//use Carbon\Carbon;


class adminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function adminHome()
    {
        $data['person'] = pCase::orderby('name','asc')->get(); // to paginate data to pages 
        $data['charity'] =charity::orderby('id','asc')->get();
       // $data['person']['age']=Carbon::parse($data['person']->birth_date)->age;
       // $charityData = charity::orderby('id','asc')->get();
        return view('admin.homex',compact('data'));
    }
    public function createCharity()
    {
        return view('admin.createCharity');
    }
    public function storeCharity(Request $request)
    {
        $admin= Auth::guard('admin')->user();
        $request->validate(['name'=>'required',
        'charity_number'=>'required','email'=>'required','password'=>'required']); 
        $data =$request->all();
        $data['admin_id']=$admin->id;
        $admin->charities()->create($data);
        return redirect()->intended('/admin/home');

    }
    public function getAllCharities(){
        $admin= auth()->admin();
        $charity = $admin->charity;
        return view('admin.charities',compact('charity'));
    }

}

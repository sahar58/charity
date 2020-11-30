<?php

namespace App\Http\Controllers;
use App\charity;
use App\charity_support_pCase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class charityController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:charity');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $charity = charity::orderby('id','asc')->paginate(5); // to paginate data to pages 
       
        return view ('charity.index',compact('charity'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('charity.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['name'=>'required','email'=>'required','password'=>'required','address'=>'required','phone'=>'required','charity_number'=>'required']);
        charity::create($request->all());
        return redirect()->route('charity.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(charity $charity )
    {
        return view ('charity.show',compact('charity'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(charity $charity)
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
    public function update(Request $request,charity $charity)
    {
        $request->validate(['name'=>'required','email'=>'required','password'=>'required','address'=>'required','phone'=>'required','charity_number'=>'required']);     
        $charity->update($request->all());
        return redirect()->route('charity.index');
    }

    public function updateCaseSupport($supportId, $userid)
    {
        $char= Auth::guard('charity')->user();
        $id = $char->id; 
       // $request->validate(['name'=>'required','email'=>'required','password'=>'required','address'=>'required','phone'=>'required','charity_number'=>'required']);     
       charity_support_pCase::where([
        ['support_id', '=', $supportId],
        ['case_id', '=', $userid]] )->update(['charity_id' => $id ]);
        //$charity->update($request->all());
        
       // return redirect()->route('charity.pubSearchPro',$id=$userid);
    }
    public function charityHome()
    {
        return view('homex');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(charity $charity)
    {
        $charity->delete();
        return redirect()->intended('admin/home');
    }
}
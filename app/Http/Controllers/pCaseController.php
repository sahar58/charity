<?php

namespace App\Http\Controllers;
use App\pCase;
use Illuminate\Http\Request;

class pCaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pCase = pCase::orderby('Nid','asc')->paginate(5); // to paginate data to pages 
       
        return view ('pCase.index',compact('pCase'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pCase.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['Nid'=>'required','name'=>'required','email'=>'required','password'=>'required','phone'=>'required','address'=>'required','salary'=>'required','birth_Date'=>'required','marital_status'=>'required','rent'=>'required','private_account'=>'required']);
        charity::create($request->all());
        return redirect()->route('charity.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(pCase $pCase)
    {
        return view ('pCase.show',compact('pCase'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(pCase $pCase)
    {
        return view ('pCase.edit',compact('pCase'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pCase $pCase)
    {
        $request->validate(['Nid'=>'required','name'=>'required','email'=>'required','password'=>'required','phone'=>'required','address'=>'required','salary'=>'required','birth_Date'=>'required','marital_status'=>'required','rent'=>'required','private_account'=>'required']);
        $pCase->update($request->all());
        return redirect()->route('pCase.index');
    }

    public function caseHome()
    {
        return view('homex');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Nid)
    {
        pCase::where('Nid',$Nid)->delete();
        return redirect()->intended('admin/home');
    }
}
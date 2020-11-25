<?php

namespace App\Http\Controllers;
use App\pcase;
use Illuminate\Http\Request;

class pcaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pcase = pcase::orderby('Nid','asc')->paginate(5); // to paginate data to pages 
       
        return view ('pcase.index',compact('pcase'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pcase.create');
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
    public function show(pcase $pcase)
    {
        return view ('pcase.show',compact('pcase'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(pcase $pcase)
    {
        return view ('pcase.edit',compact('pcase'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pcase $pcase)
    {
        $request->validate(['Nid'=>'required','name'=>'required','email'=>'required','password'=>'required','phone'=>'required','address'=>'required','salary'=>'required','birth_Date'=>'required','marital_status'=>'required','rent'=>'required','private_account'=>'required']);
        $pcase->update($request->all());
        return redirect()->route('pcase.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(pcase $pcase)
    {
        $pcase->delete();
        return redirect()->route('pcase.index');
    }
}

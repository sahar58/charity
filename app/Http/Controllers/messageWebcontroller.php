<?php

namespace App\Http\Controllers;
use App\messageWeb;
use Illuminate\Http\Request;

class messageWebcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messageWeb = messageWeb::orderby('id','asc')->paginate(5); // to paginate data to pages 
       
        return view ('messageWeb.index',compact('messageWeb'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('messageWeb.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['id'=>'required','name'=>'required','email'=>'required','message'=>'required']);
        messageWeb::create($request->all());
        return redirect()->route('messageWeb.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(messageWeb $messageWeb)
    {
        return view ('messageWeb.show',compact('messageWeb'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(messageWeb $messageWeb)
    {
        return view ('messageWeb.edit',compact('messageWeb'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, messageWeb $messageWeb)
    {
        $request->validate(['id'=>'required','name'=>'required','email'=>'required','message'=>'required']);
        $messageWeb->update($request->all());
        return redirect()->route('messageWeb.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(messageWeb $messageWeb)
    {
        $messageWeb->delete();
        return redirect()->route('messageWeb.index');
    }
}

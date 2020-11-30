<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin;
use App\charity;
use App\pCase;
use App\charity_support_pCase;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['pubSearch','pubSearchPro']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function pubSearchPro(pCase $casez)
    {
       // $casez['case'] =pCase::where('Nid','=',$pCase->Nid)->get();
       // $casez['support'] =charity_support_pCase::where('case_id','=',$pCase->Nid)->select('support_id')->orderby('case_id','asc')->get();
        return view('case.caseReport',compact('casez'));
    }
    public function pubSearch()
    {
        $data['case'] = pCase::where('private_account','=',0)->orderby('Nid','asc')->get(); // to paginate data to pages 
        $data['support'] =charity_support_pCase::orderby('case_id','asc')->get();
      
        return view('publicSearch',compact('data'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin;
use App\charity;
use App\pCase;
use App\support;
use App\charity_support_pCase;
use Illuminate\Support\Collection;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth')->except(['pubSearch','pubSearchPro']);
       $this->middleware('auth:charity');
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
    public function pubSearchPro($id)
    {
        $case =pCase::find($id);
        //dd($casez);
       $supportIds =charity_support_pCase::where('case_id','=',$case->Nid)->select('support_id')->get();
       $charityIds =charity_support_pCase::where('case_id','=',$case->Nid)->select('charity_id')->get();
       $supports = support::whereIn('id', $supportIds)->get();
      // $charities = charity::whereIn('id', $charityIds )->get();
    //  $charities[]= array();
        $charities=new collection();
      foreach ($charityIds as  $value) {
        $charities->push( charity::where('id','=',$value->charity_id)->select('name')->get());
      }
     //  dd($charities);
       return view('case.caseReport')->with('casez',$case)->with('supports',$supports)->with('charities',$charities);
    }
    public function pubSearch()
    {
        $data['case'] = pCase::where('private_account','=',0)->orderby('Nid','asc')->get(); // to paginate data to pages 
        foreach ($data['case'] as $value) {
            $supportIds =charity_support_pCase::where('case_id','=',$value->Nid)->select('support_id')->get();
        // $support[$value->name] =charity_support_pCase::orderby('case_id','asc')->get();
            $support[$value->name] =support::whereIn('id', $supportIds)->get();
          
        } 
       
      //  return view('publicSearch',compact('data'));
      return view('publicSearch',compact('data','support'));
    }
}

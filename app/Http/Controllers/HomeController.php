<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request){
      // dd($request->session());
        
        
        if($request->session()->has('name')){
            
        }else{
           return redirect()->route('login');
        }

        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function checkUser(Request $request){

        dd($request->session());
        //if($request->session())


    }
    
    
     public function index()
    {
        return view('home');
    }
}

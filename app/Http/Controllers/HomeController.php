<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
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
        if(Auth::check()){
            
         return   view('home');
        }else{
           return redirect()->route('login');
        }
       
    }
}

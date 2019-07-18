<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\systems;
use Illuminate\Support\Facades\View;
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
            $user=Auth::user()->toarray();
            $data = new systems;
            $matchThese = ['userId' => $user['id'] ];  
        $selected= $data->where($matchThese)->count();
        
        if($selected>0){
        $selected= $data->where($matchThese)->get()->toarray()[0];
        $mbtiScore=explode('~',$selected['mbtiScore']);
        
        //E~I~N~S~T~P~F~J   
        
        $info=[
            'E'     =>$mbtiScore[0],
            'I'     =>$mbtiScore[1],
            'N'     =>$mbtiScore[2],
            'S'     =>$mbtiScore[3],
            'T'     =>$mbtiScore[4],
            'P'     =>$mbtiScore[5],
            'F'     =>$mbtiScore[6],
            'J'     =>$mbtiScore[7],
            'result'=>$selected['mbtiResult']
        ];
        return View::make('home')->with('info',$info);
    }
        
         return view('home');
        }else{
           return redirect()->route('login');
        }
       
    }
}

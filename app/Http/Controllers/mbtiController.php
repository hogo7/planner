<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\systems;
class mbtiController extends Controller{


    public function index(){
        
        return view('layouts.mbti');
        
    }

    public function pages($page){

        return view('pages.mbti.'.$page);
    }

    public function create(Request $request){
        
        
        if(Auth::check()){
            $user=Auth::user()->toarray();
         $system=new systems;
         $data=$request->toArray();
         //E~I~N~S~T~P~F~J
         $mbtiScore=$data['Eres'].'~'.$data['Ires'].'~'.$data['Nres'].'~'.$data['Sres'].'~'.$data['Tres'].'~'.$data['Pres'].'~'.$data['Fres'].'~'.$data['Jres'];
      //  $mbtiScore=explode('~',$mbtiScore);
         $system->mbtiScore  =  $mbtiScore;
         $system->mbtiResult =  $data['result'];
         $system->mbtiStatus =  '1';
         $system->userId = $user['id'];
         $system->save();
        return view('home');
        }else{
            redirect()->login();
        }
    }
    public function show(){
        
    }

}

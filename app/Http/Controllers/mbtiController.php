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
        
        $user=Auth::user()->toarray();
        $system=new systems;
        $data=$request->toArray();
        $matchThese = ['userId' => $user['id'] ];  
        $selected= $system->where($matchThese)->count();
        if($selected>0)
        $selected= $system->where($matchThese)->get()->toarray()[0];
        
       // dd($selected);
        if(Auth::check()&& ($selected['mbtiStatus']!=1 || !isset($selected['mbtiStatus']))){
           // if()
        //E~I~N~S~T~P~F~J
        $mbtiScore=$data['Eres'].'~'.$data['Ires'].'~'.$data['Nres'].'~'.$data['Sres'].'~'.$data['Tres'].'~'.$data['Pres'].'~'.$data['Fres'].'~'.$data['Jres'];
      //  $mbtiScore=explode('~',$mbtiScore);
         $system->mbtiScore  =  $mbtiScore;
         $system->mbtiResult =  $data['result'];
         $system->mbtiStatus =  '1';
         $system->userId = $user['id'];
         $system->save();
        return view('home');
        }else if($selected['mbtiStatus']){
dd('in costruction 405');
        } 
        else{
            redirect()->login();
        }
    }
    public function show(){
        
    }

}

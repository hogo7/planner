<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mbtiController extends Controller
{


    public function index(){
        
        return view('layouts.mbti');
        
    }
    public function pages($page){

        return view('pages.mbti.'.$page);
    }
    public function create(){
        
    }
    public function show(){
        
    }

}

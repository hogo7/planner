<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tasksController extends Controller
{
    //for tasks list

    public function index(){
        
        return view('layouts.tasks');
        
    }
    public function pages($page){

        return view('pages.tasks.'.$page);
    }
    public function create(){
        
    }
    public function show(){
        
    }

}

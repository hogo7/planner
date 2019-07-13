<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use App\Http\Requests\createUser;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class registerController extends Controller {
    
    public function index(){        
       
        return view('auth.register');
    
    }

    public function create(createUser $request){
    
        //validation
        //dd($request<->all('name'));
    
        $validated = $request->validated();
        

        $user= new User;

        $user->name       =$validated['name'];
        $user->email      =$validated['email'];
        $user->password   =Hash::make($validated['password']);
        $user->gender     =$validated['gender'];
        $user->birthDate  =$validated['birth'];
        $user->PhoneNumber=$validated['Phone'];



        //store 
        $user->save();
        dd('test');
        auth()->login($user);
        //redirect

        return redirect()->home();
    }
}

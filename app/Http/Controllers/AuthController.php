<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function login(){
        
        return view('login.index');
    }
    public function postlogin(Request $request){
        $user = Auth::user();
        
        if(Auth::attempt($request->only("name","password"))){
            return redirect('/home');
        }else{
            
        
            return redirect('/')->with('status' ,'User not found ');
        }
       
        
    }
    public function logout(){
        
        Auth::logout();
        return redirect('/');
    
    }
}

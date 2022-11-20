<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class Controller_login extends Controller
{
    public function login(){
        return view('auth/login',["title" => "Login"]);
    }
    public function proses_login(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect(('/dashboard'));
        }
        return redirect('login');
    }

    public function register(){
        return view('auth/register',["title" => "Register"]);
    }

    public function proses_register(Request $request){
        User::create([
            'name' =>$request->name,
            'email' =>$request->email,
            'password' => bcrypt($request->password) ,
            'remember_token' => Str::random(60),
        ]);
        return redirect('/login');
    }

    public function logout(){
        Auth::logout();
        return redirect('login');
    }

}

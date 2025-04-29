<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ControllerAuthentification extends Controller
{
    //
    public function index(){
return view('authentification.signin');
    }
    public function index2(){
return view('authentification.signup');
    }
    public function Signup(Request $request){
        $data=$request->validate([
            'name'=>'required|string|max:10',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|string|max:10',
        ]);
        $data['password']=Hash::make($data['password']);
        User::create($data);
        return redirect()->route('Signin')->with('success');
    }
    public function Signin(Request $request){
        $data=$request->validate([
            'email'=>'required|email',
            'password'=>'required|string|max:10',
        ]);
        if(Auth::attempt($data)){
            return redirect()->route('home');
        }
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        return redirect()->route('login');
        
    }
}

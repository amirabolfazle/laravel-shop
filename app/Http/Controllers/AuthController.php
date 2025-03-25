<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Hash;

class AuthController extends Controller
{
    //
    public function register(){
        if (Auth::user()){
            return redirect('/');
        }
        return view('auth.register');
    }
    public function registerpost(Request $req){
        $user=User::where('mobile','=',$req->mobile)->first();
        if (! $user){
            $newuser=new User;
            $newuser->name=$req->name;
            $newuser->mobile=$req->mobile;
            $newuser->password=bcrypt($req->password);
            $newuser->save();
            return redirect('/login');
        }else{
            return redirect()->back();
        }
    }
    public function login(){
        if (Auth::user()){
            return redirect('/');
        }
        return view('auth.login');
    }
    public function loginpost(Request $req){
        $user=User::where('mobile','=',$req->mobile)->first();
        if ($user && Hash::check($req->password,$user->password)){
            Auth::login($user);
            return redirect('/');
        }else{
            return redirect()->back();
        }
    }
    public function logout(){
        if (Auth::user()){
            Auth::logout();
            return redirect('/login');
        }else{
            return redirect('/login');
        }
    }
}

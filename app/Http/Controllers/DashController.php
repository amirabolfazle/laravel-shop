<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Auth;
class DashController extends Controller
{
    //
    public function edit(){
        $user=Auth::user();
        $name=$user->name;
        $mobile=$user->mobile;
        $password=$user->password;
        return view('dash',compact('name','mobile','password'));
    }

    public function editpost(Request $req){
        if (! Auth::user()){
            return redirect('/login');
        }
        $user=Auth::user();
        if (isset($req->name) && $req->name){
            $user->name=$req->name;
        }
        if (isset($req->mobile) && $req->mobile){
            $user->mobile=$req->mobile;
        }
        if (isset($req->password) && $req->password){
            $user->password=bcrypt($req->password);
        }
        $user->save();
        return redirect('/dashboard');
    }
}

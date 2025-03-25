<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function home(){
        if (! Auth::user()){
            return redirect('/login');
        }
        return view('admin');
    }
}

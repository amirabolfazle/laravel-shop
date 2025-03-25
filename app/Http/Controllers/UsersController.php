<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Auth;
class UsersController extends Controller
{
    public function home(){
        if (! Auth::user()){
            return redirect('/login');
        }
        $users=User::get();
        return view('users',compact('users'));
    }
    public function user($id){
        if (! Auth::user()){
            return redirect('/login');
        }
        $user=User::where('id',$id)->first();
        return view('edituser',compact('id','user'));
    }
    public function user_task($id){
        $user=User::find($id);
        $user->name=$req->name;
        $user->password=$req->password;
        if ($req->hasFile('file')) {
            $file = $req->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $path = 'uploads/users/';
            $user->img=$path.$filename;
            $file->move($path, $filename);
        }else{
            $user->img=$user->img;
        }
        $user->save();
        return redirect('/admin/users');
    }
    public function delete($id){
        $user=User::find($id);
        $user->delete();
        return redirect()->back();
    }
    public function insert(){
        if (! Auth::user()){
            return redirect('/login');
        }
        return view('insertuser');
    }
    public function insert_task(Request $req){
        $cat=new User;
        $cat->name=$req->name;
        $cat->password=$req->password;
        if ($req->hasFile('file')) {
            $file = $req->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $path = 'uploads/users/';
            $cat->img=$path.$filename;
            $file->move($path, $filename);
        }
        $cat->save();
        return redirect('/admin/users');
    }
}

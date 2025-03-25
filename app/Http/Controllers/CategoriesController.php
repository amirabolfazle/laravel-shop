<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Auth;
class CategoriesController extends Controller
{
    public function home(){
        if (! Auth::user()){
            return redirect('/login');
        }
        $categories=Category::get();
        return view('categorieslist',compact('categories'));
    }
    public function category($id){
        if (! Auth::user()){
            return redirect('/login');
        }
        $category=Category::where('id',$id)->first();
        return view('editcategory',compact('id','category'));
    }
    public function category_task(Request $req,$id){
        if (! Auth::user()){
            return redirect('/login');
        }
        $cat=Category::find($id);
        $cat->name=$req->name;
        if ($req->hasFile('file')) {
            $file = $req->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $path = 'uploads/categories/';
            $cat->img=$path.$filename;
            $file->move($path, $filename);
        }else{
            $cat->img=$cat->img;
        }
        $cat->save();
        return redirect('/admin/categories');
    }
    public function delete($id){
        $cat=Category::find($id);
        $cat->delete();
        return redirect()->back();
    }
    public function insert(){
        if (! Auth::user()){
            return redirect('/login');
        }
        return view('insertcategory');
    }
    public function insert_task(Request $req){
        $cat=new Category;
        $cat->name=$req->name;
        if ($req->hasFile('file')) {
            $file = $req->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $path = 'uploads/categories/';
            $cat->img=$path.$filename;
            $file->move($path, $filename);
        }
        $cat->save();
        return redirect('/admin/categories');
    }
}

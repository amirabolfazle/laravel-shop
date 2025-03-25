<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Validator;
use Auth;
class ProductsController extends Controller
{
    public function home(){
        if (! Auth::user()){
            return redirect('/login');
        }
        $products=Product::get();
        foreach ($products as $prod) {
            $cat=Category::find($prod->category_id);
            if ($cat){
                $cat_name=$cat->name;
                $prod['cat_name']=$cat_name;
            }else{
                $prod['cat_name']='بدون دسته بندی';
            }
        }
        return view('productslist',compact('products'));
    }
    public function product($id){
        if (! Auth::user()){
            return redirect('/login');
        }
        $idfilter=Product::find($id);
        $cats=Category::all();
        return view('editproduct',compact('id','idfilter','cats'));
    }
    public function product_task(Request $req, $id){
        $prod=Product::find($id);
        $prod->name=$req->name;
        $prod->price=$req->price;
        $prod->description=$req->description;
        $prod->category_id=$req->cat;
        if ($req->hasFile('file')) {
            $file = $req->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $path = 'uploads/users/';
            $prod->img=$path.$filename;
            $file->move($path, $filename);
        }else{
            $prod->img=$prod->img;
        }
        $prod->save();
        return redirect('/admin/products');
    }
    public function delete($id){
        $prod=Product::find($id);
        $prod->delete();
        return redirect()->back();
    }
    public function insert(){
        if (! Auth::user()){
            return redirect('/login');
        }
        return view('insertproduct');
    }
    public function insert_task(Request $req){
        // $data = $req->all();
        // $rule = [
        //     'name' -> 'required',
        // ];
        // $message = [
        //     'name.required' -> 'نوشتن نام محصول الزامی میباشد',
        // ];
        // $validator = validator::make($data, $rule, $message);
        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }
        $cat=new Product;
        $cat->name=$req->name;
        $cat->price=$req->price;
        $cat->description=$req->description;
        if ($req->hasFile('file')) {
            $file = $req->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $path = 'uploads/products/';
            $cat->img=$path.$filename;
            $file->move($path, $filename);
        }
        $cat->save();
        return redirect('/admin/products');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home(){
        $cats=Category::get();
        return view('main',compact('cats'));
    }
    public function products($cat_id){
        $catfilter=Product::where('category_id','=',$cat_id)->get();
        return view('products',compact('catfilter','cat_id'));
    }
    public function product($id){
        $idfilter=Product::where('id','=',$id)->first();
        return view('product',compact('id','idfilter'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
   public function index(){

       $data['categories'] = Category::withoutTrashed()->get();
       $data['products'] = Product::withoutTrashed()->with(['category','product_image']);
       $data['latest_products'] = Product::with(['category','product_image'])->where('status','active')->where('is_new','1')->orderBy('id','DESC')->limit(4)->get();
       $data['featured_products'] = Product::with(['category'])->where('status','active')->where('is_featured','1')->orderBy('id','DESC')->limit(4)->get();
       //dd($data);
       return view('frontend.home',$data);
   }
}

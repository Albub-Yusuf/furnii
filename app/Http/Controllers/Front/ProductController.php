<?php

namespace App\Http\Controllers\Front;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function details($id){
        //dd($id);
        $data['product'] = Product::with('category','product_image')->findOrFail($id);
        $data['categories'] = Category::withoutTrashed()->get();
        return view('frontend.product.details',$data);
    }
    public function productDetails($id){
        dd($id);
    }
}

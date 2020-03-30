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
    public function sresults(Request $request){
        $product = new Product();
        $product = $product->withoutTrashed();
        $data['categories'] = Category::withoutTrashed()->get();

        if($request->has('search') && ($request->search !=null)){
            $product = $product->where('name','like','%'.$request->search.'%');
        }

        $product = $product->orderBy('id','DESC')->paginate(6);
        $data['products'] = $product;

        if(isset($request->search)){
            $render['search'] = $request->search;
            $product = $product->appends($render);
        }
        return view('frontend.product.search',$data);
    }

    public function productDetails($id){
        $data['categories'] = Category::withoutTrashed()->get();
        $data['product'] = Product::with('category','product_image')->findOrFail($id);
        return view('frontend.product.productDetails',$data);
;
    }
}

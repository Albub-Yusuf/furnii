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

        $product = $product->orderBy('id','DESC')->paginate(3);
        $data['products'] = $product;

        if(isset($request->search)){
            $render['search'] = $request->search;
            $product = $product->appends($render);
        }
        $data['serial'] = managePagination($product);
        return view('frontend.product.search',$data);
    }
}

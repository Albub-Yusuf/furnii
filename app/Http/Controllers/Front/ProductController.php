<?php

namespace App\Http\Controllers\Front;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use App\Productimage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        $product = $product->orderBy('id','DESC')->paginate(4);
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
        $cid = DB::table('products')->where('id', $id)->pluck('category_id');
        $category_id = 0;
        foreach ($cid as $c){
            $category_id = $c;
        }
        $data['relatedProducts'] =  Product::where('status','active')->where('category_id',$category_id)->orderBy('id','DESC')->limit(4)->get();
        $data['flag'] = $id;
        return view('frontend.product.productDetails',$data);
    }
}

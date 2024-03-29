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
        $data['product'] = Product::with('category','product_image')->findOrFail($id);
        $data['categories'] = Category::withoutTrashed()->get();
        return view('frontend.product.details',$data);
    }
    public function sresults(Request $request){

       $query = $request->search;

        $category_name = DB::table('categories')->where('name', $query)->pluck('id');
        $category_id= 0;
        foreach ($category_name as $cid){
            $category_id = $cid;
        }
        $product = new Product();
        $product = $product->withoutTrashed();
        $data['categories'] = Category::withoutTrashed()->get();

        if($category_id == 0){

            if($request->has('search') && ($request->search !=null)){
                $product = $product->where('name','like','%'.$request->search.'%');
            }

            $product = $product->orderBy('id','DESC')->paginate(12);
            $data['products'] = $product;

            if(isset($request->search)){
                $render['search'] = $request->search;
                $product = $product->appends($render);
            }
            return view('frontend.product.search',$data);
        }
        if($category_id !=0){
           return $this->categoryProducts($category_id);
        }

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
    public function featuredProducts($status){

        $data['categories'] = Category::withoutTrashed()->get();
        $data['featured_products'] = Product::where('status','active')->where('is_featured',$status)->orderBy('id','DESC')->paginate(12);
        return view('frontend.product.featuredProducts',$data);
    }

    public function latestProducts($status){

        $data['categories'] = Category::withoutTrashed()->get();
        $data['latest_products'] = Product::where('status','active')->where('is_new',$status)->orderBy('id','DESC')->paginate(12);
        return view('frontend.product.latestProducts',$data);

    }

    public function categoryProducts($cat_id){
        $cid = DB::table('categories')->where('id', $cat_id)->pluck('name');
        $category= "";
        foreach ($cid as $c){
            $category = $c;
        }
        $data['category'] = $category;
        $data['categories'] = Category::withoutTrashed()->get();
        $data['products'] = Product::with('category')->where('status','active')->where('category_id',$cat_id)->orderBy('id','DESC')->paginate(12);
        return view('frontend.product.categoryProducts',$data);

    }
}

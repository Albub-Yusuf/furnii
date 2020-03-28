<?php

namespace App\Http\Controllers;

//use App\Brand;
use App\Category;
use App\Product;
use App\Productimage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title'] = 'Product List';
        $product = new Product();
        $product = $product->withTrashed();
       /**
        if($request->has('search') && ($request->search !=null)){
            $product = $product->where('name','like','%'.$request->search.'%');
        }
        if($request->has('status') && ($request->status !=null)){
            $product = $product->where('status',$request->status);
        }
         **/

        $product = $product->orderBy('id','DESC')->paginate(10);
        $data['products'] = $product;

        if(isset($request->status) || ($request->search)){

            $render['status'] = $request->status;
            $render['search'] = $request->search;
            $product = $product->appends($render);
        }


        $data['serial'] = managePagination($product);
        return view('admin.product.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = "Create Product";
        $data['categories'] = Category::orderBy('name')->pluck('name','id');
        return view('admin.product.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'name' => 'required',
            'description' => 'required',
            'status' => 'required',
            'images.*' => 'image'
        ]);
        //dd($request->all());
        $user = auth()->user();
        $product_image = $request->images;
        //File Upload


        $product_data = $request->except('_token','images');

        if($request->hasFile('featured_image')){
            $file = $request->file('featured_image');
            $file->move('Backend/assets/img/products/',time().$file->getClientOriginalName());
            $product_data['featured_image'] = 'Backend/assets/img/products/'.time().$file->getClientOriginalName();
        }
        $product_data['created_by'] = $user->id;
        $product_data['updated_by'] = 0;
        $product = Product::create($product_data);

        //image upload
        if($product_image!=NULL)
        {
            foreach($request->images as $image){
                //dd($product_data);
                $product_image['product_id'] = $product->id;
                $image->move('Backend/assets/img/products/',time().$image->getClientOriginalName());
                $product_image['file_path'] = 'Backend/assets/img/products/'.time().$image->getClientOriginalName();
                Session::flash('success','Product Created Successfully!!');
                Productimage::create($product_image);
            }

        }

        if($product_image ==NULL){
            Session::flash('success','Product Created Successfully!!');
            return redirect()->route('product.index');
        }



        Session::flash('success','Product Created Successfully!!');
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
       $data['title']= "Edit Product";
       $data['product'] = $product;
       $data['categories'] = Category::orderBy('name')->pluck('name','id');

       return view('admin.product.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {

        $request->validate([

            'category_id' => 'required',
            'name' => 'required',
            'description' => 'required',
            'status' => 'required',
            'featured_image'=>'image',
            'images.*' => 'image'

        ]);
        $user = auth()->user();
        $product_images = $request->images;
        $product_data = $request->except('_token','_method');

        if(!$request->has(['is_featured'])){
            $product_data['is_featured'] = 0;
        }

        if(!$request->has(['is_new'])){
            $product_data['is_new'] = 0;
        }
        $product_data['created_by'] = $user->id;
        $product_data['updated_by'] = $user->id;

        //featured image update
        if($request->featured_image != NULL){
            File::delete($product->featured_image);
            if($request->hasFile('featured_image')){
                $file = $request->file('featured_image');
                $file->move('Backend/assets/img/products/',time().$file->getClientOriginalName());
                $product_data['featured_image'] = 'Backend/assets/img/products/'.time().$file->getClientOriginalName();}
        }
        $product->update($product_data);

        //images upload
        if($product_images != NULL)
        {
            foreach($request->images as $image){
                $product_image['product_id'] = $product->id;
                $image->move('Backend/assets/img/products/',time().$image->getClientOriginalName());
                $product_image['file_path'] = 'Backend/assets/img/products/'.time().$image->getClientOriginalName();
                ProductImage::create($product_image);
            }

        }

        if($request->images == NULL){
            Session::flash('success','Product Updated!!');
            return redirect()->route('product.index');

        }
        Session::flash('success','Product Updated!!');
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        Session::flash('error','Product Deleted!!');
        return redirect()->route('product.index');
    }

    public function restore($id){

        Product::where('id',$id)->onlyTrashed()->restore();
        Session::flash('success','Product Restored');
        return redirect()->route('product.index');
    }

    public function delete($id){
        $product = Product::where('id',$id)->onlyTrashed()->with('product_image')->findOrFail($id);
        if(count($product->product_image))
        {
            foreach($product->product_image as $image){

                File::delete($image->file_path);
                $image->delete();

            }

        }


        $product->forceDelete();
        File::delete($product->featured_image);
        Session::flash('error','Product Permanently Deleted');
        return redirect()->route('product.index');
    }

    public function delete_image($image_id){

        $image = ProductImage::findOrFail($image_id);
        File::delete($image->file_path);
        $image->delete();
        return redirect()->back();
    }
}

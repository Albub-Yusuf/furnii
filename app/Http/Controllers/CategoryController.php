<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title'] = "Category List";
        $category = new Category();
        $category = $category->withTrashed();
        if($request->has('search') && ($request->search !=null)){
            $category = $category->where('name','like','%'.$request->search.'%');
        }
        if($request->has('status') && ($request->status !=null)){
            $category = $category->where('status',$request->status);
        }

        $category = $category->orderBy('id','DESC')->paginate(10);
        $data['categories'] = $category;

        if(isset($request->status) || ($request->search)){

            $render['status'] = $request->status;
            $render['search'] = $request->search;
            $category = $category->appends($render);
        }


        $data['serial'] = managePagination($category);
        return view('admin.category.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $data['title'] = "Create Category";
       return view('admin.category.create',$data);
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
           'name'=>'required',
           'status'=>'required',
           // 'file'=>'required'
        ]);
       // dd($request->all());
        $user = auth()->user();

        $category_data = $request->except('_token');
        $category_data['created_by'] = $user->id;
        $category_data['updated_by'] = 0;

        //File Upload
        //if($request->hasFile('file')){
          //  $file = $request->file('file');
            //$file->move('Backend/assets/img/category/',$file->getClientOriginalName());
            //$user['file'] = 'Backend/assets/img/admin/'.$file->getClientOriginalName();
        //}



        Category::create($category_data);
        Session::flash('success','Category Created Successfully!');
        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $data['title']='Edit Category';
        $data['categoryInfo'] = $category;
        return view('admin.category.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
           'name'=> 'required',
            'status'=>'required'

        ]);
       // dd($request->all());

        $user = auth()->user();
        $category_data = $request->except('_token','_method');
        $category_data['created_by'] = $user->id;
        $category_data['updated_by'] = $user->id;
        $category->update($category_data);
        Session::flash('success','Category Updated Successfully!');
        return redirect()->route('category.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        Session::flash('error','Category Deleted!!!');
        return redirect()->route('category.index');
    }

    public function restore($id){

        Category::where('id',$id)->onlyTrashed()->restore();
        Session::flash('success','Category Restored!!');
        return redirect()->route('category.index');

    }

    public function delete($id){
        Category::where('id',$id)->onlyTrashed()->forceDelete();
        Session::flash('error','Category Deleted Permanently!!!');
        return redirect()->route('category.index');
    }
}

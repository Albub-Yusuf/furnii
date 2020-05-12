<?php

namespace App\Http\Controllers;

use App\Advertise;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class AdvertiseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = 'Advertise List';
        $advertise = new Advertise();
        $advertise = $advertise->withTrashed()->orderBy('id','DESC')->paginate(10);
        $data['ads'] = $advertise;
        $data['serial'] = managePagination($advertise);
        //dd($data);
        return view('admin.advertise.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Create Advertise';
        return view('admin.advertise.create',$data);
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
            'title' => 'required',
            'status' => 'required',
            'image' => 'image',
        ]);
        $user = auth()->user();
        $advertise = $request->except('_token','_method');
        $advertise['created_by'] = $user->id;
        $advertise['updated_by'] = 0;


        //File Upload
        if($request->hasFile('image')){
            $file = $request->file('image');
            $file->move('Backend/assets/img/advertise/',$file->getClientOriginalName());
            $advertise['image'] = 'Backend/assets/img/advertise/'.$file->getClientOriginalName();
        }
        Advertise::create($advertise);

        Session::flash('success','Advertise Created Successfully!');
        return redirect()->route('advertise.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Advertise  $advertise
     * @return \Illuminate\Http\Response
     */
    public function show(Advertise $advertise)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Advertise  $advertise
     * @return \Illuminate\Http\Response
     */
    public function edit(Advertise $advertise)
    {
        $data['title'] = 'Edit Advertise';
        $data['advInfo'] = $advertise;
       // dd($data);
        return view('admin.advertise.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Advertise  $advertise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Advertise $advertise)
    {

        $request->validate([
           'title' => 'required',
           'short_details' => 'required',
           'status' => 'required',
            'image' => 'image'

        ]);
        $user = auth()->user();
        $advertise_data = $request->except('_token','_method');
        $advertise_data['updated_by'] = $user->id;

        // image update
        if($request->image != NULL){
            File::delete($advertise->image);
            if($request->hasFile('image')){
                $file = $request->file('image');
                $file->move('Backend/assets/img/advertise/',time().$file->getClientOriginalName());
                $advertise_data['image'] = 'Backend/assets/img/advertise/'.time().$file->getClientOriginalName();}
        }

        $advertise->update($advertise_data);
        Session::flash('success','Advertise Updated!!');
        return redirect()->route('advertise.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Advertise  $advertise
     * @return \Illuminate\Http\Response
     */
    public function destroy(Advertise $advertise)
    {
       $advertise->delete();
        Session::flash('error','Advertise Deleted!!');
        return redirect()->route('advertise.index');

    }

    public function restore($id){

        Advertise::withTrashed()->find($id)->restore();
        Session::flash('info','Advertise Restored!');
        return redirect()->route('advertise.index');
    }

    public function delete($id){

        $advertise = Advertise::where('id',$id)->onlyTrashed()->findOrFail($id);
        $advertise->forceDelete();
        File::delete($advertise->image);        Session::flash('error','Advertise Deleted Permanently!');
        return redirect()->route('advertise.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Advertise;
use App\User;
use Illuminate\Http\Request;
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
        return redirect()->route('admin.dashboard');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Advertise  $advertise
     * @return \Illuminate\Http\Response
     */
    public function destroy(Advertise $advertise)
    {
        //
    }
}

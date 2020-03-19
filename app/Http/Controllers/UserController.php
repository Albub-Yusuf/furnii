<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title']='Admin List';
        $user = new User();
        $user = $user->withTrashed();
        $user = $user->orderBy('id','DESC')->paginate(3);
        $data['users'] = $user;
        $data['serial'] = managePagination($user);

        return view('admin.user.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Create Admin';
        return view('admin.user.create',$data);
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
            'adminType'=> 'required',
            'name' => 'required',
            'email' => 'required',
            'password' =>'required',
            'status' => 'required'
        ]);

        //dd($request->all());

        $user = $request->except('_token','_method');
        $user['password'] = bcrypt($request->password);

        //File Upload
        if($request->hasFile('file')){
            $file = $request->file('file');
            $file->move('Backend/assets/img/admin/',$file->getClientOriginalName());
            $user['file'] = 'Backend/assets/img/admin/'.$file->getClientOriginalName();
        }
        User::create($user);

        //  session()->flash('message','Admin Created Successfully');
        Session::flash('success','Admin Created Successfully!');
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $data['title'] ='Edit Admin Information' ;
        $data['adminInfo'] = $user;
        return view('admin.user.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'adminType' => 'required',
            'name' => 'required',
            'email' => 'required',
            'status' => 'required'

        ]);


        $image="";
        if($request->hasFile('file')){
            if($request->hasFile('file')){
                $file = $request->file('file');
                $file->move('Backend/assets/img/user/',$file->getClientOriginalName());
                File::delete($request->file);
                $image = 'Backend/assets/img/user/'.$file->getClientOriginalName();
            }

        }

        if($image!=NULL){
            User::where('id',$id)->update(['type'=> $request->adminType,'name'=>$request->name,'email'=>$request->email,'file'=> $image,'status'=>$request->status]);
            Session::flash('success','Admin Information Updated Successfully!');
            return redirect()->route('user.index');
        }else{
            User::where('id',$id)->update(['type'=> $request->adminType,'name'=>$request->name,'email'=>$request->email,'status'=>$request->status]);
            Session::flash('success','Admin Information Updated Successfully!');
            return redirect()->route('user.index');
        }



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        User::where('id',$id)->delete();
        File::delete($request->file);
        Session::flash('error','Admin Deleted!');
        return redirect()->route('user.index');
    }

    public function restore($id){

        //dd($id);
        User::withTrashed()->find($id)->restore();
        Session::flash('info','Admin Information Restored!');
        return redirect()->route('user.index');
    }

    public function delete($id){

        $user = user::where('id',$id)->onlyTrashed()->findOrFail($id);
        $user->forceDelete();
        File::delete($user->file);
        Session::flash('error','Admin Information Deleted Permanently!');
        return redirect()->route('user.index');
    }
}

<?php

namespace App\Http\Controllers;
//use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminLoginController extends Controller
{
    public function loginForm(){

        $data['title'] = "Admin Login";
        return view('admin.login',$data);
    }

    public function login(Request $request){

        $request->validate([

            'email' => 'required|email',
            'password' => 'required',
        ]);

        //dd($request->all());

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            echo "working";
            Session::flash('info','Logged In Successfully');
            return redirect()->intended('dashboard');

        }
        else{
            echo "not working";
        }
        //Session::flash('message');
        Session::flash('error','invalid email or password');
        return redirect()->back()->withInput(['email'=>$request->email]);



    }
}

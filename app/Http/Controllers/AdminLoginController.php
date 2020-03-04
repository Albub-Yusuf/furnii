<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    public function loginForm(){

        $data['title'] = "Admin Login";
        return view('admin.login',$data);
    }
}

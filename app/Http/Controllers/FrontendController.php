<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
   public function index(){

       $data['categories'] = Category::withoutTrashed()->get();
       return view('frontend.home',$data);
   }
}

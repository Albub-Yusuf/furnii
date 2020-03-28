<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('test', function () {
    return view('welcome');
});

Route::get('/','FrontendController@index')->name('frontend');
Route::get('products','Front\ProductController@details')->name('product.details');


Route::get('admin/login','AdminLoginController@loginForm')->name('admin.login.form');
Route::post('admin/login','AdminLoginController@login')->name('login');

Route::middleware('auth')->group(function(){

    Route::get('dashboard','DashboardController@index')->name('admin.dashboard');
    Route::resource('user','UserController');
    Route::post('user/{id}/restore','UserController@restore')->name('user.restore');
    Route::post('user/{id}/delete','UserController@delete')->name('user.delete');
    Route::resource('category','CategoryController');
    Route::post('category/{id}/restore','CategoryController@restore')->name('category.restore');
    Route::delete('category/{id}/delete','CategoryController@delete')->name('category.delete');

    Route::resource('product','ProductController');
    Route::post('product/{id}/restore','ProductController@restore')->name('product.restore');
    Route::delete('product/{id}/delete','ProductController@delete')->name('product.delete');
    Route::get('product/{image_id}/delete/image','ProductController@delete_image')->name('product.delete.image');



});

//Route::get('home','HomeController')->name('home');






Route::get('logout',function(){
    auth()->logout();
    Session::flash('error','Logged Out Successfully!');
    return redirect()->route('admin.login.form');
})->name('logout');



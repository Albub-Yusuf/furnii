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
Route::get('products/{id}','Front\ProductController@details')->name('product.details');
Route::get('/search','Front\ProductController@sresults')->name('product.search');
Route::get('frontend/product/{id}','Front\ProductController@productDetails')->name('details');
Route::get('featured/products/{is_featured}','Front\ProductController@featuredProducts')->name('is_featured');
Route::get('latest/products/{is_new}','Front\ProductController@latestProducts')->name('is_new');
Route::get('category/products/{cat_id}','Front\ProductController@categoryProducts')->name('category.products');
Route::get('about-us/','FrontendController@aboutUs')->name('about_us');
Route::get('contact_us/','FrontendController@contactUs')->name('contact_us');



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

    Route::resource('advertise','AdvertiseController');
    Route::post('advertise/{id}/restore','AdvertiseController@restore')->name('advertise.restore');
    Route::delete('advertise/{id}/delete','AdvertiseController@delete')->name('advertise.delete');


    Route::resource('slider','SliderController');






});

//Route::get('home','HomeController')->name('home');

Route::get('logout',function(){
    auth()->logout();
    Session::flash('error','Logged Out Successfully!');
    return redirect()->route('admin.login.form');
})->name('logout');



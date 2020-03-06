<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/login','AdminLoginController@loginForm')->name('admin.login.form');
Route::post('admin/login','AdminLoginController@login')->name('login');

Route::middleware('auth')->group(function(){

    Route::get('dashboard','DashboardController@index')->name('admin.dashboard');

});





Route::get('logout',function(){
    auth()->logout();
    return redirect()->route('admin.login.form');
})->name('logout');



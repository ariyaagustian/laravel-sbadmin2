<?php

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
Auth::routes();
Route::middleware(['superadmin'])->group(function(){
    Route::get('/superadmin', 'Superadmin\SuperadminController@index')->name('admin.dashboard');
    Route::resource('/superadmin/tables','Admin\ProductAjaxController', ['as'=>'product']);
});
Route::middleware(['admin'])->group(function(){
    Route::get('/admin', 'Admin\AdminController@index')->name('admin.dashboard');
    Route::resource('/admin/tables','Admin\ProductAjaxController', ['as'=>'product']);
});


// Route::get('/home', 'HomeController@index')->name('home');

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

    Route::get('/dashboard', 'Superadmin\SuperadminController@index')->name('admin.dashboard')->middleware('role:1,2,3,4,5');
    Route::resource('users','UserController')->middleware('role:1,2');
    Route::resource('roles','RoleController')->middleware('role:1,2');






// Route::get('/home', 'HomeController@index')->name('home');

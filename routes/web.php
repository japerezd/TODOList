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
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/////////////USERS////////////////
Route::namespace('User')->prefix('user')->name('user.')->group(function(){

    Route::get('/dashboard','DashboardUserController@index')->name('dashboard.index');
    Route::resource('/tasks','TaskController');
});

/////////////PROTECTING ROUTES//////////////////
Route::get('/admin/dashboard',function(){
    return view('admin.dashboard');
})->middleware(['auth','auth.admin']);


//MANAGING USERS
Route::namespace('Admin')->prefix('admin')->middleware(['auth','auth.admin'])->name('admin.')->group(function(){
    Route::resource('/users','UserController',['except'=>['show']]);
    Route::get('/dashboard','DashboardController@index')->name('dashboard.index');

    Route::get('/impersonate/user/{id}','ImpersonateController@index')->name('impersonate');
});


Route::get('/admin/impersonate/destroy','Admin\ImpersonateController@destroy')->name('admin.impersonate.destroy');
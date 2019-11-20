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
    Route::get('tasks/export','TaskController@csv_export')->name('tasks.export');
    Route::post('tasks/import','TaskController@csv_import')->name('tasks.import');
    Route::get('/dashboard','DashboardUserController@index')->name('dashboard.index');
    Route::resource('/tasks','TaskController');

    Route::get('/calendar','CalendarUserController@index')->name('calendar.index');
});

/////////////PROTECTING ROUTES//////////////////
Route::get('/admin/dashboard',function(){
    return view('admin.dashboard');
})->middleware(['auth','auth.admin']);


//MANAGING USERS with ADMIN
Route::namespace('Admin')->prefix('admin')->middleware(['auth','auth.admin'])->name('admin.')->group(function(){
    Route::resource('/users','UserController',['except'=>['show']]);
    Route::get('tasks/export','TaskAdminController@csv_export')->name('tasks.export');
    Route::post('tasks/import','TaskAdminController@csv_import')->name('tasks.import');
    Route::get('/dashboard','DashboardController@index')->name('dashboard.index');
    Route::resource('/tasks','TaskAdminController');

    Route::get('/impersonate/user/{id}','ImpersonateController@index')->name('impersonate');
});


Route::get('/admin/impersonate/destroy','Admin\ImpersonateController@destroy')->name('admin.impersonate.destroy');
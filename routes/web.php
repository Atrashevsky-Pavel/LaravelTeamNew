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

Route::get('/clients', 'TeamController@index');
Route::get('/', function () {
    return redirect('/clients');
});

Route::post('/delete', 'TeamController@delete')->middleware('auth')->name('delete');
Route::post('/update', 'TeamController@update')->middleware('auth')->name('update');
Route::get('/update', function () {
    return redirect('/clients');
});
Route::get('/delete', function () {
    return redirect('/clients');
});

Auth::routes();





//
//Route::get('/', function () {
//    return view('welcome');
//});
//
//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');

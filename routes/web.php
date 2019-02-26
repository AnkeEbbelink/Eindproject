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

//Route::get('/', function(){
  //  return view('welcome');
//});

Route::get('/', function () {
  return view('welcome');
});

Route::resource('cats', 'CatsController');

Route::get('/create', function () {
  return view('cats.create');

});

Route::POST('create', 'CatsController@update_avatar');

route::POST('upload', function(){echo 'hello';});




//Route::get('/', 'PagesController@home');
//Route::get('/voorpagina','PagesController@voorpagina');
//Route::get('/invoer', 'PagesController@invoer');

//Route::get('/cats', 'CatsController@index');
//Route::get('/cats/create', 'CatsController@create');
//Route::get('/cats/{cat}', 'CatsController@show');
//Route::post('/cats', 'CatsController@store');
//Route::get('/cats/{cat}/edit','CatsController@edit');
//Route::patch('/cats/{cat}', 'CatsController@update');
//Route::delete('/cats/{cat}', 'CatsController@destroy');
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/users', 'UserController');

Auth::routes();



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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

//
//Route::get('/', function () {
//    return view('pages.welcome');
//});

Route::get('/hello', function () {
//    return view('welcome');
    return 'Hello World!';
});

//Route::get('/about', function() {
//   return view('pages.about');
//});

// Inserting dynamic parameters through routes

Route::get('/users/{id}/{name}', function($id, $name) {
    return 'This is user '.$name.' with an id of '.$id;
});

// Pages controller
Route::get('/', 'PagesController@index');

// Pages controller
Route::get('/about', 'PagesController@about');

// Pages controller
Route::get('/services', 'PagesController@services');

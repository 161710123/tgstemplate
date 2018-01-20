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
Route::get('/home', function () {
    return view('layout.home');
});
Route::get('/galeri', function () {
    return view('layout.galeri');
});
Route::get('/paragrap', function () {
    return view('layout.paragrap');
});
Route::get('/bobotoh', function () {
    return view('layout.fadlan');
});
Route::get('/persib', function () {
    return view('layout.dika');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/tabel', 'aditController@asiswa');
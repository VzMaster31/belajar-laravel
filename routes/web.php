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

Route::get('/', function() {
    return view('home');
})->name('homepage');

Route::get('/about', function() {
    return view('about');
})->name('about');

Route::get('/login', 'AuthController@login')->name('login');
Route::post('/login', 'AuthController@postlogin')->name('postlogin');
Route::get('/logout', 'AuthController@logout')->name('logout');

Route::group(['middleware' => 'auth'], function () {
    
    Route::get('/data', 'SiswaController@create')->name('createData');
    Route::post('/data', 'SiswaController@store')->name('storeData');
    
    Route::get('/data/view', 'SiswaController@index')->name('listData');
    
    Route::get('/data/{id}/edit', 'SiswaController@edit')->name('editData');
    Route::post('/data/{id}/update', 'SiswaController@update')->name('updateData');
    
    Route::get("/data/{id}/delete", "SiswaController@destroy")->name('deleteData');    
});



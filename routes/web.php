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

// Route jenis Closure
Route::get('/profil', function () {
    return "Ini adalah halaman profil.";
})->name('profil');

// Route name
Route::get('/testname', function() {
    return route('profil');
});

// Route dengan Parameter
Route::get('/profil/{id}', function($id) {
    return $id;
});

// Route dengan Controller
Route::get('/tescontroller', 'TesController@show');

// Route dengan Resource
Route::resource('siswa', 'SiswaController');

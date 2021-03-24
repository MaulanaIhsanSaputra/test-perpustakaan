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
    return view('admin.auth.login');
});

Auth::routes();

// AUTHENTICATION ROUTE
Route::get('admin/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('admin/login', 'Auth\LoginController@login');
Route::get('admin/register', 'Auth\RegisterController@showRegisterForm')->name('register');
Route::post('admin/logout', 'Auth\LoginController@logout')->name('logout');

Route::middleware('auth')->prefix('admin')->namespace('Admin')->name('admin.')->group(function() {

	Route::get('/', 'DashboardController@index')->name('index');
    Route::resource('perpustakaans','PerpustakaanController');
    // Route::resource('buku','BukuController');
    Route::get('buku', 'BukuController@index')->name('buku');
	Route::get('buku/create', "BukuController@create")->name('buku.create');
	Route::post('buku/create', "BukuController@store")->name('buku.store');
	Route::get('buku/show/{id}', "BukuController@show")->name('buku.show');
	Route::put('buku/update/{id}', "BukuController@update")->name('buku.update');
	Route::get('buku/edit', "BukuController@edit")->name('buku.edit');
	Route::delete('buku/destroy/{id}', "BukuController@destroy")->name('buku.destroy');

	Route::get('perpustakaan', 'PerpustakaanController@index')->name('perpustakaan');
	Route::get('perpustakaan/create', "PerpustakaanController@create")->name('perpustakaan.create');
	Route::post('perpustakaan/create', "PerpustakaanController@store")->name('perpustakaan.store');
	Route::get('perpustakaan/show/{id}', "PerpustakaanController@show")->name('perpustakaan.show');
	Route::put('perpustakaan/update/{id}', "PerpustakaanController@update")->name('perpustakaan.update');
	Route::get('perpustakaan/edit', "PerpustakaanController@edit")->name('perpustakaan.edit');
	Route::delete('perpustakaan/destroy/{id}', "PerpustakaanController@destroy")->name('perpustakaan.destroy');
});
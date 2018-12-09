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
    return view('home');
});

Route::resource('galeri', 'GaleriController');
Route::get('galeri-create', 'GaleriController@create');
Route::post('galeri-create', 'GaleriController@store');
Route::get('admin-galeri', 'GaleriController@index');
Route::get('galeri-update/{id}', 'GaleriController@edit');
Route::post('galeri-update/{id}', 'GaleriController@update');
Route::get('galeri-delete/{id}', 'GaleriController@delete');

Route::resource('produk', 'ProdukController');
Route::get('produk-create', 'ProdukController@create');
Route::post('produk-create', 'ProdukController@store');
Route::get('admin-produk', 'ProdukController@index');
Route::get('produk-update/{id}', 'ProdukController@edit');
Route::post('produk-update/{id}', 'ProdukController@update');
Route::get('produk-delete/{id}', 'ProdukController@delete');

//HOME User
Route::get('about', 'HomeController@about');
Route::get('produk', 'HomeController@produk');
Route::get('rpks', 'HomeController@rpks');
Route::get('galeri', 'HomeController@galeri');
Route::get('contact', 'HomeController@contact');
Route::get('daftar', 'HomeController@daftar');
Route::get('masuk', 'HomeController@masuk');

//RPK
Route::get('rpk-dashboard/{id}', 'RPK\DashboardController@index');

Route::get('rpk-profil/{id}', 'RPK\ProfilController@index');
Route::post('rpk-profil-update/{id}', 'RPK\ProfilController@update');

Route::get('rpk-komoditas/{id}', 'RPK\KomoditasController@index');
Route::get('rpk-komoditas-add', 'RPK\KomoditasController@add');
Route::post('rpk-komoditas-add', 'RPK\KomoditasController@insert');
Route::get('rpk-komoditas-add/{id}', 'RPK\KomoditasController@edit');
Route::post('rpk-komoditas-update/{id}', 'RPK\KomoditasController@update');

Route::get('rpk-laporan', 'RPK\LaporanController@index');
Route::post('rpk-laporan-add', 'RPK\LaporanController@insert');

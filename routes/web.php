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

Auth::routes();

Route::get("/admin", "AdminController@index")->name("admin");
Route::get("/admin/poliklinik", "AdminController@poliklinik")->name("admin_poli");
Route::get("/admin/jadwal", "AdminController@jadwal")->name("admin_jadwal");
Route::get("/admin/laporan", "AdminController@laporan")->name("admin_laporan");

Route::get('/home', 'HomeController@index')->name('home');

Route::get("/", "PublicController@index")->name("index");
Route::get("/profile", "PublicController@profile")->name("profile");
Route::get("/poliklinik", "PublicController@poliklinik")->name("poliklinik");
Route::get("/jadwal-dokter", "PublicController@jadwal")->name("jadwal");
Route::get("/daftar-antrian", "PublicController@registerAntrian")->name("daftarAntri");

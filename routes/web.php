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
Route::get('/home', 'HomeController@index')->name('home');

Route::get("/admin", "AdminController@index")->name("admin");
Route::get("/admin/laporan", "AdminController@laporan")->name("admin_laporan");


Route::get("/admin/jadwal", "JadwalController@index")->name("admin_jadwal");
Route::get("/admin/jadwal/tambah", "JadwalController@addJadwal")->name("new.jadwal");
Route::get("/admin/jadwal/hapus/{id}", "JadwalController@destroy")->name("delete.jadwal");

Route::get("/admin/poliklinik", "PoliklinikController@index")->name("admin_poli");
Route::get("/admin/poliklinik/tambah", "PoliklinikController@addPoli")->name("new.poli");
Route::get("/admin/poliklinik/hapus/{noPoli}", "PoliklinikController@destroy")->name("delete.poli");

Route::get("/", "PublicController@index")->name("index");
Route::get("/profile", "PublicController@profile")->name("profile");
Route::get("/poliklinik", "PublicController@poliklinik")->name("poliklinik");
Route::get("/jadwal-dokter", "PublicController@jadwal")->name("jadwal");
Route::get("/daftar-antrian", "PublicController@registerAntrian")->name("daftarAntri");

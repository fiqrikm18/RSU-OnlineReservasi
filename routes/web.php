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

// admin dokter routes
Route::get("/admin/dokter", "DokterController@index")->name("admin_dokter");
Route::get("/admin/dokter/tambah", "DokterController@addDokter")->name("new.dokter");
Route::get("/admin/dokter/hapus/{id}", "DokterController@destroy")->name("delete.dokter");
Route::get("/admin/dokter/edit/{id}", "DokterController@editDokter")->name("edit.dokter");

Route::post("/admin/dokter", "DokterController@storeDokter")->name("store.dokter");
Route::post("/admin/dokter/{id}", "DokterController@updateDokter")->name("update.dokter");

// admin jadwal routes
Route::get("/admin/jadwal", "JadwalController@index")->name("admin_jadwal");
Route::get("/admin/jadwal/tambah", "JadwalController@addJadwal")->name("new.jadwal");
Route::get("/admin/jadwal/edit/{id}", "JadwalController@editJadwal")->name("edit.jadwal");
Route::get("/admin/jadwal/hapus/{id}", "JadwalController@destroy")->name("delete.jadwal");

Route::post("/admin/jadwal/", "JadwalController@storeJadwal")->name("store.jadwal");
Route::post("/admin/jadwal/update/{id}", "JadwalController@updateJadwal")->name("update.jadwal");

// admin poli routes
Route::get("/admin/poliklinik", "PoliklinikController@index")->name("admin_poli");
Route::get("/admin/poliklinik/tambah", "PoliklinikController@addPoli")->name("new.poli");
Route::get("/admin/poliklinik/edit/{id}", "PoliklinikController@getPoli")->name("edit.poli");
Route::get("/admin/poliklinik/hapus/{noPoli}", "PoliklinikController@destroy")->name("delete.poli");

Route::post("/admin/poliklinik", "PoliklinikController@storePoli")->name("store.poli");
Route::post("/admin/poliklinik/update/{id}", "PoliklinikController@updatePoli")->name("update.poli");

// public page routes
Route::get("/", "PublicController@index")->name("index");
Route::get("/profile", "PublicController@profile")->name("profile");
Route::get("/poliklinik", "PublicController@poliklinik")->name("poliklinik");
Route::get("/jadwal-dokter", "PublicController@jadwal")->name("jadwal");
Route::get("/antrian", "PublicController@antrian")->name("antrian");
Route::get("/daftar-antrian", "PublicController@registerAntrian")->name("daftarAntri");
Route::post("/daftar-antrian", "PublicController@storeAntrian")->name("store.antrian");
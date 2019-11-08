<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PublicController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function profile() {
        return view('profile');
    }

    public function poliklinik() {
        $listPoli = DB::table("dokter")
                    ->join("poliklinik", "dokter.poli", '=', "poliklinik.noPoli")
                    ->orderBy("poliklinik.noPoli", "ASC")
                    ->select()
                    ->paginate(25);
        $countPoli = DB::table("dokter")->count();
        return view('poliklinik')->with(compact("listPoli", "countPoli"));
    }

    public function jadwal() {
        $listJadwal = DB::table("jadwal")
                    ->select(DB::raw("poliklinik.namaPoli as poli, dokter.namaDokter as dokter, group_concat(jadwal.jam SEPARATOR ', ') as jam, group_concat(jadwal.hari SEPARATOR ', ') as hari"))
                    ->join("dokter", "dokter.kodeDokter", '=', "jadwal.dokter")
                    ->join("poliklinik", "dokter.poli", '=', "poliklinik.noPoli")
                    ->groupBy("jadwal.dokter")
                    ->paginate(25);

        $countJadwal = DB::table("jadwal")->count();

        return view('jadwal')->with(compact("listJadwal", 'countJadwal'));
    }

    public function registerAntrian() {
        return view('antrian');
    }

    public function storeRegister(Request $request) {
        // TODO:   add logic for save data here
    }
}

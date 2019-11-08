<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    public function __construct() {
        $this->middleware("auth");
    }

    public function index() {
        return view("admin");
    }

    public function poliklinik() {
        $listPoli = DB::table("dokter")
                    ->join("poliklinik", "dokter.poli", '=', "poliklinik.noPoli")
                    ->orderBy("poliklinik.noPoli", "ASC")
                    ->select()
                    ->paginate(25);
        $countPoli = DB::table("poliklinik")->count();
        $countDokter = DB::table("dokter")->count();

        return view("admin.poliklinik")->with(compact("listPoli", "countPoli", "countDokter"));
    }

    public function jadwal() {
        $listJadwal = DB::table("jadwal")
                    ->select(DB::raw("poliklinik.namaPoli as poli, dokter.namaDokter as dokter, group_concat(jadwal.jam SEPARATOR ', ') as jam, group_concat(jadwal.hari SEPARATOR ', ') as hari"))
                    ->join("dokter", "dokter.kodeDokter", '=', "jadwal.dokter")
                    ->join("poliklinik", "dokter.poli", '=', "poliklinik.noPoli")
                    ->groupBy("jadwal.dokter")
                    ->paginate(25);
        return view("admin.jadwal")->with(compact("listJadwal"));
    }

    public function laporan() {
        return view("admin.laporan");
    }
}

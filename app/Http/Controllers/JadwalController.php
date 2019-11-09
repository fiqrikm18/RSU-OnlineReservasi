<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jadwal;
use DB;

class JadwalController extends Controller
{
    public function __construct() {
        $this->middleware("auth");
    }

    public function index() {
        $listJadwal = DB::table("jadwal")
                    ->select(DB::raw("jadwal.id, poliklinik.namaPoli as poli, dokter.namaDokter as dokter, jadwal.jam as jam, jadwal.hari hari"))
                    ->join("dokter", "dokter.kodeDokter", '=', "jadwal.dokter")
                    ->join("poliklinik", "dokter.poli", '=', "poliklinik.noPoli")
                    ->paginate(25);
        return view("admin.jadwal")->with(compact("listJadwal"));
    }

    public function addJadwal() {
        return view("admin.jadwal.add");
    }

    public function destroy(Request $requset, $id) {
        if(DB::table("jadwal")->where("id", $id)->delete()) {
            \Session::flash("messages", "Berhasil menghapus jadwal dokter");
            return redirect('/admin/jadwal');
        }
    }
}

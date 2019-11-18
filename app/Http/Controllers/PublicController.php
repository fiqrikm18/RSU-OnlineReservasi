<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
use App\Pasien;
use App\Antrian;

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
                    ->select(DB::raw("jadwal.id, poliklinik.namaPoli as poli, dokter.namaDokter as dokter, jadwal.jam as jam, jadwal.hari hari"))
                    ->join("dokter", "dokter.kodeDokter", '=', "jadwal.dokter")
                    ->join("poliklinik", "dokter.poli", '=', "poliklinik.noPoli")
                    ->paginate(25);

        $countJadwal = DB::table("jadwal")->count();

        return view('jadwal')->with(compact("listJadwal", 'countJadwal'));
    }

    public function antrian() {
        return view('antrian');
    }

    public function registerAntrian() {
        $listDokter = DB::table("dokter")->get();
        $listPoli = DB::table("poliklinik")->get();
        return view('form_antrian')->with(compact("listDokter", "listPoli"));
    }

    public function storeAntrian(Request $request) {
        $validator = Validator::make($request->all(), [
            "noKartu" => "required",
            "namaPasien" => "required",
            "tempatLahir" => "required",
            "tglLahir" => "required",
            "alamat" => "required",
            "noTelp" => "required",
            "jKelamin" => "required",
            "poli" => "required",
            "dokter" => "required",
            "penjamin" => "required",
            "tglBerobat" => "required",
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
    }
}

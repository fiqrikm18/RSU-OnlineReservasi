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
        return view('jadwal');
    }

    public function registerAntrian() {
        return view('antrian');
    }
}

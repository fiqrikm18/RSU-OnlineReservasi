<?php

namespace App\Http\Controllers;
use DB;
use App\Poliklinik;

use Illuminate\Http\Request;

class PoliklinikController extends Controller
{
    public function __construct() {
        $this->middleware("auth");
    }

    public function index() {
        $listPoli = DB::table("poliklinik")
                    ->leftJoin("dokter", "dokter.poli", '=', "poliklinik.noPoli")
                    ->orderBy("poliklinik.noPoli", "ASC")
                    ->select()
                    ->paginate(25);
        $countPoli = DB::table("poliklinik")->count();
        $countDokter = DB::table("dokter")->count();

        return view("admin.poliklinik")->with(compact("listPoli", "countPoli", "countDokter"));
    }

    public function addPoli() {
        return view("admin.poli.add");
    }

    public function storePoli(Request $req) {

    }

    public function destroy(Request $request, $id) {
        if(DB::table("poliklinik")->where("noPoli", $id)->delete()) {
            \Session::flash("messages", "Berhasil menghapus poliklinik");
            return redirect('/admin/poliklinik');
        }
    }
}

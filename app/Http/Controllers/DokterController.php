<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;

class DokterController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }

    public function index()
    {
        $listDokter = DB::table("dokter")
                    ->leftJoin("poliklinik", "poliklinik.noPoli", "=", "dokter.poli")
                    ->select()->paginate(25);
        return view("admin.dokter")->with(compact("listDokter"));
    }

    public function addDokter()
    {
        return view("admin.dokter.add");
    }

    public function storeDokter(Request $request)
    {
        
    }

    public function destroy(Request $request, $id)
    {
        if(DB::table("dokter")->where("kodeDokter", $id)->delete()) {
            \Session::flash("messages", "Berhasil menghapus data dokter");
            return redirect('/admin/poliklinik');
        }
    }
}

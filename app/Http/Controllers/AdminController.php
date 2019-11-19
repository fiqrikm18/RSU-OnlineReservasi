<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;
use App\Exports\LaporanExport;
use Maatwebsite\Excel\Facades\Excel;
use Carbon;
use PDF;

class AdminController extends Controller
{
    public function __construct() {
        $this->middleware("auth");
    }

    public function index() {
        return view("admin");
    }

    public function laporan() {
        return view("admin.laporan");
    }

    public function laporanPeriode() {
        $data = DB::table("antrian")
                ->leftJoin("poliklinik", "poliklinik.noPoli", '=', "antrian.poli")
                ->leftJoin("dokter", "dokter.kodeDokter", '=', "antrian.dokter")
                ->leftJoin("pasien", "pasien.medrec", '=', "antrian.medrec")
                ->paginate(25);

        return view("admin.laporan.periode")->with(compact("data"));
    }

    public function periodeSrc(Request $request) {
        $data = DB::table("antrian")
                ->leftJoin("poliklinik", "poliklinik.noPoli", '=', "antrian.poli")
                ->leftJoin("dokter", "dokter.kodeDokter", '=', "antrian.dokter")
                ->leftJoin("pasien", "pasien.medrec", '=', "antrian.medrec")
                ->whereBetween("antrian.created_at", [$request->dateFrom, $request->dateTo])
                ->paginate(25);

        return view("admin.laporan.periode")->with(compact("data"));
    }

    // export function to excel
    public function exportLaporanPeriode(Request $request) {
        return (new LaporanExport($request->dateFrom, $request->dateTo))->download("Laporan Periode-".Carbon::now()->format("d-M-Y").".xlsx");
    }

    public function exportLaporanPeriodePDF(Request $request) {
        if($request->dateFrom != null && $request->dateTo != null) {
            $data = DB::table("antrian")
                ->leftJoin("poliklinik", "poliklinik.noPoli", '=', "antrian.poli")
                ->leftJoin("dokter", "dokter.kodeDokter", '=', "antrian.dokter")
                ->leftJoin("pasien", "pasien.medrec", '=', "antrian.medrec")
                ->whereBetween("antrian.created_at", [$request->dateFrom, $request->dateTo])
                ->paginate(25);

            $pdf = PDF::loadView('exports.periode-pdf', compact('data'));
            return $pdf->download("Laporan Periode-".Carbon::now()->format("d-M-Y").".pdf");
        } 
        else {
            $data = DB::table("antrian")
            ->leftJoin("poliklinik", "poliklinik.noPoli", '=', "antrian.poli")
            ->leftJoin("dokter", "dokter.kodeDokter", '=', "antrian.dokter")
            ->leftJoin("pasien", "pasien.medrec", '=', "antrian.medrec")
            ->paginate(25);

            $pdf = PDF::loadView('exports.periode-pdf', compact('data'));
            return $pdf->download("Laporan Periode-".Carbon::now()->format("d-M-Y").".pdf");
        }
    }

    public function laporanPasien() {
        # code..
    }

    public function pasienSrc(Request $request) {
        # code..
    }
}

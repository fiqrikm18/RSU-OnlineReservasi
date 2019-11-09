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

    public function laporan() {
        return view("admin.laporan");
    }
}

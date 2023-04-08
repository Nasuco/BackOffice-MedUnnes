<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KonsultasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function KonsultasiList(Request $request)
    {
        $list = DB::table('konsultasi')->get();
        return view('backend.konsultasi.list_konsultasi',compact('list'));
    }

}

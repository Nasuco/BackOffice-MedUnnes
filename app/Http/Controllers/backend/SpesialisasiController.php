<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SpesialisasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function SpesialisasiList(Request $request)
    {
        $list = DB::table('spesialisasi')->get();
        return view('backend.spesialisasi.list_spesialisasi',compact('list'));
    }
}

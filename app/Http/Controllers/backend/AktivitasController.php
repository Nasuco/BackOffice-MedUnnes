<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AktivitasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function AktivitasList(Request $request)
    {
        $list = DB::table('aktivitas')->get();
        return view('backend.aktivitas.aktivitas',compact('list'));
    }
}

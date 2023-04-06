<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PasienController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function PasienList(Request $request)
    {
        $list = DB::table('pasien')->get();
        return view('backend.pasien.list_pasien',compact('list'));
    }

    public function PasienRead($id)
    {
        $read = DB::table('pasien')->where('id',$id)->first();
        return view('backend.pasien.read_pasien',compact('read'));
    }
}

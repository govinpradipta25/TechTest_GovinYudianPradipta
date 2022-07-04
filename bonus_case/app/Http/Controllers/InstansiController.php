<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class InstansiController extends Controller
{
    public function index()
    {
    	// mengambil data dari table instansi
    	$instansi_tbl = DB::table('instansi_tbl')->get();
 
    	// mengirim data instansi ke view index
    	return view('index',['instansi_tbl' => $instansi_tbl]);
 
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// panggil model pegawai
use App\Biodata;

class PegawaiControllerOrm extends Controller
{
    public function index()
    {
    	//mengambil data
    	return $biodata = Biodata::all();

    	// mengirim data pegawai ke view pegawai
    	//return view('pegawai2', ['pegawai' => $pegawai]);
    }
}
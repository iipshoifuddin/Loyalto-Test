<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Biodata;

class Biodata2Controller extends Controller
{
    //
    public function index()
    {
    	//menampilkan form data
        return view('inputBiodata');

    }
    public function store(Request $request)
    {
        
        $biodata = new Biodata;
        $biodata->id = null;
        $biodata->nama = $request->nama;
        $biodata->alamat = $request->alamat;
        $biodata->gender = $request->gender;
        $biodata->tempat_lahir = $request->tempat_lahir;
        $biodata->tanggal_lahir = $request->tanggal_lahir;
        $biodata->agama = $request->agama;
        $biodata->kota = $request->kota;
        $biodata->kenegaraan = $request->kenegaraan;
        $biodata->handphone = $request->handphone;

        $biodata->save();

        return redirect('/viewbiodata');
    }

    public function viewbiodata()
    {
        $biodata = Biodata::all();
        return view('viewBiodata', ['biodata' => $biodata]);
        //return view('viewBiodata');
    }
}

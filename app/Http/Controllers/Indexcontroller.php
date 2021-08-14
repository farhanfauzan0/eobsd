<?php

namespace App\Http\Controllers;

use App\Models\Infodaftar;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class Indexcontroller extends Controller
{
    function index()
    {
        return view('front.index');
    }

    function pendaftaran()
    {
        return view('front.pendaftaran');
    }

    function pendaftaran_post(Request $request)
    {
        $data = new Pendaftaran();
        $data->nama = $request->nama;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->tgl_lahir = $request->tanggal_lahir;
        $data->alamat = $request->alamat;
        $data->no_telp = $request->no_telp;
        $data->save();

        return redirect()->route('pendaftaran.klien.index')->with('message', 'Pendaftaran berhasil diinput');
    }

    function pendaftaran_status()
    {
        $data = Pendaftaran::all();
        return view('front.status', ['data' => $data]);
    }

    function info_pendaftaran()
    {
        $data = Infodaftar::select('*')->first();
        return view('front.info', ['data' => $data]);
    }
}

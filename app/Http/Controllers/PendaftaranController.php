<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use App\Models\Infodaftar;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pendaftaran::all();
        return view('datas.pendaftar', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('datas.formpendaftaran', ['data' => [], 'link' => 'pendaftaran.store', 'method' => 'POST']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Pendaftaran();
        $data->nama = $request->nama;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->tgl_lahir = $request->tanggal_lahir;
        $data->alamat = $request->alamat;
        $data->no_telp = $request->no_telp;
        $data->save();

        return redirect()->route('pendaftaran.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pendaftaran $pendaftaran)
    {
        $data = Pendaftaran::select('*')->whereid($pendaftaran->id)->first();
        return view('datas.formpendaftaran', ['data' => $data, 'link' => 'pendaftaran.update', 'acara' => $data, 'method' => 'PATCH']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Pendaftaran::find($request->id);
        $data->nama = $request->nama;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->tgl_lahir = $request->tanggal_lahir;
        $data->alamat = $request->alamat;
        $data->no_telp = $request->no_telp;
        $data->status = $request->status;
        $data->update();

        return redirect()->route('pendaftaran.index')->with('success', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pendaftaran $pendaftaran)
    {
        $data = Pendaftaran::find($pendaftaran->id);
        $data->delete();

        return response()->json(['success' => true]);
    }

    function info_index()
    {
        $data = InfoDaftar::select('*')->first();
        return view('datas.info', ['data' => $data]);
    }

    function info_post(Request $request)
    {
        Infodaftar::whereid('1')->update([
            'desc' => $request->info
        ]);

        return back();
    }
}

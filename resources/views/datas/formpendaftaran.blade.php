@extends('master')
@section('head-content')
    <div class="row align-items-center">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Tambah Data Pendaftaran</h4>
        </div>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <form method="POST" action="{{ route($link, !empty($acara) ? $acara : '') }}">
                    @method($method)
                    @csrf
                    <input name="id" value="{{ !empty($data->id) ? $data->id : '' }}" hidden>
                    <div class="form-group">
                        <label>Nama</label>
                        <input class="form-control" name="nama" type="text"
                            value="{{ !empty($data->nama) ? $data->nama : '' }}" required>
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="form-select" name="jenis_kelamin" required>
                            <option value="laki-laki">Laki-laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input class="form-control" name="tempat_lahir" type="text"
                            value="{{ !empty($data->tempat_lahir) ? $data->tempat_lahir : '' }}" required>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input class="form-control datepicker" name="tanggal_lahir" readonly required type="text"
                            value="{{ !empty($data->tgl_lahir) ? $data->tgl_lahir : '' }}">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input class="form-control" name="alamat" type="text"
                            value="{{ !empty($data->alamat) ? $data->alamat : '' }}" required>
                    </div>
                    <div class="form-group">
                        <label>No Telp</label>
                        <input class="form-control" name="no_telp" type="number"
                            value="{{ !empty($data->no_telp) ? $data->no_telp : '' }}" required>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-select" name="status" required>
                            <option value="1" selected>Diterima</option>
                            <option value="2">Ditolak</option>
                        </select>
                    </div>
                    <button class="btn btn-success" type="submit">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection

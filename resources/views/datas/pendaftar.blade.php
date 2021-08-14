@extends('master')
@section('head-content')
    <div class="row align-items-center">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Data Pendaftar</h4>
        </div>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <a href="{{ route('pendaftaran.create') }}" class="btn btn-success"><i style="color: white"
                        class="fas fa-plus"></i></a>
                &nbsp; <b>Tambah</b>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    {{ $message }}
                </div>
            @endif
            <div class="white-box">
                <div class="table-responsive">
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th class="border-top-0">Nama</th>
                                <th class="border-top-0">Jenis Kelamin</th>
                                <th class="border-top-0">Tempat Lahir</th>
                                <th class="border-top-0">Tanggal Lahir</th>
                                <th class="border-top-0">Alamat</th>
                                <th class="border-top-0">No Telp</th>
                                <th class="border-top-0">Status</th>
                                <th class="border-top-0">#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $datas)
                                <tr>
                                    <td>{{ $datas->nama }}</td>
                                    <td>{{ $datas->jenis_kelamin }}</td>
                                    <td>{{ $datas->tempat_lahir }}</td>
                                    <td>{{ $datas->tgl_lahir }}</td>
                                    <td>{{ $datas->alamat }}</td>
                                    <td>{{ $datas->no_telp }}</td>
                                    @if ($datas->status == '0')
                                        <td style="background-color: yellow">
                                            <label>Pending</label>
                                        </td>
                                    @elseif ($datas->status == '1')
                                        <td style="background-color: rgb(75, 221, 75)">
                                            <label>Diterima</label>
                                        </td>
                                    @elseif ($datas->status == '2')
                                        <td style="background-color: red">
                                            <label>Ditolak</label>
                                        </td>
                                    @endif
                                    <td>
                                        <a href="{{ route('pendaftaran.edit', ['pendaftaran' => $datas->id]) }}"
                                            class="btn btn-warning">Edit</a>

                                        <a data-id="{{ $datas->id }}" style="color: white"
                                            class="btn btn-danger btn-hapus">Hapus</a>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $('.btn-hapus').click(function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            $.ajax({
                type: 'DELETE',
                // method: 'DELETE',
                url: '/admin/pendaftaran/' + id
            }).then(function(data) {
                location.reload()
            });
        })

    </script>
@endsection

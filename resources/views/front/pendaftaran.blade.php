<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pendaftaran</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('tmpl/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lgn/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('lgn/css/util.css') }}" rel="stylesheet">
    <link href="{{ asset('tmpl/datepicker/datepicker.min.css') }}" rel="stylesheet">

    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-t-85 p-b-20">
                <form method="POST" action="{{ route('pendaftaran.klien.post') }}"
                    class="login100-form validate-form">
                    @csrf
                    <span class="login100-form-title p-b-70">
                        EO <br> PENDAFTARAN
                    </span>
                    @if ($message = Session::get('message'))

                        <div class="alert alert-success alert-dismissable">
                            {{ $message }}
                        </div>
                    @endif
                    <div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate="Enter Nama">
                        <input class="input100" name="nama" type="text" required>
                        <span class="focus-input100" data-placeholder="Nama"></span>
                    </div>
                    <div class="wrap-input100 m-b-35" data-validate="Enter Jenis Kelamin">
                        <select class="form-select" name="jenis_kelamin" required>
                            <option value="laki-laki">Laki-laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                        <span class="focus-input100" data-placeholder=""></span>
                    </div>
                    <div class="wrap-input100 validate-input m-b-35" data-validate="Enter Tempat Lahir">
                        <input class="input100" name="tempat_lahir" type="text" required>
                        <span class="focus-input100" data-placeholder="Tempat Lahir"></span>
                    </div>
                    <div class="wrap-input100 validate-input m-b-35" data-validate="Enter Alamat">
                        <input class="input100" name="alamat" type="text" required>
                        <span class="focus-input100" data-placeholder="Alamat"></span>
                    </div>
                    <div class="wrap-input100 validate-input m-b-35" data-validate="Enter No Telp">
                        <input class="input100" name="no_telp" type="text" required>
                        <span class="focus-input100" data-placeholder="No Telp"></span>
                    </div>
                    <div class="wrap-input100 m-b-35" data-validate="Enter Tanggal Lahir">
                        <input class="input00 datepicker" name="tanggal_lahir" readonly required type="text">
                        <span class="focus-input100" data-placeholder="Tanggal Lahir"></span>
                    </div>


                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Daftar
                        </button>
                    </div>
                    <br>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ asset('tmpl/plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('tmpl/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('lgn/js/main.js') }}"></script>
    <script src="{{ asset('tmpl/datepicker/datepicker.min.js') }}"></script>
    <script>
        $('.datepicker').datepicker({
            format: "yyyy-mm-d"
        });

    </script>

</body>

</html>

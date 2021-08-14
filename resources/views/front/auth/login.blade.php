<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('tmpl/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lgn/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('lgn/css/util.css') }}" rel="stylesheet">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-t-85 p-b-20">
                <form method="POST" action="{{ route('login.klien.post') }}" class="login100-form validate-form">
                    @csrf
                    <span class="login100-form-title p-b-70">
                        EO <br> LOGIN
                    </span>
                    @if ($message = Session::get('error'))

                        <div class="alert alert-danger alert-dismissable">
                            Masukan data dengan benar
                        </div>
                    @endif
                    <div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate="Enter username">
                        <input class="input100" type="text" name="username" autocomplete="off">
                        <span class="focus-input100" data-placeholder="Username"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
                        <input class="input100" type="password" name="password">
                        <span class="focus-input100" data-placeholder="Password"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Login
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

</body>

</html>

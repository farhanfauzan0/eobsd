<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ADMIN</title>

    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('tmpl/plugins/images/favicon.png') }}">

    <link href="{{ asset('tmpl/plugins/bower_components/chartist/dist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('tmpl/datatable/css/datatable.css') }}" rel="stylesheet">
    <link href="{{ asset('tmpl/datatable/css/datatable.bs5.css') }}" rel="stylesheet">
    <link href="{{ asset('tmpl/datatable/css/button.css') }}" rel="stylesheet">
    <link href="{{ asset('tmpl/datepicker/datepicker.min.css') }}" rel="stylesheet">
    <link rel="stylesheet"
        href="{{ asset('tmpl/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('summernote/summernote-lite.css') }}" />
    <link href="{{ asset('tmpl/css/style.min.css') }}" rel="stylesheet">

</head>

<body>

    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">

                    <a class="navbar-brand" style="text-align: center" href="/">
                        <b class="logo-icon">
                            <img src="{{ asset('/tmpl/plugins/images/logo-icon.png') }}" alt="homepage" />
                        </b>
                    </a>

                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>

                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">


                    <ul class="navbar-nav ms-auto d-flex align-items-center">
                        <li>
                            <span class="text-white font-medium">,
                            </span>

                            <a href="{{ route('logout.admin') }}" class="profile-pic" href="#">
                                Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ route('pendaftaran.index') }}" aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Data Pendaftaran</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ route('info.index') }}" aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Info Pendaftaran</span>
                            </a>
                        </li>


                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>

        <div class="page-wrapper">

            <div class="page-breadcrumb bg-white">
                @yield('head-content')
                <!-- /.col-lg-12 -->
            </div>

            <div class="container-fluid">
                @yield('content')
            </div>

            <footer class="footer text-center"> 2021 © Ample Admin brought to you by <a
                    href="https://www.wrappixel.com/">wrappixel.com</a>
            </footer>

        </div>

    </div>

    <script src="{{ asset('tmpl/plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('tmpl/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('tmpl/js/app-style-switcher.js') }}"></script>
    <script src="{{ asset('tmpl/datatable/js/datatable.js') }}"></script>
    <script src="{{ asset('tmpl/datatable/js/datatable.bs5.js') }}"></script>
    <script src="{{ asset('tmpl/datatable/js/button.js') }}"></script>
    <script src="{{ asset('tmpl/datatable/js/buttonhtml5.js') }}"></script>
    <script src="{{ asset('tmpl/datepicker/datepicker.min.js') }}"></script>
    <script src="{{ asset('tmpl/js/waves.js') }}"></script>
    <script src="{{ asset('tmpl/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('tmpl/js/custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('summernote/summernote-lite.js') }}"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function() {
            $('.table').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copyHtml5',
                    'csvHtml5'
                ]
            });
            $('.datepicker').datepicker({
                format: "yyyy-mm-d"
            });
            $('.summernote').summernote();
        });

    </script>
    @yield('js')
</body>

</html>

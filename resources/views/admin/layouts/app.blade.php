<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta id="token" name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <title>Perpustakaan</title>
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/vendor.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashboard.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css?version=1.0') }}" rel="stylesheet">
    <link href="{{ asset('themify-icons/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/selectize/selectize.css') }}" rel="stylesheet">
    <link href='https://api.mapbox.com/mapbox-gl-js/v0.44.2/mapbox-gl.css' rel='stylesheet' />
    <style type="text/css">
        .mobile-bar-button {
            float: left;
            height: 100%;
            vertical-align: middle;
            padding: 20px;
        }

        .mobile-bar-button i {
            display: block;
            font-size: 20px;
        }

        .btn-delete-multiple {
            transition: all .4s;
            margin-top: -20px;
            opacity: 0;
        }

        .btn-delete-multiple.show {
            margin-top: 0px;
            opacity: 1;
        }

    </style>
</head>

<body class="app">
    <div id='app'>
        <div class="sidebar">
            <div class="sidebar-inner">
                <div class="sidebar-logo">
                    <div class="peers ai-c fxw-nw">
                        <div class="peer peer-greed"><a class="sidebar-link td-n" href="{{ route('admin.index') }}">
                                <div class="peers ai-c fxw-nw">
                                    <div class="peer">
                                        <h5 class="mT-19-point-5 mB-19-point-5 logo-text">Admin Perpustakaan</h5>
                                    </div>
                                </div>
                            </a></div>
                        <div class="peer">
                            <div class="mobile-toggle sidebar-toggle"><a href="#" class="td-n"><i
                                        class="ti-arrow-circle-left"></i></a></div>
                        </div>
                    </div>
                </div>
                <ul class="sidebar-menu scrollable pos-r">
                    <li class="nav-item mT-30 active">
                        <a class="sidebar-link" href="{{ route('admin.index') }}">
                            <span class="title">Dashboard</span>
                        </a>
                    </li>
                    <br />
                    <li class="nav-item active">
                        <a class="sidebar-link" href="{{ route('admin.buku') }}">
                            <span class="title">Buku</span>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="sidebar-link" href="{{ route('admin.perpustakaan') }}">
                            <span class="title">Perpustakaan</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="page-container">
            <div class="header navbar">
                <div class="header-container">
                    <div class="mobile-bar-button">
                        <i class="ti ti-menu"></i>
                    </div>
                    <ul class="nav-right">
                        <li>
                            <a href="{{ url('logout') }}"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                                class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                                <i class="ti-power-off mR-10"></i>
                                <span>Logout</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
            <main class="main-content bgc-grey-100">
                <div id="mainContent">
                    <div class='container-fluid'>
                        @yield('content')
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('js/vendor.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/dashboard.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/selectize/selectize.min.js') }}"></script>
    <script src="{{ asset('vendor/axios.js') }}"></script>
    {{-- <script src='https://api.mapbox.com/mapbox-gl-js/v0.44.2/mapbox-gl.js'></script> --}}
    @yield('scripts')
    @yield('footer-scripts')
    <script type="text/javascript">
        $(".selectize").selectize();

    </script>
    <script type="text/javascript">
        $(".mobile-bar-button").on('click', function () {
            $("body.app").toggleClass('is-collapsed');
        });
        $(".mobile-toggle").click(function () {
            $("body.app").toggleClass('is-collapsed');
        });

    </script>
</body>

</html>

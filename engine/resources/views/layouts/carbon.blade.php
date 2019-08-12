<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Cak Topan Admin</title>
    <link href="{{ asset('vendor/font-awesome/all.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('carbon/css/styles.css') }}">
    @stack('css')
    <style>
        .btn.btn-ipro {
            background-color: #136332;
            color: #fff;
            border-radius: 0;
        }

        .btn.btn-ipro:hover {
            background-color: #0C4020;
        }

        .nav-link.active i {
            color: #8BC34A !important;
        }

    </style>
</head>

<body class="sidebar-fixed header-fixed">
    <div class="page-wrapper">
        <nav class="navbar page-header navbar-dark bg-dark">
            <a href="#" class="btn btn-link sidebar-mobile-toggle d-md-none mr-auto">
                <i class="fa fa-bars"></i>
            </a>

            <a class="navbar-brand" href="#">
                <h4>Cak Topan Admin</h4>
                {{-- <img src="{{ asset('admin/img/logo.png') }}" width="80" alt="logo ipro"> --}}
            </a>

            <a href="#" class="btn btn-link sidebar-toggle d-md-down-none">
                <i class="fa fa-bars"></i>
            </a>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <img src="{{ asset('carbon/imgs/avatar-1.png') }}" class="avatar avatar-sm" alt="logo">
                        <span class="small ml-1 d-md-down-none"></span>
                        {{ auth()->user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item btnLogout">
                            <i class="fa fa-lock"></i> Logout
                        </a>
                        <form class="hidden" id="formLogout" action="{{ url('logout') }}" method="post">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </nav>

        <div class="main-container">
            @include("layouts.sidebar")

            <div class="content">
                @if(@session('info'))
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong><i class="fa fa-info-circle"></i> Success!</strong> {!! @session('info') !!}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif

                @if(@session('error'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong><i class="fa fa-exclamation-circle"></i> Warning!</strong> {{ @session('error') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif

                @if(count($errors) > 0)
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong><i class="fa fa-exclamation-circle"></i> Please correct your input data :</strong>
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif

                @yield('content')
            </div>
        </div>
    </div>
    <script src="{{ asset('carbon/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('carbon/vendor/popper.js/popper.min.js') }}"></script>
    <script src="{{ asset('carbon/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('carbon/vendor/chart.js/chart.min.js') }}"></script>
    <script src="{{ asset('carbon/vendor/sweetalert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('carbon/js/carbon.js') }}"></script>
    <script src="{{ asset('carbon/js/demo.js') }}"></script>
    @stack('js')
    <script>
        $(document).ready(function () {
            $('.btnLogout').on('click', function (e) {
                e.preventDefault();
                $('#formLogout').submit();
            })
        });

    </script>
</body>

</html>

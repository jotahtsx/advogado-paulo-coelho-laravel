<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Advogado Paulo Coelho | Home</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ url(asset('backend/plugins/fontawesome-free/css/all.min.css')) }}">
    <link rel="stylesheet" href="{{ url(asset('backend/css/adminlte.min.css')) }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('backend/img/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('backend/img/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('backend/img/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('backend/img/site.webmanifest') }}">
    <link rel="stylesheet" href="{{ asset('backend/plugins/summernote/summernote-bs4.min.css') }}">


    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.logout') }}">
                        Sair
                    </a>
                </li>
            </ul>
        </nav>

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="{{ route('admin.home') }}" class="brand-link">
                <img src="{{ asset('backend/img/AdminLTELogo.png') }}" alt="Paulo Coelho"
                    class="brand-image elevation-3">
                <span class="brand-text font-weight-light">Paulo Coelho</span>
            </a>

            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="info">
                        <a href="{{ route('admin.home') }}" class="d-block">
                            @php
                                $name = \Illuminate\Support\Facades\Auth::user()->name;
                                echo $name;
                            @endphp
                        </a>
                    </div>
                </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="{{ route('admin.home') }}" class="nav-link {{ isActive('admin.home') }}">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Visão Geral
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.usuarios.index') }}"
                                class="nav-link {{ isActive('admin.usuarios') }}">
                                <i class="nav-icon fas fa-users"></i>
                                <p>Usuários</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.sliders.index') }}"
                                class="nav-link {{ isActive('admin.sliders') }}">
                                <i class="nav-icon fas fa-images"></i>
                                <p>Sliders</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.faq.index') }}" class="nav-link {{ isActive('admin.faq') }}">
                                <i class="nav-icon fas fa-info"></i>
                                <p>FAQ</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <div class="content-wrapper">
            @yield('content')
        </div>
    </div>


    <script src="{{ url(asset('backend/plugins/jquery/jquery.min.js')) }}"></script>
    <script src="{{ url(asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')) }}"></script>
    <script src="{{ url(asset('backend/plugins/jquery.mask.js')) }}"></script>
    <script src="{{ url(asset('backend/plugins/summernote/summernote-bs4.min.js')) }}"></script>
    <script src="{{ url(asset('backend/js/adminlte.min.js')) }}"></script>
    <script src="{{ url(asset('backend/js/scripts.js')) }}"></script>
</body>

</html>

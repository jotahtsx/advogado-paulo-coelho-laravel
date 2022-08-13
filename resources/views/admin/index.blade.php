<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Advogado Paulo Coelho | Entrar</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ url(asset('backend/plugins/fontawesome-free/css/all.min.css')) }}">
    <link rel="stylesheet" href="{{ url(asset('backend/css/adminlte.min.css')) }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontend/images/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend/images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontend/images/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('frontend/images/site.webmanifest') }}">
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body class="hold-transition login-page">

    <div class="ajax_response"></div>

    <div class="login-box">
        <div class="login-logo">
            <a href=""><b>Paulo</b>Coelho</a>
        </div>
        <div class="card">
            <div class="card-body login-card-body">

                <p class="login-box-msg">Faça login no PauloCoelhoAdv</p>

                <form name="login" action="{{ route('admin.login.do') }}" method="post" autocomplete="off">
                    <div class="input-group mb-3">
                        <input type="text" name="email" id="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password_check" id="password_check" class="form-control"
                            placeholder="Senha">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <button class="btn btn-primary btn-block">Entrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ url(asset('backend/plugins/jquery/jquery.min.js')) }}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="{{ url(asset('backend/js/login.js')) }}"></script>
</body>

</html>

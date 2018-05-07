<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        @yield('title', 'Olvi - System')
    </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('layouts.navbar')
        @include('layouts.sidebar')
        <div class="content-wrapper">
            @if (Session::has('mensajeExito'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-check"></i>Registrar usuario</h4>
                    {{ Session::get('mensajeExito') }}
                </div>
            @elseif (Session::has('mensajeError'))
                <div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-warning"></i>Registrar usuario</h4>
                    {{ Session::get('mensajeError') }}
                 </div>
            @endif
            @yield('content')
        </div>
        @include('layouts.footer')
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

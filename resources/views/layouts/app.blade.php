<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Reciclapp</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
    <!-- Font Awesome JS  -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>

    <!-- Styles-->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @yield('header')

</head>

<body>
    <div id="app" class="wrapper">
        @include('layouts.navbar')
        <!-- Page Content  -->
        <div id="content">
            <nav class="navbar navbar-expand-lg  navbar-light bg-light ">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-success">
                        <i class="fas fa-align-left"></i>
                    </button>

                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
                            @yield('navbar-left')
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            <li>
                                <div class="dropleft" style="height: 50px; width: 50px">
                                    <button class="btn btn-secondary w-100 p-0 rounded-circle border border-solid" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{url("/Arreciclar.png")}}" alt="Foto de perfil" class="w-100 h-100 p-0 rounded-circle bg-light">
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item border-solid border-bottom" href="{{url("/configuracion")}}">Configuracion</a>
                                        <a class="dropdown-item" href="{{url("/")}}">Cerrar sesión</a>
                                    </div>
                                  </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <main>
                @yield('content')
                @if (session('success'))
                <div class="modal fade " id="success-modal">
                    <div class="modal-dialog  modal-dialog-centered">
                        <div class="alert alert-success">
                            <!-- Modal Header -->
                            <div class="modal-header text-center">
                                <h1 class="font-weight-bold text-success">Operaci&oacute;n &eacute;xitosa</h1>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <i class="fas fa-check-circle fa-10x"></i>
                                        </div>
                                        <div class="col-md-6 align-self-center">
                                            {{ session('success') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @if (session('danger'))
                <div class="modal fade " id="danger-modal">
                    <div class="modal-dialog  modal-dialog-centered">
                        <div class="alert alert-danger">
                            <!-- Modal Header -->
                            <div class="modal-header text-center">
                                <h1 class="font-weight-bold text-danger">Operaci&oacute;n err&oacute;nea</h1>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <i class="fas fa-times-circle fa-10x"></i>
                                        </div>
                                        <div class="col-md-6 align-self-center">
                                            {{ session('danger') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </main>
        </div>
    </div>
    <!-- jQuery CDN  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    @if (session('success'))
    <script>
        $(document).ready(function () {
            $('#success-modal').modal('show');
        });

    </script>
    @endif
    @if (session('danger'))
    <script>
        $(document).ready(function () {
            $('#danger-modal').modal('show');
        });

    </script>
    @endif
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            })
        });

    </script>
    <script src="/js/app.js"></script>
</body>

</html>

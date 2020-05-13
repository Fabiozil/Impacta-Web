<!-- para todas las vistas que dnecesiten del navbar poner el extends de aqui -->
<!-- y poner section content para agregar las otras cosas de la pagina -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title')</title>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container" style="height: 100vh;">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/recicladores') }}">
                    {{ config('app.name', 'Impacta') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="row" style="height: 100%;">
            <div class="col-2" style="height: 100%; background-color:  #cccccc;">
                <div class="row align-items-center" style="height: 100%;">
                    <ul class="nav flex-column" style="background-color: #cccccc;"  > 
                        <li class="nav-item"> 
                        <a class="nav-link active" href="recicladores"> 
                            <img src="/icons/user.png" class="rounded-circle" id="nav-img-selected" alt="Mis recicladores"> 
                        </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="Mapa">
                            <img src="/icons/map.png" class="rounded-circle" id="nav-img" alt="Mi comunidad"> 
                        </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">
                            <img src="/icons/chat.png" class="rounded-circle" id="nav-img" alt="Social"> 
                        </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="HistorialMediciones">
                                <img src="/icons/stats.png" class="rounded-circle" id="nav-img" alt="Indicadores ambientales"> 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img src="/icons/gear.png" class="rounded-circle" id="nav-img" alt="Opciones"> 
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-10" style="background-color: #f2f2f2; height: 100%;">
                @yield('conteint')
            </div>
        </div>
    </div>
    <script src='/js/app.js'></script>
</body>

</html>

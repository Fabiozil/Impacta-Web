<!-- para todas las vistas que dnecesiten del navbar poner el extends de aqui -->
<!-- y poner section content para agregar las otras cosas de la pagina -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title')</title>
    <link rel="stylesheet" href='/css/app.css'>
    @yield('head')
</head>

<body>
    <div class="container" style="height: 100vh;">
        <div class="row" style="height: 100%;">
            <div class="col-2" style="height: 100%; background-color:  #cccccc;">
                <div class="row align-items-center" style="height: 100%;">
                    <ul class="nav flex-column" style="background-color: #cccccc;"  > 
                        <li class="nav-item"> 
                        <a class="nav-link active" href="#"> 
                            <img src="/icons/user.png" class="rounded-circle" id="nav-img-selected" alt="Mis recicladores"> 
                        </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">
                            <img src="/icons/map.png" class="rounded-circle" id="nav-img" alt="Mi comunidad"> 
                        </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">
                            <img src="/icons/chat.png" class="rounded-circle" id="nav-img" alt="Social"> 
                        </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
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
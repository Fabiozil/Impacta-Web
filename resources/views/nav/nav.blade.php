<!-- para todas las vistas que dnecesiten del navbar poner el extends de aqui -->
<!-- y poner section content para agregar las otras cosas de la pagina -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="container" style="height: 100vh;">
    @yield('conteint')
        <div class="row" style="height: 100%;">
            <div class="col-2" style="height: 100%; background-color:  #cccccc;">
                <div class="row align-items-center" style="height: 100%;">
                    <ul class="nav flex-column" style="background-color: #cccccc;"  > 
                        <li class="nav-item"> 
                        <a class="nav-link active" href="#"> 
                            <img src="img.jpg" class="rounded-circle" alt="Mis recicladores" style="max-height: 100%;max-width: 100%;"> 
                        </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">
                            <img src="img.jpg" class="rounded-circle" alt="Mi comunidad" style="max-height: 90%;max-width: 90%;"> 
                        </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">
                            <img src="img.jpg" class="rounded-circle" alt="Social" style="max-height: 90%;max-width: 90%;"> 
                        </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img src="img.jpg" class="rounded-circle" alt="Indicadores ambientales" style="max-height: 90%;max-width: 90%;"> 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img src="img.jpg" class="rounded-circle" alt="Opciones" style="max-height: 90%;max-width: 90%;"> 
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-10" style="background-color: #f2f2f2; height: 100%;">
            </div>
        </div>
    </div>
</body>

</html>

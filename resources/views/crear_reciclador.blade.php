<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reciclador</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="container" style="height: 100vh;">
        <div class="row" style="height: 100%;">
            <div class="col-2" style="height: 100%; background-color:  #cccccc;">
                <div class="row" style="margin: 10px;">
                    <a href="vista_crear_reciclador.html" style="width: 100%;">
                        <button class="btn btn-light" style="width: 100%;">Atras</button>
                    </a>  
                </div>
            </div>
            <div class="col-10" style="background-color: #f2f2f2; height: 100%;">
                <div class="row" style="height: 100%;">
                    <div class="col-3" style="height: 100%;">
                        <div class="container" style="background-color: white; height: 90%; margin: 20px; border-radius: 10px;">
                            <div class="row align-items-center" style="height: 100%;">
                                <div class="container">
                                <img src="img.jpg" alt="Indicadores ambientales" style="height: 25vh;;max-width: 100%;"> 
                                <p>Selecciona una imagen</p>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                    </div>
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                      <label class="custom-file-label" for="inputGroupFile01">Archivo</label>
                                    </div>
                                  </div>
                                <p>Capacidad maxima: 2mB</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-9"> 
                        <div class="row align-items-center" style="background-color: white; height: 90%; margin: 20px; border-radius: 10px;">
                            <div class="col-12">
                                <h1 style="color: #009900; text-align: center; width: 100%;;">Ingresa un nuevo reciclador</h1>
                                <h2 style="text-align: center; width: 100%;">Datos personales</h2>
                                <form>
                                    <div class="form-group">
                                        <label for="">Nombre:</label>
                                        <input type="email" class="form-control" id="nombre">
                                        <label for="">Apellido:</label>
                                        <input type="email" class="form-control" id="apellido">
                                        <label for="">Apodo:</label>
                                        <input type="email" class="form-control" id="apodo">
                                        <label for="">Edad:</label>
                                        <input type="email" class="form-control" id="edad">
                                        <label for="">Celular:</label>
                                        <input type="email" class="form-control" id="celular">
                                    </div>
                                </form>                                   
                                <a href="/crear_reciclador_2">
                                    <button type="submit" class="btn btn-light">Continuar</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

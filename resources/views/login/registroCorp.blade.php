<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro corporacion</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="container" style="height: 100vh;">
        <div class="row" style="height: 100%;">
            <div class="col-2" style="height: 100%; background-color:  #cccccc;">
                <div class="row" style="margin: 10px;">
                    <a href="vista_crear_reciclador.html" style="width: 100%;">
                        <button class="btn btn-light" style="width: 100%;">volver</button>
                    </a>  
                </div>
            </div>
            <div class="col-10" style="background-color: #f2f2f2; height: 100%;">
                <div class="row" style="height: 100%;">
                    <div class="col-3" style="height: 100%;">
                        <div class="container" style="background-color: white; height: 90%; margin: 20px; border-radius: 10px;">
                            <div class="row align-items-center" style="height: 100%;">
                                <div class="container">
                                <img src="" alt="Logo corporacion" style="height: 25vh;;max-width: 100%;"> 
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                    </div>
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                      <label class="custom-file-label" for="inputGroupFile01">Selecciona una imagen</label>
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
                                <h1 style="color: #009900; text-align: center; width: 100%;;">Asocia tu corporacion</h1>
                                <div class="ContentForm">
                                    <form action="" method="post" name="FormEntrar">
                                        <label for="">Razon social</label>  
                                        <input type="RS" class="form-control" name="RS" id="RS" placeholder="Escribe la razon social de tu empresa"aria-describedby="sizing-addon1" required>
                                        <br>
                                        <label for="">Tipo de documento</label>
                                        <input type="doc" name="doc" class="form-control" placeholder="Numero del documento" aria-describedby="sizing-addon1" required>
                                        <br>
                                        <label for="">Telefono o celular</label>
                                        <input type="cel" name="cel" class="form-control" placeholder="ej:12345678" aria-describedby="sizing-addon1" required>
                                        <br>
                                        <label for="">Correo electronico</label>
                                        <input type="email" name="email" class="form-control" placeholder="ej:correo@empresa.com" aria-describedby="sizing-addon1" required>
                                        <br>
                                        <label for="">ubicacion en el mapa</label>
                                        <!-- <input type="cel" name="cel" class="form-control" placeholder="ej:12345678" aria-describedby="sizing-addon1" required> -->
                                        <br>

                                        <h2 style="color: #009900; text-align: center; width: 100%;">Informacion sobre tu corporacion</h2>
                                        <label for="">Quienes somos?</label>
                                        <input type="somos" name="somos" class="form-control" placeholder="Descripcion breve" aria-describedby="sizing-addon1" required>
                                        <br>
                                        
                                        <div class="col-7">
                                        <lavel for="">Residuos que recolecto</lavel>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-outline-secondary" type="button"
                                                    id="boton_agregar_residuo"
                                                    onclick="agregar_residuo()">Agregar residuo</button>
                                            </div>
                                            <input type="text" class="form-control" id="residuo" placeholder="ej: Plastico">
                                        </div>
                                        <br>
                                        <div class= "row">
                                        <label for="">Horario de atencion</label>


                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-outline-secondary" type="button"
                                                    id="boton_agregar_residuo"
                                                    onclick="agregar_horario()">Agregar Horario</button>
                                            </div>
                                            <div class="col-8">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <p>Días:</p>
                                                        <input type="text" class="form-control" id="dia" placeholder="Lunes-Viernes">
                                                        <ul class="list-group list-group-flush" id="lista_dias"></ul>
                                                    </div>
                                                    <div class="col-4">
                                                        <p>Horas:</p>
                                                        <input type="text" class="form-control" id="hora" placeholder="8:00am - 5:00pm">
                                                        <ul class="list-group list-group-flush" id="lista_horas"></ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="list-group list-group-flush" id="lista_residuos"></ul>
                                            </div>
                                        </div>
                                            <button class="btn btn-lg btn-primary btn-block btn-signin" id="registro" type="registro" ><a href="/RegistroAse">Seguir con el registro de la corporacion</a></button>
                                        </div>
                                    </div>
                                </form>
                            </div>	                            
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

@extends('layouts.app')


@section('content')
<div class="py-5 text-center titulo h-25">
    <h1 class="text-primary">Editar reciclador</h1>
    <p class="lead">Utiliza los campos a continuación para editar el perfil de tu reciclador.  Para confirmar tus cambios por favor presiona el botón de aceptar al final de la página.</p>
</div>
<div class="row h-75">
    <div class="container">
        <div class="row h-100"">
            <div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 h-100"">
                <div class="row h-100">
                    <div class="container cont-rec">
                        <div class="row h-100">
                            <div class="col-sm-12">
                                <div class="py-5 text-center ">
                                    <h4>Perfil</h4>
                                </div>
                                <div class="h-25">
                                    {{--<img src="/icons/user.png" alt="Imagen perfil"
                                        class="h-100 w-100"> --}}
                                    <i class="fas fa-user user-icon rounded mx-auto d-block"></i>
                                </div>
                                <h5 class="pb-2 pt-3">Apodo :</h5>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                <h5 class="pb-2 pt-3">Nombre :</h5>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                <h5 class="pb-2 pt-3">Edad :</h5>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                <h5 class="pb-2 pt-3">Cel :</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12">
                <div class="row h-100">
                    <div class="container overflow-auto cont-rec">
                        <div class="col-sm-12">
                            <h5 class="mb-2 mt-2">Mi historia</h5>
                            <form class="mb-2">
                                <div class="input-group">
                                    <textarea class="form-control"></textarea>
                                </div>
                            </form>
                            <h5 class="mt-3 mb-2">Materiales que recicla:</h5>
                            <div class="input-group">
                                <select class="custom-select" id="residuo"
                                    aria-label="Example select with button addon">
                                    <option selected>Plástico</option>
                                    <option value="Metales">Metales</option>
                                    <option value="Papel">Papel</option>
                                    <option value="Cartón">Cartón</option>
                                    <option value="Vidrio">Vidrio</option>
                                    <option value="Tetrapak">Tetrapak</option>
                                </select>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-primary" type="button"
                                        id="boton_agregar_residuo" onclick="agregar_residuo()">Agregar
                                    </button>
                                    <button class="btn btn-outline-danger" type="button"
                                        id="boton_eliminar_residuo" onclick="eliminar_residuo()">Eliminar
                                    </button>
                                </div>
                            </div>
                            <ul class="list-group list-group-flush mt-2" id="lista_residuos">
                            </ul>
                            <h5 class="mt-3 mb2">Agregar nueva zona de recoleccion</h5>
                            <div class="row mb-2">
                                <div class="col-xl-12 m-1">
                                    <div class="row w-100">
                                        <div class="col-xl-6 col-lg-6 col-md-12">
                                            <div class="input-group mt-1">
                                                <select class="custom-select" id="comuna"
                                                    aria-label="Example select with button addon">
                                                    <option selected>Municipio</option>
                                                    <option value="Comuna 1">Comuna 1</option>
                                                    <option value="Comuna 2">Comuna 2</option>
                                                    <option value="Comuna 3">Comuna 3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12">
                                            <div class="input-group mt-1">
                                                <select class="custom-select" id="comuna"
                                                    aria-label="Example select with button addon">
                                                    <option selected>Comuna</option>
                                                    <option value="Comuna 1">Comuna 1</option>
                                                    <option value="Comuna 2">Comuna 2</option>
                                                    <option value="Comuna 3">Comuna 3</option>
                                                </select>
                                                {{--                                                     <div class="input-group-append">
                                                    <button type="submit" class="btn btn-outline-primary"
                                                        onclick="agregar_comuna()">Agregar
                                                    </button>
                                                    <button type="submit" class="btn btn-outline-danger"
                                                        onclick="eliminar_comuna()">Eliminar</button>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-3 col-lg-12 col-md-12">
                                    <p>Barrios:</p>
                                    <div class="input-group">
                                        <select class="custom-select" id="barrio"
                                            aria-label="Example select with button addon">
                                            <option selected>Choose...</option>
                                            <option value="Barrio 1">Barrio 1</option>
                                            <option value="Barrio 2">Barrio 2</option>
                                            <option value="Barrio 3">Barrio 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-9 col-lg-12 col-md-12">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-5 col-md-12">
                                            <p>Día:</p>
                                            <div class="input-group">
                                                <select class="custom-select" id="dia"
                                                    aria-label="Example select with button addon">
                                                    <option selected>Lunes</option>
                                                    <option value="Martes">Martes</option>
                                                    <option value="Miercoles">Miercoles</option>
                                                    <option value="Jueves">Jueves</option>
                                                    <option value="Viernes">Viernes</option>
                                                    <option value="Sabado">Sabado</option>
                                                    <option value="Domingo">Domingo</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-7 col-md-12">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-6 col-md-12 pr-1">
                                                    <p>Inicio:</p>
                                                    <div class="input-group">
                                                        <select class="custom-select" id="hora-inicio"
                                                            aria-label="Example select with button addon">
                                                            <option selected>Inicio</option>
                                                            <option value="5:00">5:00</option>
                                                            <option value="6:00">6:00</option>
                                                            <option value="7:00">7:00</option>
                                                            <option value="8:00">8:00</option>
                                                            <option value="9:00">9:00</option>
                                                            <option value="10:00">10:00</option>
                                                            <option value="11:00">11:00</option>
                                                            <option value="12:00">12:00</option>
                                                            <option value="13:00">13:00</option>
                                                            <option value="14:00">14:00</option>
                                                            <option value="15:00">15:00</option>
                                                            <option value="16:00">16:00</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-12 pr-0">
                                                    <p>Fin:</p>
                                                    <div class="input-group">
                                                        <select class="custom-select" id="hora-fin"
                                                            aria-label="Example select with button addon">
                                                            <option selected>Fin</option>
                                                            <option value="7:00">7:00</option>
                                                            <option value="8:00">8:00</option>
                                                            <option value="9:00">9:00</option>
                                                            <option value="10:00">10:00</option>
                                                            <option value="11:00">11:00</option>
                                                            <option value="12:00">12:00</option>
                                                            <option value="13:00">13:00</option>
                                                            <option value="14:00">14:00</option>
                                                            <option value="15:00">15:00</option>
                                                            <option value="16:00">16:00</option>
                                                            <option value="17:00">17:00</option>
                                                            <option value="18:00">18:00</option>
                                                            <option value="19:00">19:00</option>
                                                            <option value="20:00">20:00</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row m-1">
                                <div class="col-sm-3 p-0">
                                    <p class="text-center">Barrios:</p>
                                    <ul class="list-group list-group-flush mb-2" id="lista_barrios">
                                    </ul>
                                </div>
                                <div class="col-sm-4 p-0">
                                    <p class="text-center">Dias:</p>
                                    <ul class="list-group list-group-flush mb-2" id="lista_dias">
                                    </ul>
                                </div>
                                <div class="col-sm-5 p-0">
                                    <p class="text-center">Horas:</p>
                                    <ul class="list-group list-group-flush mb-2" id="lista_horas">
                                    </ul>
                                </div>
                                <div class="col-sm-12">
                                    <div class="row justify-content-end">
                                        <button class="btn btn-primary m-1" type="button" id="boton_agregar_barrio"
                                            onclick="agregar_barrio()">Agregar</button>                                            
                                        <button type="submit" class="btn btn-danger m-1"
                                        onclick="eliminar_barrio()">Eliminar barrio</button>
                                    </div>
                                </div>
                        </div>
                            <h5>Usuarios asignados</h5>
                            <ul class="list-group list-group-flush mb-2" id="usuarios_asignados">
                            </ul>
                            <p class="lead mt-3">Cantidad de usuarios asignados : X</p>
                            <div class="row justify-content-end">
                                <a href="{{ url('/confirmar_edicion') }}">
                                    <button type="submit" class="btn btn-primary mr-2 mb-2">Aceptar</button>
                                </a>
                                <a href="{{ url('/recicladores') }}">
                                    <button type="submit" class="btn btn-danger mb-2">Cancelar</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    
<script>
    window.addEventListener("load", function (event) {
        var lista_barrios = document.getElementById("lista_barrios");
        var lista_dias = document.getElementById("lista_dias");
        var lista_horas = document.getElementById("lista_horas");
        while (lista_barrios.childNodes.length != 0) {
            lista_barrios.removeChild(lista_barrios.childNodes[lista_barrios.childNodes.length - 1]);
            lista_dias.removeChild(lista_dias.childNodes[lista_dias.childNodes.length - 1]);
            lista_horas.removeChild(lista_horas.childNodes[lista_horas.childNodes.length - 1]);
        }
        console.log("Lista limpiada");
    });
</script>

<script>


    function eliminar_comuna() {
        var lista = document.getElementById("lista_comunas_barrios");
        lista.removeChild(lista.childNodes[lista.childNodes.length - 1]);
    }

    function agregar_residuo() {
        var residuo = document.getElementById("residuo").value;
        var lista = document.getElementById("lista_residuos");
        var nodo_lista = document.createElement("LI");
        var residuo_lista = document.createTextNode(residuo);
        nodo_lista.appendChild(residuo_lista);
        nodo_lista.className = "list-group-item";
        lista.appendChild(nodo_lista);
    }

    function eliminar_residuo() {
        var lista = document.getElementById("lista_residuos");
        lista.removeChild(lista.childNodes[lista.childNodes.length - 1]);
    }

    function eliminar_barrio() {
        var lista_barrios = document.getElementById("lista_barrios");
        var lista_horas = document.getElementById("lista_horas");
        var lista_dias = document.getElementById("lista_dias");
        lista_barrios.removeChild(lista_barrios.childNodes[lista_barrios.childNodes.length - 1]);
        lista_horas.removeChild(lista_horas.childNodes[lista_horas.childNodes.length - 1]);
        lista_dias.removeChild(lista_dias.childNodes[lista_dias.childNodes.length - 1]);
    }

    function agregar_barrio() {
        var barrio = document.getElementById("barrio").value;
        var hora = document.getElementById("hora").value;
        var dia = document.getElementById("dia").value;
        var lista_barrios = document.getElementById("lista_barrios");
        var lista_horas = document.getElementById("lista_horas");
        var lista_dias = document.getElementById("lista_dias");
        var nodo_lista_barrio = document.createElement("LI");
        var nodo_lista_hora = document.createElement("LI");
        var nodo_lista_dia = document.createElement("LI");
        var barrio_lista = document.createTextNode(barrio);
        var hora_lista = document.createTextNode(hora);
        var dia_lista = document.createTextNode(dia);
        nodo_lista_barrio.className = "list-group-item";
        nodo_lista_hora.className = "list-group-item";
        nodo_lista_dia.className = "list-group-item";
        nodo_lista_barrio.appendChild(barrio_lista);
        nodo_lista_hora.appendChild(hora_lista);
        nodo_lista_dia.appendChild(dia_lista);
        lista_barrios.appendChild(nodo_lista_barrio);
        lista_horas.appendChild(nodo_lista_hora);
        lista_dias.appendChild(nodo_lista_dia);
    }

</script>
@endsection

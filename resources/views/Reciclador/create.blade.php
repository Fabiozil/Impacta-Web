@extends('layouts.app')

@section('content')
<div class="container">
    <div class="py-5 text-center titulo">
        <h1 class="text-primary">Ingresar nuevo reciclador</h1>
        <p class="lead">Utiliza los campos a continuación para ingresar la información necesaria para crear nuevo
            reciclador
            en el sistema. Para confirmar tus cambios por favor presiona el botón de aceptar al final de la página.</p>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-12 borde-derecha h-100">
                    <div class="row h-100">
                        <div class="container h-80 cont-rec">
                            <div class="row">
                                <div class="col-xl-12 h-100">
                                    <div class="container">
                                        <div class="py-5 text-center subtitle">
                                            <h2>Mi perfil</h2>
                                        </div>
                                        {{-- <img src="/icons/user.png" alt="Imagen perfil" style="height: 100%;;max-width: 100%;"> --}}
                                        <i class="fas fa-user user-icon center-img"></i>
                                        <p class="mt-5">Carga una foto de perfil para tu reciclador.</p>
                                        <div class="input-group ">
                                            <div class="input-group-prepend">
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="inputGroupFile01"
                                                    aria-describedby="inputGroupFileAddon01">
                                                <label class="custom-file-label" for="inputGroupFile01">Archivo</label>
                                            </div>
                                        </div>
                                        <p>Capacidad maxima: 2mb</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-12 borde-derecha h-100">
                    <div class="row h-100">
                        <div class="container cont-rec h-95">
                            <div class="row h-100">
                                <div class="col-xl-12">
                                    <div class="py-5 subtitle">
                                        <h2>Mis datos personales</h2>
                                        <p class="lead"> Utiliza los campos a continuación para ingresar la información
                                            referente a
                                            los datos personales del nuevo reciclador.</p>
                                    </div>
                                    <div class="container cont-rec-nf m-0">
                                        <form>
                                            <div class="form-group w-100">
                                                <div class="form-group row">
                                                    <label for="inputPassword"
                                                        class="col-sm-2 col-form-label">Nombre</label>
                                                    <div class="col-sm-10">
                                                        <input type="password" class="form-control" id="inputPassword"
                                                            placeholder="James David">
                                                        <small id="emailHelp" class="form-text text-muted">Registra el
                                                            primer y segundo nombre (si aplica) de tu reciclador como en
                                                            el ejemplo.
                                                        </small>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputPassword"
                                                        class="col-sm-2 col-form-label">Apellido</label>
                                                    <div class="col-sm-10">
                                                        <input type="password" class="form-control" id="inputPassword"
                                                            placeholder="Rodriguez Rubio">
                                                        <small id="emailHelp" class="form-text text-muted">Registra el
                                                            apellido teniendo en cuenta el uso de mayúsculas y buena
                                                            ortografía.</small>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputPassword"
                                                        class="col-sm-2 col-form-label">Apodo</label>
                                                    <div class="col-sm-10">
                                                        <input type="password" class="form-control" id="inputPassword"
                                                            placeholder="James">
                                                        <small id="emailHelp" class="form-text text-muted">Si tu reciclador prefiere ser llamado por su apodo por favor ingresa el apodo correspondiente.</small>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputPassword"
                                                        class="col-sm-2 col-form-label">Edad</label>
                                                    <div class="col-sm-10">
                                                        <input type="password" class="form-control" id="inputPassword"
                                                            placeholder="28">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputPassword"
                                                        class="col-sm-2 col-form-label">Celular</label>
                                                    <div class="col-sm-10">
                                                        <input type="password" class="form-control" id="inputPassword"
                                                            placeholder="1234567899">
                                                        <small id="emailHelp" class="form-text text-muted">Registra los diez dígitos del número celular de tu reciclador sin espacios intermedios. P. ej. 3041112233</small>

                                                    </div>
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
    </div>
    <div class="row">
        <div class="col-xl-7 col-lg-12 col-md-12 borde-derecha">
            <div class="row h-100">
                <div class="container cont-rec m-100">
                    <div class="col-xl-12">
                        <div class="py-5 subtitle">
                            <h2>Mi labor</h2>
                            <p class="lead">Utiliza los campos a continuación para ingresar la información referente a
                                los materiales que recolecta el reciclador y a las zonas y horarios en que trabaja.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="container cont-rec-nf">
                            <div class="col-xl-12 h-100">
                                <div class="row align-items-center">
                                    <div class="col-xl-12">
                                        <h5>Materiales que recolecto</h5>
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
                                    </div>
                                </div>
                                <h5>Zonas de recoleccion</h5>
                                <div class="row">
                                    <div class="col-xl-12 m-1">
                                        <div class="row w=100">
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

                                {{--                                 <div class="row" style="max-height: 300px; overflow-x: hidden; overflow-y: auto">
                                    <div class="col-xl-12">
                                        <div class="row"
                                            style="max-height: 300px; overflow-x: hidden; overflow-y: auto">
                                            <div class="col-xl-4">
                                                <p id="col-list">Comuna:</p>
                                            </div>
                                            <div class="col-xl-4">
                                                <p id="col-list">Barrio:</p>
                                            </div>
                                            <div class="col-xl-2">
                                                <p id="col-list">Dia:</p>
                                            </div>
                                            <div class="col-xl-2">
                                                <p id="col-list">Hora:</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <ul class="list-group list-group-flush" id="lista_comunas_barrios"
                                                style="width: 100%; margin-bottom: 5px;">
                                            </ul>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-5 col-lg-12 col-md-12">
            <div class="row h-100">
                <div class="col-xl-12">
                    <div class="row borde-derecha">
                        <div class="container cont-rec h-100">
                            <div class="py-5 subtitle">
                                <h2>Mi historia</h2>
                                <p class="lead">Utiliza el campo de texto a continuación para ingresar la historia de tu
                                    nuevo reciclador.</p>
                                    
                            </div>
                            <div class="container h-100">
                                <form>
                                    <div class="input-group h-100">
                                        <textarea class="form-control" rows="15" placeholder="Historia"></textarea>
                                        <small id="emailHelp" class="form-text text-muted">Aquí te damos cinco consejos para que crees la historia de tu reciclador:
                                            1. Describe características demográficas como su lugar de procedencia. 
                                            2. Menciona el tiempo que lleva dedicado a su profesión. 
                                            3. Menciona una razón de trasfondo diferente a obtener un ingreso económico por la cual tu reciclador realiza su labor.
                                            4. Comunicar ¿cómo la comunidad puede aportar a facilitar su trabajo?
                                            5.Transmitir el impacto que tiene la ayuda de la comunidad en la vida del reciclador.
                                        </small>
                                    </div>
                                </form>
                            </div>
                            {{--                             <a href="{{ url('/recicladores') }}">
                            <button type="submit" class="btn btn-danger" style="margin-bottom: 10px ; position: relative;
                                float: right;">Cancelar</button>
                            </a> --}}
                            <div class="row align-items-center justify-content-end">
                                <div class="row-xl-12">
                                    <a href="{{ url('/exito_crear') }}">
                                        <button type="submit" class="btn btn-success m-2">Registrar</button>
                                    </a>
                                </div>
                            </div>

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
    function limpiar_lista() {
        var lista_barrios = document.getElementById("lista_barrios");
        var lista_dias = document.getElementById("lista_dias");
        var lista_horas = document.getElementById("lista_horas");
        while (lista_barrios.childNodes.length != 0) {
            lista_barrios.removeChild(lista_barrios.childNodes[lista_barrios.childNodes.length - 1]);
            lista_dias.removeChild(lista_dias.childNodes[lista_dias.childNodes.length - 1]);
            lista_horas.removeChild(lista_horas.childNodes[lista_horas.childNodes.length - 1]);
        }
        console.log("Lista limpiada");
    }

    function agregar_comuna() {
        var lista_comunas_barrios = document.getElementById("lista_comunas_barrios");
        var nueva_fila = document.createElement("DIV");
        var nueva_fila_barrios = document.createElement("DIV")
        var nueva_col_comunas = document.createElement("DIV");
        var nueva_col_barrios = document.createElement("DIV");
        var nueva_col_barrios_barrios = document.createElement("DIV");
        var nueva_col_dias = document.createElement("DIV");
        var nueva_col_horas = document.createElement("DIV");
        var nueva_lista_comunas = document.createElement("UL");
        var nueva_lista_barrios = document.createElement("UL");
        var nueva_lista_dias = document.createElement("UL");
        var nueva_lista_horas = document.createElement("UL");
        var nodo_lista = document.createElement("LI");

        nueva_lista_comunas.className = "list-group list-group-flush";
        nueva_lista_barrios.className = "list-group list-group-flush";
        nueva_lista_dias.className = "list-group list-group-flush";
        nueva_lista_horas.className = "list-group list-group-flush";
        nodo_lista.className = "list-group-item"
        nueva_fila.className = "row";
        nueva_fila_barrios.className = "row";
        nueva_col_barrios.className = "col-12 p-0";
        nueva_col_comunas.className = "col-4 p-0";
        nueva_col_barrios.className = "col-8 p-0";
        nueva_col_barrios_barrios.className = "col-5 p-0"
        nueva_col_dias.className = "col-3 p-0";
        nueva_col_horas.className = "col-4 p-0";


        nueva_col_barrios_barrios.appendChild(nueva_lista_barrios);
        nueva_col_dias.appendChild(nueva_lista_dias);
        nueva_col_horas.appendChild(nueva_lista_horas)
        nueva_fila_barrios.appendChild(nueva_col_barrios_barrios);
        nueva_fila_barrios.appendChild(nueva_col_dias);
        nueva_fila_barrios.appendChild(nueva_col_horas);
        nueva_col_barrios.appendChild(nueva_fila_barrios);
        nueva_col_comunas.appendChild(nueva_lista_comunas);
        nueva_fila.appendChild(nueva_col_comunas);
        nueva_fila.appendChild(nueva_col_barrios);
        nodo_lista.appendChild(nueva_fila);
        lista_comunas_barrios.appendChild(nodo_lista);

        var comuna = document.getElementById("comuna").value;
        comuna.value = "";
        var texto_nodo_comuna = document.createTextNode(comuna);
        var nodo_comuna = document.createElement("LI");
        nodo_comuna.className = "list-group-item";
        nodo_comuna.appendChild(texto_nodo_comuna);
        nueva_lista_comunas.appendChild(nodo_comuna);

        var lista_barrios = document.getElementById("lista_barrios");
        var lista_dias = document.getElementById("lista_dias");
        var lista_horas = document.getElementById("lista_horas");
        var texto_nodo_barrio;
        var texto_nodo_dias;
        var texto_nodo_horas;
        for (var i = 0; i < lista_barrios.childNodes.length; i++) {
            var nodo_barrio = document.createElement("LI");
            var nodo_dia = document.createElement("LI");;
            var nodo_hora = document.createElement("LI");;
            nodo_barrio.className = "list-group-item";
            nodo_dia.className = "list-group-item";
            nodo_hora.className = "list-group-item";
            texto_nodo_barrio = lista_barrios.childNodes[i].childNodes[0];
            texto_nodo_dias = lista_dias.childNodes[i].childNodes[0];
            texto_nodo_horas = lista_horas.childNodes[i].childNodes[0];
            nodo_barrio.appendChild(texto_nodo_barrio);
            nodo_dia.appendChild(texto_nodo_dias);
            nodo_hora.appendChild(texto_nodo_horas);
            nueva_lista_barrios.appendChild(nodo_barrio);
            nueva_lista_dias.appendChild(nodo_dia);
            nueva_lista_horas.appendChild(nodo_hora);
        }
        while (lista_barrios.childNodes.length != 0) {
            lista_barrios.removeChild(lista_barrios.childNodes[lista_barrios.childNodes.length - 1]);
            lista_dias.removeChild(lista_dias.childNodes[lista_dias.childNodes.length - 1]);
            lista_horas.removeChild(lista_horas.childNodes[lista_horas.childNodes.length - 1]);
        }
    }

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
        var hora_inicio = document.getElementById("hora-inicio").value;
        var hora_fin = document.getElementById("hora-fin").value;
        var hora = hora_inicio + "-" + hora_fin;
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
        nodo_lista_barrio.className = "list-group-item text-center";
        nodo_lista_hora.className = "list-group-item text-center";
        nodo_lista_dia.className = "list-group-item text-center";
        nodo_lista_barrio.appendChild(barrio_lista);
        nodo_lista_hora.appendChild(hora_lista);
        nodo_lista_dia.appendChild(dia_lista);
        lista_barrios.appendChild(nodo_lista_barrio);
        lista_horas.appendChild(nodo_lista_hora);
        lista_dias.appendChild(nodo_lista_dia);
    }

</script>
@endsection

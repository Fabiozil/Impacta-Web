@extends('layouts.app')


@section('content')
<div class="py-5 text-center" style="height: 20%">
    <h1>Editar reciclador</h1>
    <p class="lead">Realice los cambios necesarios y para confirmarlos presione editar</p>
</div>
<div class="row" style="height: 80%;">
    <div class="container">
        <div class="row" style="height: 100%;">
            <div class="col-3" style="height: 100%;">
                <div class="row" style="height: 100%">
                    <div class="container" id='contenedor-formulario'>
                        <div class="row " style="height: 100%">
                            <div class="col-12">
                                <div class="py-5 text-center" style="height: 20%">
                                    <h3>Perfil</h3>
                                </div>
                                <div style="height:25vh">
                                    <img src="/icons/user.png" alt="Imagen perfil"
                                        style="height: 100%;;max-width: 100%;">
                                </div>
                                <div class="py-5 text-center" style="height: 20%">
                                    <p class="lead">Apodo</p>
                                    <p class="lead">Nombre</p>
                                    <p class="lead">Edad</p>
                                    <p class="lead">Cel:</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-9">
                <div class="row" style="height: 100%">
                    <div class="container" id="contenedor-formulario" style="overflow: auto">
                        <div class="col-12">
                            <h5>Mi historia</h5>
                            <form style="margin-bottom: 15px">
                                <div class="input-group">
                                    <textarea class="form-control"></textarea>
                                </div>
                            </form>
                            <h5>Materiales que recicla:</h5>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button class="btn btn-outline-secondary" type="button"
                                        id="boton_agregar_residuo" onclick="agregar_residuo()">Agregar
                                    </button>
                                </div>
                                <input type="text" class="form-control" id="residuo">
                            </div>
                            <ul class="list-group list-group-flush" id="lista_residuos">
                            </ul>
                            <button type="submit" class="btn btn-light" onclick="eliminar_residuo()"
                                style="margin-bottom: 5px;">Eliminar residuo</button>
                            <h5>Zonas de recoleccion</h5>
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-4">
                                            <p id="col-list">Comuna:</p>
                                        </div>
                                        <div class="col-4">
                                            <p id="col-list">Barrio:</p>
                                        </div>
                                        <div class="col-2">
                                            <p id="col-list">Dia:</p>
                                        </div>
                                        <div class="col-2">
                                            <p id="col-list">Hora:</p>
                                        </div>
                                    </div>
                                    <ul class="list-group list-group-flush" id="lista_comunas_barrios"
                                        style="width: 100%; margin-bottom: 5px;">
                                    </ul>
                                    <button type="submit" class="btn btn-light" onclick="eliminar_comuna()"
                                        style="margin-right: 5px;">Eliminar comuna</button>
                                </div>
                            </div>
                            <h5>Agregar nueva zona de recoleccion</h5>
                            <div class="row">
                                <div class="col-5">
                                    <p>Comuna en la que recolecto:</p>
                                    <input type="text" class="form-control" id="comuna">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5">
                                    <p>Barrios en los que recolecto:</p>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-secondary" type="button"
                                                id="boton_agregar_barrio" onclick="agregar_barrio()">Agregar</button>
                                        </div>
                                        <input type="text" class="form-control" id="barrio">
                                    </div>
                                    <ul class="list-group list-group-flush" id="lista_barrios">
                                    </ul>
                                    <button type="submit" class="btn btn-light" onclick="eliminar_barrio()"
                                        style="margin-bottom: 5px;">Eliminar barrio</button>
                                    <button type="submit" class="btn btn-light" onclick="agregar_comuna()"
                                        style="margin-bottom: 5px;">Agregar
                                        comuna  </button>
                                </div>
                            <div class="col-7">
                                <div class="row">
                                    <div class="col-6">
                                        <p>Días:</p>
                                        <input type="text" class="form-control" id="dia">
                                        <ul class="list-group list-group-flush" id="lista_dias">
                                        </ul>
                                    </div>
                                    <div class="col-6">
                                        <p>Horas:</p>
                                        <input type="text" class="form-control" id="hora">
                                        <ul class="list-group list-group-flush" id="lista_horas">
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <h5>Usuarios asignados</h5>
                            <p class="lead">Cantidad de usuarios asignados</p>
                            <a href="{{ url('/confirmar_edicion') }}">
                                <button type="submit" class="btn btn-light">Editar</button>
                            </a>
                            <a href="{{ url('/confirmar_eliminar') }}">
                                <button type="submit" class="btn btn-light">Eliminar</button>
                            </a>
                            <a href="{{ url('/recicladores') }}">
                                <button type="submit" class="btn btn-light">Atras</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
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
        var nueva_lista_barrios = document.createElement("UL");
        var nueva_lista_dias = document.createElement("UL");
        var nueva_lista_horas = document.createElement("UL");

        nueva_lista_comunas.className = "list-group list-group-flush";
        nueva_lista_barrios.className = "list-group list-group-flush";
        nueva_lista_dias.className = "list-group list-group-flush";
        nueva_lista_horas.className = "list-group list-group-flush";
        nueva_fila.className = "row";
        nueva_fila_barrios.className = "row";
        nueva_col_barrios.className = "col-12";
        nueva_col_barrios_barrios.className = "col-6"
        nueva_col_comunas.className = "col-4";
        nueva_col_barrios.className = "col-8";
        nodo_lista.className = "list-group-item"
        nueva_col_dias.className = "col-3";
        nueva_col_horas.className = "col-3";

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

        for (var i = 0; i < lista_barrios.childNodes.length - 1; i++) {
            var nodo_barrio = document.createElement("LI");
            var nodo_dia = document.createElement("LI");;
            var nodo_hora = document.createElement("LI");;
            nodo_barrio.className = "list-group-item";
            nodo_dia.className = "list-group-item";
            nodo_hora.className = "list-group-item";
            texto_nodo_barrio = lista_barrios.childNodes[i + 1].childNodes[0];
            console.log(texto_nodo_barrio);
            texto_nodo_dias = lista_dias.childNodes[i + 1].childNodes[0];
            texto_nodo_horas = lista_horas.childNodes[i + 1].childNodes[0];
            nodo_barrio.appendChild(texto_nodo_barrio);
            nodo_dia.appendChild(texto_nodo_dias);
            nodo_hora.appendChild(texto_nodo_horas);
            nueva_lista_barrios.appendChild(nodo_barrio);
            nueva_lista_dias.appendChild(nodo_dia);
            nueva_lista_horas.appendChild(nodo_hora);
        }
        for (var i = 0; i < lista_barrios.childNodes.length + 1; i++) {
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

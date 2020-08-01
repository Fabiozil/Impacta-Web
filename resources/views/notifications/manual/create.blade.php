@extends('layouts.app')

@section('content')
<div class="card shadow">
    <div class="card-header">
        <h1 class="py-3 text-center text-success">
            Notificación manual
        </h1>
        <h3 class="lead text-center">
            Aquí podrás configurar las notificaciones manuales que deseas enviar de forma puntual a los usuarios de la
            comunidad. Este tipo de notificaciones es de uso exclusivo para compartir actualizaciones del servicio
            prestado por los recicladores o las condiciones de mejora de vida que ha tenido.
        </h3>
    </div>
    <div class="card-body">
        <div class="row border-bottom border-solid">
            <a href="{{ url( '/crearManual' ) }}" class="w-25">
                <button type="submit" class="btn btn-outline-success mb-2 mr-0 ml-2 w-100">Manuales
                </button>
            </a>
            <span class="btn btn-info mb-2 ml-0 mr-2" data-toggle="tooltip" data-placement="top"
                title="Utiliza la pestaña para definir una nueva notificación manual">
                <i class="fas fa-info-circle"></i></span>
            <a href="{{ url( '/crearAutomatica' ) }}" class="w-25">
                <button type="submit" class="btn btn-success mb-2 mr-0 w-100">Automaticas
                </button>
            </a>
            <span class="btn btn-info mb-2 ml-0" data-toggle="tooltip" data-placement="top"
                title="Utiliza la pestaña para definir una nueva notificación automática">
                <i class="fas fa-info-circle"></i></span>
        </div>
        <main class="container contenedor">
            <section class="manual border-solid">
                <div class="border-solid border p-3 mb-2">
                    <h2 class="text-success">Mensaje nuevo</h2>
                    <div class="row">
                        <div class="col-11 lead border-bottom border-solid">
                            <div class="d-flex justify-content-between">
                                <label for="todos">Compartir este mensaje entre todos los usuarios
                                    <button class="btn btn-info" type="button" data-toggle="tooltip" data-placement="right"
                                        title="Al activar esta opción, el mensaje manual será compartido entre todos los usuarios comprometidos con la corporación. En caso contrario, desactiva esta opción y específica las condiciones de envío por usuarios según su localidad o usuarios según el reciclador designado.">
                                        <i class="fas fa-info-circle"></i>
                                    </button>
                                </label>
                            </div>
                        </div>
                        <div class="col-1">
                            <div class="custom-control custom-switch d-inline">
                                <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                <label class="custom-control-label" for="customSwitch1"></label>
                            </div>
                        </div>
                        <div class="col-12 d-flex mt-3 mb-4">
                            <label class="lead inline mr-1">Tipo de mensaje <strong class="text-danger">*</strong></label>
                            <select class="form-control inline w-25"
                            aria-label="Example select with button addon">
                                <option value="El Poblado">Servicio de recolección</option>
                                <option value="Zuñiga">Información de reciclador</option>
                                <option value="San Marcos">Otro</option>
                            </select>
                        </div>
                        <div class="d-flex justify-content-center w-100">
                            <textarea name="Mensaje" id="" cols="25" rows="10" maxlength="150"
                            placeholder="Mensaje" style="width: 90%"></textarea>
                        </div>
                    </div>  
                    <div class="d-flex justify-content-end pr-5">
                        <small class="text-muted">Capacidad maxima 150 caracteres.</small>
                    </div>
                </div>
                <div class="border border-solid p-3">
                    <h2 class="mt-3 mb-3 text-success">Condiciones de envío</h2>
                    <div class="row mt-3">
                        <div class="col-md-11 lead">
                            <label for="sectores">Selecciona usuarios por localidad
                                <button class="btn btn-info" type="button" data-toggle="tooltip" data-placement="right"
                                    title="Esta opción de selección te permite compartir el mensaje manual entre los usuarios según el municipio, comuna o barrio en donde se encuentren.">
                                    <i class="fas fa-info-circle"></i>
                                </button>
                            </label>
                        </div>
                        <div class="col-md-1">
                            <div class="custom-control custom-switch d-inline">
                                <input type="checkbox" class="custom-control-input" id="customSwitch2">
                                <label class="custom-control-label" for="customSwitch2"></label>
                            </div>
                        </div>
                        <div id="sectores" class="col-md-12 mt-3">
                            <div class="input-group inline w-100 mb-2" id="ingreso_localidad">
                                <label class="lead"><strong>Municipio </strong></label>
                                <select class="form-control mr-3 ml-1" name="type" id="municipio" style="display: inline">
                                    <option value="Envigado">Envigado</option>
                                    <option value="Medellín">Medellín</option>
                                    <option value="Caldas">Caldas</option>
                                    <option value="Bello">Bello</option>
                                    <option value="Sabaneta">Sabaneta</option>
                                </select>
                                <label for="" class="lead"><strong>Comuna</strong>  </label>
                                <select class="form-control mr-3 ml-1" name="type" id="comuna" style="display: inline">
                                    <option value="Comuna 1">Comuna 1</option>
                                    <option value="Comuna 2">Comuna 2</option>
                                    <option value="Comuna 3">Comuna 3</option>
                                    <option value="Comuna 4">Comuna 4</option>
                                    <option value="">No aplica</option>
                                </select>
                                <label for="" class="lead"> <strong>Barrio</strong> </label>
                                <select class="form-control mr-3 ml-1" name="type" id="barrio" style="display: inline">
                                    <option value="San Marcos">San Marcos</option>
                                    <option value="Villagrande">Villagrande</option>
                                    <option value="El Poblado">El Poblado</option>
                                    <option value="El Dorado">El Dorado</option>
                                    <option value="La Magnolia">La Magnolia</option>
                                </select>
                                <button class="btn btn-outline-primary" onclick="agregarLocalidad()">Adicionar</button>
                            </div>
                            <table class="w-100 mb-3">
                                <thead class="text-center">
                                    <th class="col-4">Municipio</th>
                                    <th class="col-4">Comuna</th>
                                    <th class="col-4">Barrio</th>
                                </thead>
                                <tbody class="text-center" id="localidades">
                                    <tr>
                                        <th>

                                        </th>
                                        <th>No hay localidades seleccionadas.</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row mt-3 border-solid border-bottom">
                        <div class="col-md-11 lead mb-3">
                            <label for="reciclador">Selecciona usuarios por reciclador 
                                <button class="btn btn-info" type="button" data-toggle="tooltip" data-placement="right"
                                    title="Esta opción de selección te permite compartir el mensaje manual entre los usuarios que tienen asignado un reciclador en específico.">
                                    <i class="fas fa-info-circle"></i>
                                </button>
                            </label>
                        </div>
                        <div class="col-md-1">
                            <div class="custom-control custom-switch d-inline">
                                <input type="checkbox" class="custom-control-input" id="customSwitch13">
                                <label class="custom-control-label" for="customSwitch13"></label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group-row d-flex mb-2">
                                <label for="" class="lead"> <strong>Reciclador </strong> </label>
                                <select class="form-control ml-2" name="reciclador" id="reciclador">
                                    <option value="Avimilé Ribas">Avimilé Ribas</option>
                                    <option value="Jeison Guzman">Jeison Guzman</option>
                                    <option value="German Exequiel Cano">German Exequiel Cano</option>
                                    <option value="Kevin Tellez">Kevin Tellez</option>
                                    <option value="Stiven Mendoza">Stiven Mendoza</option>
                                </select>
                                <button class="btn btn-outline-primary ml-2" onclick="agregarReciclador()">Adicionar</button>
                            </div>
                            <table class="w-100 mb-3">
                                <thead class="text-center">
                                    <th class="col-12">Reciclador</th>
                                </thead>
                                <tbody class="text-center" id="recicladores">
                                    <tr>
                                        <th>No hay recicladores seleccionados.</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-11">
                            <label class="lead" for="fecha">Programar envío
                                <button class="btn btn-info" type="button" data-toggle="tooltip" data-placement="right"
                                    title="Selecciona el momento adecuado para que el mensaje sea compartido.
                                    Establecer formato fecha y hora como se ha manejado anteriormente.">
                                    <i class="fas fa-info-circle"></i>
                                </button>
                            </label>
                        </div>
                        <div class="col-md-1">
                            <div class="custom-control custom-switch d-inline">
                                <input type="checkbox" class="custom-control-input" id="customSwitch14">
                                <label class="custom-control-label" for="customSwitch14"></label>
                            </div>
                        </div>
                        <div class="col-md-12 w-100">
                            <label for="" class="lead mr-2"><strong>Fecha</strong></label>
                            <input class="form-control d-inline w-25" required name="fecha" id="fecha" type="date">
                            <label for="" class="lead mr-2 ml-3"><strong>Hora</strong></label>
                            <input type="time" class="form-control d-inline w-25" id="Hinit" value="07:00" min="07:00"
                                                    max="20:00">
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
    <div class="card-footer">
        <div class="d-flex flex-row-reverse">
            <a data-toggle="modal" data-target="#detallesModal">
                <button type="submit" class="btn btn-success">Enviar</button>
            </a>
            <button onclick="history.back()" class="btn btn-danger mr-2">Regresar</button>
        </div>
    </div>
</div>

<div class="modal fade" id="detallesModal" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-success" id="favoritesModalLabel">Resumen de nueva notificación automática
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <h2 class="text-center">Por favor confirma la información:</h2>
                <h3>
                    Mensajes establecido:
                </h3>
                <p class="lead">
                    Hola usuario, te notificamos que tu reciclaje no pudo ser recogido por las condiciones climaticas
                    del día de ayer, el reciclador pasará por el hoy a las 5:00 PM
                </p>
                <h3>
                    Condiciones de envío:
                </h3>
                <ol class="lead">
                    <li>
                        Reciclador: Jeison Guzman
                    </li>
                    <li>
                        Localidad: Envigado - El Dorado
                    </li>
                    <li>
                        Compartir mensaje: Inmediatamente
                    </li>
                </ol>
            </div>
            <div class="modal-footer">
                <span class="pull-right"><button type="button" class="btn btn-danger"
                        data-dismiss="modal">Atras</button></span>
                <a data-dismiss="modal" data-toggle="modal" data-target="#detallesModal1">
                    <button type="button" class="btn btn-success">Confirmar nueva notificación</button></span>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="detallesModal1" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-success" id="favoritesModalLabel">Exito</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <h1 class="py-2 text-center">Exito!</h1>
                            <h5 class="lead text-center">Notificación establecida correctamente.</h5>
                            <div class="d-flex justify-content-center">
                                <i class="fas fa-check-circle"
                                    style="width: 10% !important; height: 10% !important;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="{{url("/notificaciones")}}">
                    <button type="button" class="btn btn-success">Continuar</button>
                </a>
            </div>
        </div>
    </div>
</div>

<script>
    var localidades = 0;
    var recicladores = 0;
    function agregarLocalidad(){
        var tabla = document.getElementById("localidades");
        var municipio = document.getElementById("municipio");
        var comuna = document.getElementById("comuna");
        var barrio = document.getElementById("barrio");
        if(localidades == 0){
            var limite = tabla.childNodes.length;
            for (let index = 0; index < limite; index++) {
                tabla.removeChild(tabla.childNodes[tabla.childNodes.length-1]);
            }
        }
        var nueva_fila = document.createElement("TR");
        nueva_fila.setAttribute("class","text-center")
        var col_municipio = document.createElement("TD");
        var col_barrio = document.createElement("TD");
        var col_comuna = document.createElement("TD");
        var col_eliminar = document.createElement("TD");
        var texto_municipio = document.createTextNode(municipio.value);
        var texto_comuna = document.createTextNode(comuna.value);
        var texto_barrio = document.createTextNode(barrio.value);
        col_municipio.appendChild(texto_municipio);
        col_barrio.appendChild(texto_barrio);
        col_comuna.appendChild(texto_comuna);
        var boton_eliminar = document.createElement("BUTTON")
        var nodo_imagen = document.createElement("I")
        boton_eliminar.setAttribute("class","btn btn-danger");
        boton_eliminar.setAttribute("onclick","eliminarLocalidad()");
        boton_eliminar.appendChild(nodo_imagen);
        nodo_imagen.setAttribute("class","fas fa-trash-alt");
        col_eliminar.appendChild(boton_eliminar);
        nueva_fila.appendChild(col_municipio);
        nueva_fila.appendChild(col_comuna);
        nueva_fila.appendChild(col_barrio);
        nueva_fila.appendChild(col_eliminar);
        tabla.appendChild(nueva_fila);
        localidades += 1;
    }
    function eliminarLocalidad(){
        var tabla = document.getElementById("localidades");
        if( localidades == 0){
            return;
        }
        if( localidades == 1){
            localidades --;
            var limite = tabla.childNodes.length;
            for (let index = 0; index < limite; index++) {
                tabla.removeChild(tabla.childNodes[tabla.childNodes.length-1]);
            }
            var nodo_lista = document.createElement("TR");
            var nodo_lista3 = document.createElement("TH");
            var nodo_lista2 = document.createElement("TH");
            nodo_lista.setAttribute("class","text-center")
            var residuo_lista = document.createTextNode("No hay localidades seleccionadas.");
            nodo_lista2.appendChild(residuo_lista);
            nodo_lista.appendChild(nodo_lista3);
            nodo_lista.appendChild(nodo_lista2);
            tabla.appendChild(nodo_lista);
            return;
        }
        localidades --;
        tabla.removeChild(tabla.childNodes[tabla.childNodes.length-1]);
    }
    function eliminarReciclador(){
        var tabla = document.getElementById("recicladores");
        if( recicladores == 0){
            return;
        }
        if( recicladores == 1){
            recicladores --;
            var limite = tabla.childNodes.length;
            for (let index = 0; index < limite; index++) {
                tabla.removeChild(tabla.childNodes[tabla.childNodes.length-1]);
            }
            var nodo_lista = document.createElement("TR");
            var nodo_lista2 = document.createElement("TH");
            nodo_lista.setAttribute("class","text-center")
            var residuo_lista = document.createTextNode("No hay recicladores seleccionados.");
            nodo_lista2.appendChild(residuo_lista);
            nodo_lista.appendChild(nodo_lista2);
            tabla.appendChild(nodo_lista);
            return;
        }
        recicladores --;
        tabla.removeChild(tabla.childNodes[tabla.childNodes.length-1]);
    }

    function agregarReciclador(){
        var tabla = document.getElementById("recicladores");
        var reciclador = document.getElementById("reciclador");
        if(recicladores == 0){
            var limite = tabla.childNodes.length;
            for (let index = 0; index < limite; index++) {
                tabla.removeChild(tabla.childNodes[tabla.childNodes.length-1]);
            }
        }
        var nueva_fila = document.createElement("TR");
        nueva_fila.setAttribute("class","text-center")
        var col_reciclador = document.createElement("TD");
        var col_eliminar = document.createElement("TD");
        var texto_reciclador = document.createTextNode(reciclador.value);
        console.log(reciclador);
        col_reciclador.appendChild(texto_reciclador);
        var boton_eliminar = document.createElement("BUTTON")
        var nodo_imagen = document.createElement("I")
        boton_eliminar.setAttribute("class","btn btn-danger");
        boton_eliminar.setAttribute("onclick","eliminarReciclador()");
        boton_eliminar.appendChild(nodo_imagen);
        col_eliminar.appendChild(boton_eliminar);
        nodo_imagen.setAttribute("class","fas fa-trash-alt");
        nueva_fila.appendChild(col_reciclador);
        nueva_fila.appendChild(col_eliminar);
        tabla.appendChild(nueva_fila);
        recicladores += 1;
    }
</script>
@endsection

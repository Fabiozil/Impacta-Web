@extends('layouts.app')

@section('header')
<link rel="stylesheet" href="/css/notifications.css">
@endsection

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
                <button type="submit" class="btn btn-success mb-2 mr-0 ml-2 w-100">Manuales
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
            <section class="manual">
                <h2 class="text-success">Mensaje nuevo:</h2>
                <div class="row">
                    <div class="col-xl-6 col-sm-12 lead">
                        <label for="todos">Compartir este mensaje entre todos tus usuarios
                            <button class="btn btn-info" type="button" data-toggle="tooltip" data-placement="right"
                                title="Al activar esta opción, el mensaje manual será compartido entre todos los usuarios comprometidos con la corporación. En caso contrario, desactiva esta opción y específica las condiciones de envío por usuarios según su localidad o usuarios según el reciclador designado.">
                                <i class="fas fa-info-circle"></i>
                            </button>
                        </label>
                        <label class="switch">
                            <input name="" id="todos" type="checkbox">
                            <span class="slider"></span>
                        </label>
                    </div>
                <div class="col-xl-6 col-sm-12 d-flex pl-1">
                    <label class="lead inline mr-1">Tipo de mensaje: </label>
                    <select class="form-control inline w-75"
                    id="sector" aria-label="Example select with button addon">
                        <option value="El Poblado">Servicio de recolección</option>
                        <option value="Zuñiga">Información de reciclador</option>
                        <option value="San Marcos">Otro</option>
                    </select>
                </div>
                </div>
                <textarea name="Mensaje" id="" cols="30" rows="10" maxlength="150"
                    placeholder="Ingresa el mensaje a enviar. Maximo 150 caracteres"></textarea>
                <h2 class="mt-3 mb-3 text-success">Condiciones de envio:</h2>
                <div class="row mt-3">
                    <div class="col-md-3 lead">
                        <label for="sectores">Selecciona los usuarios por localidad
                            <button class="btn btn-info" type="button" data-toggle="tooltip" data-placement="right"
                                title="Esta opción de selección te permite compartir el mensaje manual entre los usuarios según el municipio, comuna o barrio en donde se encuentren.">
                                <i class="fas fa-info-circle"></i>
                            </button>
                        </label>
                    </div>
                    <div id="sectores" class="col-md-8">
                        <div class="input-group inline w-100 mb-2" id="ingreso_localidad">
                            <label class="lead"><strong>Municipio: </strong></label>
                            <select class="form-control mr-3 ml-1" name="type" id="lista_materiales" style="display: inline">
                                <option>Envigado</option>
                                <option>Medellín</option>
                                <option>Caldas</option>
                                <option>Bello</option>
                                <option>Sabaneta</option>
                            </select>
                            <label for="" class="lead"><strong>Comuna:</strong>  </label>
                            <select class="form-control mr-3 ml-1" name="type" id="lista_materiales" style="display: inline">
                                <option>Comuna 1</option>
                                <option>Comuna 2</option>
                                <option>Comuna 3</option>
                                <option>Comuna 4</option>
                                <option>No aplica</option>
                            </select>
                            <label for="" class="lead"> <strong>Barrio:</strong> </label>
                            <select class="form-control mr-3 ml-1" name="type" id="lista_materiales" style="display: inline">
                                <option>San Marcos</option>
                                <option>Villagrande</option>
                                <option>El Poblado</option>
                                <option>El Dorado</option>
                                <option>La Magnolia</option>
                            </select>
                        </div>
                        <span class="span-button" id="button_sectores">Agregar localidades</span>
                    </div>
                    <div class="col-md-1">
                        <label class="switch">
                            <input id="todos" type="checkbox">
                            <span class="slider"></span>
                        </label>
                    </div>
                </div>
                <div class="row mt-3 border-solid border-bottom">
                    <div class="col-md-3 lead">
                        <label for="reciclador">Selecciona los usuarios por reciclador asignado
                            <button class="btn btn-info" type="button" data-toggle="tooltip" data-placement="right"
                                title="Esta opción de selección te permite compartir el mensaje manual entre los usuarios que tienen asignado un reciclador en específico.">
                                <i class="fas fa-info-circle"></i>
                            </button>
                        </label>
                    </div>
                    <div id="reciclador" class="col-md-8">
                        <select class="form-control mb-2" name="reciclador" id="recicladores">
                            <option value="default">Avimilé Ribas</option>
                            <option value="default">Jeison Guzman</option>
                            <option value="default">German Exequiel Cano</option>
                            <option value="default">Kevin Tellez</option>
                            <option value="default">Stiven Mendoza</option>
                        </select>
                        <span class="span-button" id="button_reciclador">Agregar reciclador</span>
                    </div>
                    <div class="col-md-1">
                        <label class="switch">
                            <input name="" id="todos" type="checkbox">
                            <span class="slider"></span>
                        </label>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-3">
                        <label class="lead" for="fecha">Programar envío
                            <button class="btn btn-info" type="button" data-toggle="tooltip" data-placement="right"
                                title="Selecciona el momento adecuado para que el mensaje sea compartido.
                                Establecer formato fecha y hora como se ha manejado anteriormente.">
                                <i class="fas fa-info-circle"></i>
                            </button>
                        </label>
                    </div>
                    <div class="col-md-8 w-100">
                        <input class="form-control d-inline w-25" required name="fecha" id="fecha" type="date">
                        <input type="time" class="form-control d-inline w-50" id="Hinit" value="07:00" min="07:00"
                                                max="20:00">
                    </div>
                    <div class="col-md-1">
                        <label class="switch">
                            <input name="" id="todos" type="checkbox">
                            <span class="slider"></span>
                        </label>
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
<script>
    const sector_button = document.getElementById("button_sectores");
    const reciclador_button = document.getElementById("button_reciclador");
    const sectores = document.getElementById("sectores");
    const reciclador = document.getElementById("reciclador");
    sector_button.addEventListener("click", function () {
        var nuevoSectores = document.getElementById("ingreso_localidad");
        var nueva_localidad = nuevoSectores.cloneNode(true);
        sectores.insertBefore(nueva_localidad, sector_button);
    });
    reciclador_button.addEventListener("click", function () {
        var lista_recicladores = document.getElementById("recicladores");
        var lista_nueva = lista_recicladores.cloneNode(true);
        reciclador.insertBefore(lista_nueva, reciclador_button);
    });

</script>

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
@endsection

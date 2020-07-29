@extends('layouts.app')

@section('header')
<link rel="stylesheet" href="/css/notifications.css">
@endsection
@section('navbar-left')
<form autocomplete="off" action="/action_page.php">
    <div class="autocomplete" style="width: 300px">
        <input type="text" id="myInput" name="myCountry" class="form-control ml-2" placeholder="Buscar notificaciones"
            aria-label="Buscador de recicladores" aria-describedby="filtrar">
    </div>
</form>
<div class="input-group-append">
    <button class="btn btn-outline-success ml-2" type="button" id="filtrar" onclick="mostrarMapaDistinto2()">
        <i class="fas fa-search"></i></button>
</div>
@endsection

@section('content')
<div class="card shadow">
    <div class="card-header">
        <h1 class="py-3 text-center text-success">
            Notificaciones
        </h1>
        <h3 class="lead  text-center">
            Aquí podrás enviar notificaciones automáticas o manuales a los usuarios de la comunidad. También podrás
            visualizar los mensajes enviados y programados
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
            <h2 class="text-success">Historial de notificaciones enviadas</h2>
            <div class="row">
                <div class="col-12">
                    <table class="mt-3">
                        <thead>
                            <th class="col-1 p-1"></th>
                            <th class="col-2 p-1"></th>
                            <th class="col-8 p-1 overflow-hidden"></th>
                            <th class="col-1 p-1"></th>
                        </thead>
                        <tbody>
                            <tr class="border-bottom border-solid">
                                <td>
                                    <a href="" class="text-primary" data-toggle="modal"
                                        data-target="#modal1">Detalles</a>
                                </td>
                                <td><a class="bg-primary text-white">AU</a> Mensaje de servicio</td>
                                <td class="overflow-hidden">Hola <a href="" class="text-success">nombre de usuario!</a>
                                    No olvides sacar tu material reciclable y entregarlos a <a class="text-success">nombre reciclador</a> los días
                                    laborales del reciclador</td>
                                <td>23 julio</td>
                            </tr>
                            <tr class="border-bottom border-solid">
                                <td>
                                    <a href="" class="text-primary" data-toggle="modal"
                                        data-target="#modal2">Detalles</a>
                                </td>
                                <td><a class="bg-primary text-white">MN</a> Informacion del reciclador</td>
                                <td class="overflow-hidden">Hola <a class="text-success">nombre de usuario!</a>
                                    El reciclador <a class="text-success">nombre del reciclador</a> no pudo pasar el dia
                                    de ayer por el reciclaje por las condiciones climaticas. Pasará hoy a las 5:00PM
                                </td>
                                <td>19 julio</td>
                            </tr>
                            <tr class="border-bottom border-solid">
                                <td>
                                    <a href="" class="text-primary" data-toggle="modal"
                                        data-target="#modal2">Detalles</a>
                                </td>
                                <td><a class="bg-primary text-white">MN</a> Otro</td>
                                <td class="overflow-hidden">Hola <a class="text-success">nombre de usuario!</a>
                                    El reciclador <a class="text-success">nombre del reciclador</a> estará en una
                                    capacitación la siguiente semana por lo que no podra realizar la ruta, se te
                                    asignará otro reciclador y se te notificará.</td>
                                <td>18 julio</td>
                            </tr>
                            <tr class="border-bottom border-solid">
                                <td>
                                    <a href="" class="text-primary" data-toggle="modal"
                                        data-target="#modal1">Detalles</a>
                                </td>
                                <td><a class="bg-primary text-white">AU</a> Indicador ambiental</td>
                                <td class="overflow-hidden">Hola <a class="text-success">nombre de usuario!</a>
                                    Con tu ayuda, hemos ayudado a evitar la emision de X toneladas de CO2e</td>
                                <td>15 julio</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
    <div class="card-footer">

        <section class="mensajes_container">
            <div class="container">
                <h2 class="text-success">Mensajes programados: </h2>
                <div class="row">
                    <div class="col-12">
                        <table class="mt-3">
                            <thead>
                                <th class="col-1 p-1"></th>
                                <th class="col-2 p-1"></th>
                                <th class="col-8 p-1 overflow-hidden"></th>
                                <th class="col-1 p-1"></th>
                            </thead>
                            <tbody>
                                <tr class="border-bottom border-solid">
                                    <td>
                                        <div class="custom-control custom-checkbox d-inline">
                                            <input type="checkbox" class="custom-control-input" id="viernes" value="V">
                                            <label class="custom-control-label" for="viernes">Activo</label>
                                        </div>
                                    </td>
                                    <td><a class="bg-primary text-white">AU</a> Mensaje de servicio</td>
                                    <td class="overflow-hidden">Hola <a class="text-success">nombre de usuario!</a>
                                        No olvides sacar tu material reciclable y entregarlos a <a class="text-success">nombre reciclador</a> los
                                        días
                                        laborales del reciclador. <small class="text-success">Se envia 1 de agosto
                                            9:00AM</small></td>
                                    <td><button class="btn btn-primary" data-toggle="modal" data-target="#modal3">Editar</button></td>
                                </tr>
                                <tr class="border-bottom border-solid">
                                    <td>
                                        <div class="custom-control custom-checkbox d-inline">
                                            <input type="checkbox" class="custom-control-input" id="viernes" value="V">
                                            <label class="custom-control-label" for="viernes">Activo</label>
                                        </div>
                                    </td>
                                    <td><a class="bg-primary text-white">MN</a> Información del reciclador</td>
                                    <td class="overflow-hidden">Hola <a class="text-success">nombre de usuario!</a>
                                        El reciclador asignado para esta semana es <a class="text-success">nombre del reciclador</a> debido a que tu reciclador
                                         asignado estará en una capacitación. <small class="text-success">Se envia 2 de agosto
                                            8:00AM</small></td>
                                    <td><button class="btn btn-primary" data-toggle="modal" data-target="#modal4">Editar</button></td>
                                </tr>
                                <tr class="border-bottom border-solid">
                                    <td>
                                        <div class="custom-control custom-checkbox d-inline">
                                            <input type="checkbox" class="custom-control-input" id="viernes" value="V">
                                            <label class="custom-control-label" for="viernes">Activo</label>
                                        </div>
                                    </td>
                                    <td><a class="bg-primary text-white">MN</a> Mensaje de servicio</td>
                                    <td class="overflow-hidden">Hola <a class="text-success">nombre de usuario!</a>
                                        El pasado viernes no pudimos recolectar tu reciclaje pues el reciclador timbró y nadie entregó el reciclaje, tenlo en cuenta para la proxima entrega.
                                        <small class="text-success">Se envia 5 de agosto
                                            7:00AM</small></td>
                                    <td><button class="btn btn-primary" data-toggle="modal" data-target="#modal4">Editar</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="text-success">Detalles de mensaje enviado</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-6 p-1">
                            <p class="lead"><strong>Naturaleza del mensaje:</strong> Automatico</p>
                            <p class="lead"><strong>Tipo del mensaje:</strong> Mensaje de servicio</p>
                            <p class="lead"><strong>Usuarios objetivo:</strong> 23</p>
                            <p class="lead"><strong>Mensaje:</strong> Hola <a class="text-success">nombre de usuario!</a>
                                No olvides sacar tu material reciclable y entregarlos a <a class="text-success">Nombre Reciclador</a> los días
                                laborales del reciclador. </p>
                        </div>
                        <div class="col-6 p-1">
                            <p class="lead"><strong>Fecha programada de envío:</strong> 23 de julio 8:00AM</p>
                            <p class="lead"><strong>Fecha de envío:</strong> 23 de julio 8:01AM</p>
                            <p class="lead"><strong>Usuarios recibieron mensaje:</strong> 21</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <span class="pull-right"><button type="button" class="btn btn-danger"
                        data-dismiss="modal">Regresar</button></span>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="text-success">Detalles de mensaje enviado</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-6 p-1">
                            <p class="lead"><strong>Naturaleza del mensaje:</strong> Manual</p>
                            <p class="lead"><strong>Tipo del mensaje:</strong> Informacion del reciclador</p>
                            <p class="lead"><strong>Condición de envio:</strong> Localidad (Envigado, San Marcos)</p>
                            <p class="lead"><strong>Mensaje:</strong> Hola <a class="text-success">nombre de usuario!</a>
                                El reciclador <a class="text-success">nombre del reciclador</a> no pudo pasar el dia
                                de ayer por el reciclaje por las condiciones climaticas. Pasará hoy a las 5:00PM</p>
                        </div>
                        <div class="col-6 p-1">
                            <p class="lead"><strong>Fecha programada de envío:</strong> 19 de julio 8:00AM</p>
                            <p class="lead"><strong>Fecha de envío:</strong> 19 de julio 8:05AM</p>
                            <p class="lead"><strong>Usuarios objetivo:</strong> 9</p>
                            <p class="lead"><strong>Usuarios recibieron mensaje:</strong> 9</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <span class="pull-right"><button type="button" class="btn btn-danger"
                        data-dismiss="modal">Regresar</button></span>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="detallesModal" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-success" id="favoritesModalLabel">Resumen de edición de mensaje automático
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <h2 class="text-center">Por favor confirma la información:</h2>
                <h3>
                    Mensajes establecidos:
                </h3>
                <ol class="lead">
                    <li>
                        Servicio
                    </li>
                    <li>
                        Indicador ambiental
                    </li>
                </ol>
                <h3>
                    Condiciones de envío:
                </h3>
                <ol class="lead">
                    <li>
                        Semanal - Lunes - Jueves 8:00 AM
                    </li>
                    <li>
                        Diario 8:00 AM
                    </li>
                </ol>
            </div>
            <div class="modal-footer">
                <span class="pull-right"><button type="button" class="btn btn-danger"
                        data-dismiss="modal">Atras</button></span>
                <a data-dismiss="modal" data-toggle="modal" data-target="#detallesModal1">
                    <button type="button" class="btn btn-success">Confirmar edición</button></span>
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
<div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title text-success" id="favoritesModalLabel">Editar mensaje automatico</h2>
            </div>
            <div class="modal-body">
                <h2 class="col-md-6 mt-3 mb-4">Mensajes a establecer:</h2>
                <section class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h4><strong>Servicio </strong><label class="switch">
                                    <input id="encendido" type="checkbox">
                                    <span class="slider"></span>
                                </label></h4>
                        </div>
                        <div class="col-md-6 lead">
                            <b>Condiciones de envío</b>
                        </div>
                        <div class="col-md-6">
                            <p class="bg-gray">Hola <a class="text-primary">Nombre de usuario</a>!<br>No olvides sacar
                                tu material reciclable y
                                entregarlos a <a class="text-primary">Nombre Reciclador</a> los días laborales del
                                reciclador.</p>
                        </div>
                        <div class="col-md-6">
                            <label for="frecuencia">
                                Frecuencia de envío: <button class="btn btn-info" type="button" data-toggle="tooltip"
                                    data-placement="right"
                                    title="Esta opción de selección te permite escoger la periodicidad con la cual deseas compartir el mensaje automático entre todos los usuarios. ">
                                    <i class="fas fa-info-circle"></i>
                                </button>
                            </label>
                            <select class="form-control" name="" id="frecuencia">
                                <option value="semanal">Semanal</option>
                            </select>
                            <div class="row">
                                <div class="col-6">
                                    <label for="momento">
                                        Día de la semana:
                                    </label>
                                    <input class="form-control" required name="fecha" id="fecha" type="date">
                                </div>
                                <div class="col-6">
                                    <label for="">
                                        Hora del día:
                                    </label>
                                    <input class="form-control" required type="time" name="hora">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-5">
                            <h4><strong>Indicador ambiental </strong> <label class="switch">
                                    <input id="encendido" name="" type="checkbox">
                                    <span class="slider "></span>
                                </label></h4>
                        </div>
                        <div class="col-md-6 mt-5 lead">
                            <b>Condiciones de envío</b>
                        </div>
                        <div class="col-md-6">
                            <p class="bg-gray">Hola <a class="text-primary">Nombre de usuario</a>!<br>Con tu ayuda,
                                hemos ayudado a evitar la emision de X toneladas de CO2e</p>
                        </div>
                        <div class="col-md-6">
                            <label for="frecuencia">
                                Frecuencia de envío: <button class="btn btn-info" type="button" data-toggle="tooltip"
                                    data-placement="right"
                                    title="Esta opción de selección te permite escoger la periodicidad con la cual deseas compartir el mensaje automático entre todos los usuarios. ">
                                    <i class="fas fa-info-circle"></i>
                                </button>
                            </label>
                            <select class="form-control" name="" id="frecuencia">
                                <option value="semanal">Semanal</option>
                            </select>
                            <div class="row">
                                <div class="col-6">
                                    <label for="momento">
                                        Día de la semana:
                                    </label>
                                    <input class="form-control" required name="fecha" id="fecha" type="date">
                                </div>
                                <div class="col-6">
                                    <label for="">
                                        Hora del día:
                                    </label>
                                    <input class="form-control" required type="time" name="hora">
                                </div>
                            </div>

                        </div>
                        <div class="col-md-3">

                        </div>
                    </div>
                </section>
            </div>
            <div class="modal-footer">
                <a data-target="#detallesModal" data-toggle="modal" data-dismiss="modal">
                    <button type="button" class="btn btn-success">Confirmar edición</button>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title text-success" id="favoritesModalLabel">Editar mensaje manual</h2>
            </div>
            <div class="modal-body">
                <div class="container">
                    <section class="manual">
                        <h2 class="text-success">Mensaje nuevo:</h2>
                        <div class="row">
                            <div class="col-12 lead">
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
                            <div class="col-12 d-flex">
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
                            <div class="col-12 lead">
                                <label for="sectores">Selecciona los usuarios por localidad
                                    <button class="btn btn-info" type="button" data-toggle="tooltip" data-placement="right"
                                        title="Esta opción de selección te permite compartir el mensaje manual entre los usuarios según el municipio, comuna o barrio en donde se encuentren.">
                                        <i class="fas fa-info-circle"></i>
                                    </button>
                                </label>
                                <label class="switch">
                                    <input id="todos" type="checkbox">
                                    <span class="slider"></span>
                                </label>
                            </div>
                            <div id="sectores" class="col-md-12">
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
                        </div>
                        <div class="row mt-3 border-solid border-bottom">
                            <div class="col-md-12 lead">
                                <label for="reciclador">Selecciona los usuarios por reciclador asignado
                                    <button class="btn btn-info" type="button" data-toggle="tooltip" data-placement="right"
                                        title="Esta opción de selección te permite compartir el mensaje manual entre los usuarios que tienen asignado un reciclador en específico.">
                                        <i class="fas fa-info-circle"></i>
                                    </button>
                                </label>
                                <label class="switch">
                                    <input name="" id="todos" type="checkbox">
                                    <span class="slider"></span>
                                </label>
                            </div>
                            <div id="reciclador" class="col-md-12 mb-3">
                                <select class="form-control mb-2" name="reciclador" id="recicladores">
                                    <option value="default">Avimilé Ribas</option>
                                    <option value="default">Jeison Guzman</option>
                                    <option value="default">German Exequiel Cano</option>
                                    <option value="default">Kevin Tellez</option>
                                    <option value="default">Stiven Mendoza</option>
                                </select>
                                <span class="span-button" id="button_reciclador">Agregar reciclador</span>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label class="lead" for="fecha">Programar envío
                                    <button class="btn btn-info" type="button" data-toggle="tooltip" data-placement="right"
                                        title="Selecciona el momento adecuado para que el mensaje sea compartido.
                                        Establecer formato fecha y hora como se ha manejado anteriormente.">
                                        <i class="fas fa-info-circle"></i>
                                    </button>
                                </label>
                                <label class="switch">
                                    <input name="" id="todos" type="checkbox">
                                    <span class="slider"></span>
                                </label>
                            </div>
                            <div class="col-md-12 w-100">
                                <input class="form-control d-inline w-25" required name="fecha" id="fecha" type="date">
                                <input type="time" class="form-control d-inline w-50" id="Hinit" value="07:00" min="07:00"
                                                        max="20:00">
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="modal-footer">
                <a data-target="#detallesModal1" data-toggle="modal" data-dismiss="modal">
                    <button type="button" class="btn btn-success">Confirmar edición</button>
                </a>
            </div>
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
@endsection

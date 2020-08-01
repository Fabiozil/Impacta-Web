@extends('layouts.app')
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
                                <td>23 julio
                                    
                                </td>
                                <td>Mensaje de servicio</td>
                                <td class="overflow-hidden">
                                    <a class="bg-primary text-white p-1">AUT</a> <br>
                                    <p> Hola <a href="" class="text-success">@nombre de usuario!</a>
                                    No olvides sacar tu material reciclable y entregarlos a <a class="text-success">@nombre reciclador</a> los días
                                    laborales del reciclador</p>
                                    </div>
                                    
                                    </td>
                                <td><a href="" class="text-primary ml-3" data-toggle="modal"
                                        data-target="#modal1">Ver detalles</a></td>
                            </tr>
                            <tr class="border-bottom border-solid">
                                <td>
                                    19 de julio
                                </td>
                                <td>Informacion del reciclador</td>
                                <td class="overflow-hidden"><a class="bg-warning text-white p-1">MAN</a> <br>
                                    Hola <a class="text-success">@nombre de usuario!</a>
                                    El reciclador <a class="text-success">@nombre del reciclador</a> no pudo pasar el dia
                                    de ayer por el reciclaje por las condiciones climaticas. Pasará hoy a las 5:00PM
                                </td>
                                <td><a href="" class="text-primary ml-3" data-toggle="modal"
                                    data-target="#modal2">Ver detalles</a></td>
                            </tr>
                            <tr class="border-bottom border-solid">
                                <td>
                                    18 de julio
                                </td>
                                <td> Otro</td>
                                <td class="overflow-hidden"><a class="bg-warning text-white p-1">MAN</a> <br>Hola <a class="text-success">@nombre de usuario!</a>
                                    El reciclador <a class="text-success">@nombre del reciclador</a> estará en una
                                    capacitación la siguiente semana por lo que no podra realizar la ruta, se te
                                    asignará otro reciclador y se te notificará.</td>
                                <td><a href="" class="text-primary ml-3" data-toggle="modal"
                                    data-target="#modal2">Ver detalles</a></td>
                            </tr>
                            <tr class="border-bottom border-solid">
                                <td>
                                    15 julio
                                </td>
                                <td>Indicador ambiental</td>
                                <td class="overflow-hidden"><a class="bg-primary text-white p-1">AUT</a> <br>Hola <a class="text-success">@nombre de usuario!</a>
                                    Con tu ayuda, hemos ayudado a evitar la emision de X toneladas de CO2e</td>
                                <td><a href="" class="text-primary ml-3" data-toggle="modal"
                                    data-target="#modal1">Ver detalles</a></td>
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
                <h2 class="text-success">Mensajes programados </h2>
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
                                        <br>
                                        <p class="text-center">2 Sep 2020 8:00AM</p>
                                        
                                    </td>
                                    <td>Información del reciclador</td>
                                    <td class="overflow-hidden"><a class="bg-warning text-white p-1">MAN</a> <br>Hola <a class="text-success">@nombre de usuario!</a>
                                        El reciclador asignado para esta semana es <a class="text-success">@nombre del reciclador</a> debido a que tu reciclador
                                         asignado estará en una capacitación.</td>
                                    <td><button class="btn btn-outline-success ml-5" data-toggle="modal" data-target="#modal4"><i class="fas fa-edit fa-lg"></i></button></td>
                                </tr>
                                <tr class="border-bottom border-solid">
                                    <td>
                                        <br>
                                        <p class="text-center">5 Sep 2020 7:00AM</p>
                                    </td>
                                    <td>Mensaje de servicio</td>
                                    <td class="overflow-hidden"><a class="bg-warning text-white p-1">MAN</a> <br>Hola <a class="text-success">@nombre de usuario!</a>
                                        El pasado viernes no pudimos recolectar tu reciclaje pues el reciclador timbró y nadie entregó el reciclaje, tenlo en cuenta para la proxima entrega.
                                        </td>
                                    <td><button class="btn btn-outline-success ml-5" data-toggle="modal" data-target="#modal5"><i class="fas fa-edit fa-lg"></i></button></td>
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
                        <div class="col-12 p-1">
                            <p class="lead"><strong>Tipo del mensaje:</strong> Mensaje de servicio</p>
                            <p class="lead"><strong>Naturaleza del mensaje: </strong><a class="bg-primary text-white p-1">AUT</a></p>
                            <p class="lead mb-2"><strong>Mensaje:</strong></p>
                            <div class="border border-solid p-2 mb-2">
                                <p class="lead">Hola <a class="text-success">@nombre de usuario!</a>
                                    No olvides sacar tu material reciclable y entregarlos a <a class="text-success">@nombre reciclador</a> los días
                                    laborales del reciclador.</p>
                                <div class="d-flex justify-content-end">
                                    <small>Enviado: 23 de julio 2020 8:01AM</small>
                                </div>
                            </div>
                            <div class="d-flex justify-content-around">
                                <p class="lead d-inline mr-3"><strong>Mensajes enviados:</strong> 23 usuarios</p>
                                <p class="lead d-inline"><strong>Mensajes entregados:</strong> 21 usuarios</p>
                            </div>
                            <div class="row border-top border-solid pt-2 d-flex justify-content-center">
                                <h2 class="lead text-center"><strong>Condiciones de envío</strong></h2>
                            </div>
                            <table class="w-100">
                                <thead>
                                    <th class="text-center col-4">Frecuencia</th>
                                    <th class="text-center col-4">Día de la semana</th>
                                    <th class="text-center col-4">Hora</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center col-4">Semanal</td>
                                        <td class="text-center col-4">Lunes</td>
                                        <td class="text-center col-4">8:00AM</td>
                                    </tr>
                                </tbody>
                            </table>
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
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-12 p-1">
                            <p class="lead"><strong>Tipo del mensaje:</strong> Informacion del reciclador</p>
                            <p class="lead"><strong>Naturaleza del mensaje:</strong> <a class="bg-warning text-white p-1">MAN</a></p>
                            <p class="lead"><strong>Mensaje:</strong></p>
                            <div class="border-solid border p-2">
                                <p class="lead">
                                    Hola <a class="text-success">@nombre de usuario!</a> El reciclador <a class="text-success">@nombre del reciclador</a> no pudo pasar el dia
                                    de ayer por el reciclaje por las condiciones climaticas. Pasará hoy a las 5:00PM
                                </p>
                                <div class="d-flex justify-content-end">
                                    <small>Enviado: 19 de julio 2020 8:05AM</small> 
                                </div>
                            </div>
                            <div class="d-flex justify-content-around">
                                <p class="lead"><strong>Mensajes enviados:</strong> 9</p>
                                <p class="lead"><strong>Mensajes entregados:</strong> 9</p>
                            </div>
                            <div class="row border-top border-solid pt-2 d-flex justify-content-center">
                                <h2 class="lead text-center"><strong>Condiciones de envío</strong></h2>
                            </div>
                            <table class="w-100">
                                <thead>
                                    <th class="text-center col-4">Tipo de condición</th>
                                    <th class="text-center col-4">Condición</th>
                                    <th class="text-center col-4">Fecha programada</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center col-4">Localidad</td>
                                        <td class="text-center col-4">San Marcos, Envigado</td>
                                        <td class="text-center col-4">19 de julio 2020 8:00AM</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center col-4">Reciclador</td>
                                        <td class="text-center col-4">Avimilé Ribas</td>
                                        <td class="text-center col-4">19 de julio 2020 8:00AM</td>
                                    </tr>
                                </tbody>
                            </table>
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
                <h4 class="modal-title text-success" id="favoritesModalLabel">Éxito</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="d-flex justify-content-center">
                                <img src="Exito.png" alt="">
                            </div>
                            <h1 class="py-2 text-center">¡Éxito!</h1>
                            <h5 class="lead text-center">Cambios realizados correctamente.</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <span class="pull-right"><button type="button" class="btn btn-success"
                        data-dismiss="modal">Continuar</button></span>
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
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <section class="manual">
                        <div class="row">
                            <div class="col-12 lead d-flex justify-content-between mb-3 border-bottom border-solid">
                                <label for="todos">Compartir este mensaje entre todos los usuarios
                                    <button class="btn btn-info" type="button" data-toggle="tooltip" data-placement="right"
                                        title="Al activar esta opción, el mensaje manual será compartido entre todos los usuarios comprometidos con la corporación. En caso contrario, desactiva esta opción y específica las condiciones de envío por usuarios según su localidad o usuarios según el reciclador designado.">
                                        <i class="fas fa-info-circle"></i>
                                    </button>
                                </label>
                                <div class="custom-control custom-switch d-inline">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                    <label class="custom-control-label" for="customSwitch1"></label>
                                </div>
                            </div>
                            <div class="col-12 d-flex">
                                <label class="lead inline mr-2">Tipo de mensaje </label>
                                <select class="form-control inline w-75"
                                id="sector" aria-label="Example select with button addon">
                                    <option value="El Poblado">Servicio de recolección</option>
                                    <option value="Zuñiga">Información de reciclador</option>
                                    <option value="San Marcos">Otro</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-3">
                            <textarea name="Mensaje" id="" cols="30" rows="10" maxlength="150"
                                placeholder="Hola @nombre de usuario! El reciclador asignado para esta semana es @nombre del reciclador debido a que tu reciclador asignado estará en una capacitación." style="width: 700px"></textarea>
                        </div>
                        <h2 class="mt-3 mb-3 text-success">Condiciones de envío</h2>
                        <div class="row mt-3">
                            <div class="col-12 lead d-flex justify-content-between">
                                <label for="sectores">Selecciona usuarios por localidad
                                    <button class="btn btn-info" type="button" data-toggle="tooltip" data-placement="right"
                                        title="Esta opción de selección te permite compartir el mensaje manual entre los usuarios según el municipio, comuna o barrio en donde se encuentren.">
                                        <i class="fas fa-info-circle"></i>
                                    </button>
                                </label>
                                <div class="custom-control custom-switch d-inline">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch12">
                                    <label class="custom-control-label" for="customSwitch12"></label>
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
                                    <button class="btn btn-outline-primary" onclick="agregarLocalidad('localidades')">Adicionar</button>
                                </div>
                                <table class="w-100 mb-3">
                                    <thead class="text-center">
                                        <th class="col-4">Municipio</th>
                                        <th class="col-4">Comuna</th>
                                        <th class="col-4">Barrio</th>
                                    </thead>
                                    <tbody class="text-center" id="localidades">
                                        <tr>
                                            <td>Envigado</td>
                                            <td>No aplica</td>
                                            <td>La Magnolia</td>
                                            <td><button class="btn btn-danger" onclick="eliminarLocalidad('localidades')"><i class="fas fa-trash-alt"></i></button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row mt-3 border-solid border-bottom">
                            <div class="col-md-12 lead d-flex justify-content-between">
                                <label for="reciclador">Selecciona usuarios por reciclador
                                    <button class="btn btn-info" type="button" data-toggle="tooltip" data-placement="right"
                                        title="Esta opción de selección te permite compartir el mensaje manual entre los usuarios que tienen asignado un reciclador en específico.">
                                        <i class="fas fa-info-circle"></i>
                                    </button>
                                </label>
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
                                    <button class="btn btn-outline-primary ml-2" onclick="agregarReciclador('recicladores')">Adicionar</button>
                                </div>
                                <table class="w-100 mb-3">
                                    <thead class="text-center">
                                        <th class="col-12">Reciclador</th>
                                    </thead>
                                    <tbody class="text-center" id="recicladores">
                                        <tr>
                                            <td>Jeison Guzman</td>
                                            <td><button class="btn btn-danger" onclick="eliminarReciclador('recicladores')"><i class="fas fa-trash-alt"></i></button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12 d-flex justify-content-between">
                                <label class="lead" for="fecha">Programar envío
                                    <button class="btn btn-info" type="button" data-toggle="tooltip" data-placement="right"
                                        title="Selecciona el momento adecuado para que el mensaje sea compartido.
                                        Establecer formato fecha y hora como se ha manejado anteriormente.">
                                        <i class="fas fa-info-circle"></i>
                                    </button>
                                </label>
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
                    </section>
                </div>
            </div>
            <div class="modal-footer">
                <a data-dismiss="modal">
                    <button type="button" class="btn btn-danger">Regresar</button>
                </a>
                <a data-target="#detallesModal1" data-toggle="modal" data-dismiss="modal">
                    <button type="button" class="btn btn-success">Confirmar</button>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title text-success" id="favoritesModalLabel">Editar mensaje manual</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <section class="manual">
                        <div class="row">
                            <div class="col-12 lead d-flex justify-content-between mb-3 border-bottom border-solid">
                                <label for="todos">Compartir este mensaje entre todos los usuarios
                                    <button class="btn btn-info" type="button" data-toggle="tooltip" data-placement="right"
                                        title="Al activar esta opción, el mensaje manual será compartido entre todos los usuarios comprometidos con la corporación. En caso contrario, desactiva esta opción y específica las condiciones de envío por usuarios según su localidad o usuarios según el reciclador designado.">
                                        <i class="fas fa-info-circle"></i>
                                    </button>
                                </label>
                                <div class="custom-control custom-switch d-inline">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                    <label class="custom-control-label" for="customSwitch1"></label>
                                </div>
                            </div>
                            <div class="col-12 d-flex">
                                <label class="lead inline mr-2">Tipo de mensaje </label>
                                <select class="form-control inline w-75"
                                id="sector" aria-label="Example select with button addon">
                                    <option value="El Poblado">Servicio de recolección</option>
                                    <option value="Zuñiga">Información de reciclador</option>
                                    <option value="San Marcos">Otro</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-3">
                            <textarea name="Mensaje" id="" cols="30" rows="10" maxlength="150"
                                placeholder="Hola @nombre de usuario! El pasado viernes no pudimos recolectar tu reciclaje pues el reciclador timbró y nadie entregó el reciclaje, tenlo en cuenta para la proxima entrega. " style="width: 700px"></textarea>
                        </div>
                        <h2 class="mt-3 mb-3 text-success">Condiciones de envío</h2>
                        <div class="row mt-3">
                            <div class="col-12 lead d-flex justify-content-between">
                                <label for="sectores">Selecciona usuarios por localidad
                                    <button class="btn btn-info" type="button" data-toggle="tooltip" data-placement="right"
                                        title="Esta opción de selección te permite compartir el mensaje manual entre los usuarios según el municipio, comuna o barrio en donde se encuentren.">
                                        <i class="fas fa-info-circle"></i>
                                    </button>
                                </label>
                                <div class="custom-control custom-switch d-inline">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch12">
                                    <label class="custom-control-label" for="customSwitch12"></label>
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
                                    <button class="btn btn-outline-primary" onclick="agregarLocalidad('localidades1')">Adicionar</button>
                                </div>
                                <table class="w-100 mb-3">
                                    <thead class="text-center">
                                        <th class="col-4">Municipio</th>
                                        <th class="col-4">Comuna</th>
                                        <th class="col-4">Barrio</th>
                                    </thead>
                                    <tbody class="text-center" id="localidades1">
                                        <tr>
                                            <td>Envigado</td>
                                            <td>No aplica</td>
                                            <td>San Marcos</td>
                                            <td><button class="btn btn-danger" onclick="eliminarLocalidad('localidades1')"><i class="fas fa-trash-alt"></i></button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row mt-3 border-solid border-bottom">
                            <div class="col-md-12 lead d-flex justify-content-between">
                                <label for="reciclador">Selecciona usuarios por reciclador
                                    <button class="btn btn-info" type="button" data-toggle="tooltip" data-placement="right"
                                        title="Esta opción de selección te permite compartir el mensaje manual entre los usuarios que tienen asignado un reciclador en específico.">
                                        <i class="fas fa-info-circle"></i>
                                    </button>
                                </label>
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
                                    <button class="btn btn-outline-primary ml-2" onclick="agregarReciclador('recicladores1')">Adicionar</button>
                                </div>
                                <table class="w-100 mb-3">
                                    <thead class="text-center">
                                        <th class="col-12">Reciclador</th>
                                    </thead>
                                    <tbody class="text-center" id="recicladores1">
                                        <tr>
                                            <td>Avimilé Ribas</td>
                                            <td><button class="btn btn-danger" onclick="eliminarReciclador('recicladores1')"><i class="fas fa-trash-alt"></i></button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12 d-flex justify-content-between">
                                <label class="lead" for="fecha">Programar envío
                                    <button class="btn btn-info" type="button" data-toggle="tooltip" data-placement="right"
                                        title="Selecciona el momento adecuado para que el mensaje sea compartido.
                                        Establecer formato fecha y hora como se ha manejado anteriormente.">
                                        <i class="fas fa-info-circle"></i>
                                    </button>
                                </label>
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
                    </section>
                </div>
            </div>
            <div class="modal-footer">
                <a data-dismiss="modal">
                    <button type="button" class="btn btn-danger">Regresar</button>
                </a>
                <a data-target="#detallesModal1" data-toggle="modal" data-dismiss="modal">
                    <button type="button" class="btn btn-success">Confirmar</button>
                </a>
            </div>
        </div>
    </div>
</div>
<script>
    var localidades = 1;
    var recicladores = 1;
    function agregarLocalidad(localidades){
        console.log(localidades);
        var tabla = document.getElementById(localidades);
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
        boton_eliminar.setAttribute("onclick","eliminarLocalidad('"+localidades+"')");
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
    function eliminarLocalidad(localidades){
        var tabla = document.getElementById(localidades);
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
    function eliminarReciclador(recicladores){
        var tabla = document.getElementById(recicladores);
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

    function agregarReciclador(recicladores){
        var tabla = document.getElementById(recicladores);
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
        boton_eliminar.setAttribute("onclick","eliminarReciclador('"+recicladores+"')");
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

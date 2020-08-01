@extends('layouts.app')
@section('navbar-left')
<form autocomplete="off" action="/action_page.php">
    <div class="autocomplete" style="width: 300px">
        <input type="text" id="myInput" name="myCountry" class="form-control ml-2"
            placeholder="Buscar en notificaciones" aria-label="Buscador de recicladores" aria-describedby="filtrar">
    </div>
</form>
<div class="input-group-append">
    <button class="btn btn-outline-success ml-2" type="button" id="filtrar" onclick="mostrarMapaDistinto2()">
        <i class="fas fa-search"></i></button>
</div>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h1 class="py-3 text-center text-success">
            Notificación automática
        </h1>
        <h3 class="lead text-center">
            Aquí podrás configurar los mensajes automáticos que deseas enviar de forma periódica a todos los usuarios de
            la comunidad. Este tipo de notificaciones es de uso exclusivo para compartir información de recordación
            sobre el servicio o del impacto ambiental generado.
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
                <button type="submit" class="btn btn-outline-success mb-2 mr-0 w-100">Automaticas
                </button>
            </a>
            <span class="btn btn-info mb-2 ml-0" data-toggle="tooltip" data-placement="top"
                title="Utiliza la pestaña para definir una nueva notificación automática">
                <i class="fas fa-info-circle"></i></span>
        </div>
        <main class="container contenedor">
            <div class="border-solid border-left border-right border-top p-3 mt-5">
                <h2 class="text-success">Mensaje nuevo</h2>
                <div class="row">
                    <div class="col-12 d-flex mb-2 border-bottom border-solid pb-3">
                        <label class="lead inline mr-1"> <strong>Tipo de mensaje <strong class="text-danger">*</strong></strong>  </label>
                        <select class="form-control inline w-25"
                        id="sector" aria-label="Example select with button addon">
                            <option value="El Poblado">Servicio de recolección</option>
                            <option value="Zuñiga">Información de reciclador</option>
                            <option value="San Marcos">Otro</option>
                        </select>
                    </div>
                    <div class="d-flex justify-content-center w-100 mt-3">
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
                <div class="row mb-2">
                    <div class="col-xl-4 col-sm-6">
                        <label for="momento">
                        Frecuencia
                        </label>
                        <select class="form-control" name="" id="frecuencia">
                        <option value="Semanal">Semanal</option>
                        <option value="Diario">Diario</option>
                        <option value="Mensual">Mensual</option>
                        <option value="Semestral">Semestral</option>
                        <option value="Trimestral">Trimestral</option>
                        </select>
                    </div>
                    <div class="col-xl-4 col-sm-6">
                        <label for="momento">
                        Día
                        </label>
                        <select class="form-control" name="" id="dia">
                        <option value="Lunes">Lunes</option>
                        <option value="Martes">Martes</option>
                        <option value="Miercoles">Miercoles</option>
                        <option value="Jueves">Jueves</option>
                        <option value="Sabado">Sabado</option>
                        <option value="Domingo">Domingo</option>
                        </select>
                    </div>
                    <div class="col-xl-4 col-sm-12">
                        <label for="">
                            Hora
                        </label>
                        <div class="form-group-row d-flex">
                            <input class="form-control" required type="time" id="hora">
                            <button class="btn btn-outline-primary ml-2" onclick="agregarCondicion('condiciones')">Adicionar</button>
                        </div>
                    </div>
                </div>
                <table class="w-100 mt-3">
                    <thead>
                        <th class="text-center col-4">Frecuencia</th>
                        <th class="text-center col-4">Día de la semana</th>
                        <th class="text-center col-4">Hora</th>
                    </thead>
                    <tbody id="condiciones">
                        <tr>
                            <th></th>
                            <th class="text-center">No hay condiciones seleccionadas.</th>
                        </tr>
                    </tbody>
                </table>
            </div>



            <section class="row mt-3 border border-solid p-3">
                <div class="col-12">
                    <div class="row border-bottom border-solid">
                        <div class="col-12">
                            <h2 class="text-success" for="encendido">Mensajes establecidos 
                            </h2>
                            <div class="row">
                                <div class="col-11">
                                    <p class="lead">Activar/Desactivar mensajes automáticos.</p>
                                </div>
                                <div class="col-1 pl-4">
                                    <div class="custom-control custom-switch d-inline">
                                        <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                        <label class="custom-control-label" for="customSwitch1"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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
                                <td class="d-flex justify-content-center">
                                    <div class="custom-control custom-switch d-inline">
                                        <input type="checkbox" class="custom-control-input" id="customSwitch2">
                                        <label class="custom-control-label" for="customSwitch2"></label>
                                    </div>
                                </td>
                                <td>Mensaje de servicio</td>
                                <td class="overflow-hidden">Hola <a class="text-success">@nombre de usuario!</a>
                                    No olvides sacar tu material reciclable y entregarlos a <a class="text-success">@nombre reciclador</a>  los días
                                    laborales del reciclador</td>
                                <td><button class="btn btn-outline-success ml-5" data-target="#modal3" data-toggle="modal"><i class="fas fa-edit fa-lg"></i></button></td>
                            </tr>
                            <tr class="border-bottom border-solid">
                                <td class="d-flex justify-content-center">
                                    <div class="custom-control custom-switch d-inline">
                                        <input type="checkbox" class="custom-control-input" id="customSwitch3">
                                        <label class="custom-control-label" for="customSwitch3"></label>
                                    </div>
                                </td>
                                <td>Indicador ambiental</td>
                                <td class="overflow-hidden">Hola <a class="text-success">@nombre de usuario!</a>
                                    Con tu ayuda, hemos ayudado a evitar la emision de X toneladas de CO2e</td>
                                <td><button class="btn btn-outline-success ml-5" data-target="#modal4" data-toggle="modal"><i class="fas fa-edit fa-lg"></i></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
    </div>

    <div class="card-footer">
        <div class="d-flex flex-row-reverse">
            <button onclick="history.back()" class="btn btn-success ml-2">Establecer mensaje</button>
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
<div class="modal fade" id="detallesModal2" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title text-success" id="favoritesModalLabel">Nuevo mensaje automatico</h2>
            </div>
            <div class="modal-body">
                <h2 class="col-md-6 mt-3 mb-4">Mensajes a establecer:</h2>
                <section class="container">
                    <div class="row"
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
                    <button type="button" class="btn btn-success">Confirmar</button>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="detallesModal22" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
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
                <a data-dismiss="modal" data-toggle="modal" data-target="#detallesModal12">
                    <button type="button" class="btn btn-success">Confirmar edición</button></span>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="detallesModal12" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
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
                <h2 class="modal-title text-success" id="favoritesModalLabel">Editar mensaje automático</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="border-solid border-right border-left border-top p-3 ">
                    <div class="row">
                        <div class="col-12 d-flex mb-2 border-bottom border-solid pb-3">
                            <label class="lead inline mr-2"><strong>Tipo de mensaje </strong></label>
                            <select class="form-control inline w-50"
                            id="sector" aria-label="Example select with button addon">
                                <option value="El Poblado">Servicio de recolección</option>
                                <option value="Zuñiga">Información de reciclador</option>
                                <option value="San Marcos">Otro</option>
                            </select>
                        </div>
                        <div class="d-flex justify-content-center w-100 mt-3">
                            <textarea name="Mensaje" id="" cols="25" rows="10" maxlength="150"
                            placeholder=" 	Hola @nombre de usuario! No olvides sacar tu material reciclable y entregarlos a @nombre reciclador los días laborales del reciclador" style="width: 90%"></textarea>
                        </div>
                        
                    </div>  
                    <div class="d-flex justify-content-end pr-5">
                        <small class="text-muted">Capacidad maxima 150 caracteres.</small>
                    </div>
                </div>
                <div class="border border-solid p-3">
                    <h2 class="mt-3 mb-3 text-success">Condiciones de envio</h2>
                    <div class="row mb-2">
                        <div class="col-xl-4 col-sm-6">
                            <label for="momento">
                            Frecuencia
                            </label>
                            <select class="form-control" name="" id="frecuencia">
                            <option value="Semanal">Semanal</option>
                            <option value="Diario">Diario</option>
                            <option value="Mensual">Mensual</option>
                            <option value="Semestral">Semestral</option>
                            <option value="Trimestral">Trimestral</option>
                            </select>
                        </div>
                        <div class="col-xl-4 col-sm-6">
                            <label for="momento">
                            Día
                            </label>
                            <select class="form-control" name="" id="dia">
                            <option value="Lunes">Lunes</option>
                            <option value="Martes">Martes</option>
                            <option value="Miercoles">Miercoles</option>
                            <option value="Jueves">Jueves</option>
                            <option value="Sabado">Sabado</option>
                            <option value="Domingo">Domingo</option>
                            </select>
                        </div>
                        <div class="col-xl-4 col-sm-12">
                            <label for="">
                                Hora
                            </label>
                            <div class="form-group-row d-flex">
                                <input class="form-control" required type="time" id="hora">
                                <button class="btn btn-outline-primary ml-2" onclick="agregarCondicion('condiciones1')">Adicionar</button>
                            </div>
                        </div>
                    </div>
                    <table class="w-100 mt-3">
                        <thead>
                            <th class="text-center col-4">Frecuencia</th>
                            <th class="text-center col-4">Día de la semana</th>
                            <th class="text-center col-4">Hora</th>
                        </thead>
                        <tbody id="condiciones1">
                            <tr class="text-center">
                                <td>Semanal</td>
                                <td>Lunes</td>
                                <td>8:00AM</td>
                                <td><button class="btn-danger btn" onclick="eliminarCondicion('condiciones1')"><i class="fas fa-trash-alt"></i></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <a data-dismiss="modal">
                    <button type="button" class="btn btn-danger">Regresar</button>
                </a>
                <a data-target="#detallesModal22" data-toggle="modal" data-dismiss="modal">
                    <button type="button" class="btn btn-success">Confirmar</button>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title text-success" id="favoritesModalLabel">Editar mensaje automático</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="border-solid border-right border-left border-top p-3 ">
                    <div class="row">
                        <div class="col-12 d-flex mb-2 border-bottom border-solid pb-3">
                            <label class="lead inline mr-2"><strong>Tipo de mensaje </strong></label>
                            <select class="form-control inline w-50"
                            id="sector" aria-label="Example select with button addon">
                                <option value="El Poblado">Servicio de recolección</option>
                                <option value="Zuñiga">Información de reciclador</option>
                                <option value="San Marcos">Otro</option>
                            </select>
                        </div>
                        <div class="d-flex justify-content-center w-100 mt-3">
                            <textarea name="Mensaje" id="" cols="25" rows="10" maxlength="150"
                            placeholder="Mensaje" style="width: 90%"></textarea>
                        </div>
                        
                    </div>  
                    <div class="d-flex justify-content-end pr-5">
                        <small class="text-muted">Capacidad maxima 150 caracteres.</small>
                    </div>
                </div>
                <div class="border border-solid p-3">
                    <h2 class="mt-3 mb-3 text-success">Condiciones de envio</h2>
                    <div class="row mb-2">
                        <div class="col-xl-4 col-sm-6">
                            <label for="momento">
                            Frecuencia
                            </label>
                            <select class="form-control" name="" id="frecuencia">
                            <option value="Semanal">Semanal</option>
                            <option value="Diario">Diario</option>
                            <option value="Mensual">Mensual</option>
                            <option value="Semestral">Semestral</option>
                            <option value="Trimestral">Trimestral</option>
                            </select>
                        </div>
                        <div class="col-xl-4 col-sm-6">
                            <label for="momento">
                            Día
                            </label>
                            <select class="form-control" name="" id="dia">
                            <option value="Lunes">Lunes</option>
                            <option value="Martes">Martes</option>
                            <option value="Miercoles">Miercoles</option>
                            <option value="Jueves">Jueves</option>
                            <option value="Sabado">Sabado</option>
                            <option value="Domingo">Domingo</option>
                            </select>
                        </div>
                        <div class="col-xl-4 col-sm-12">
                            <label for="">
                                Hora
                            </label>
                            <div class="form-group-row d-flex">
                                <input class="form-control" required type="time" id="hora">
                                <button class="btn btn-outline-primary ml-2" onclick="agregarCondicion('condiciones2')">Adicionar</button>
                            </div>
                        </div>
                    </div>
                    <table class="w-100 mt-3">
                        <thead>
                            <th class="text-center col-4">Frecuencia</th>
                            <th class="text-center col-4">Día de la semana</th>
                            <th class="text-center col-4">Hora</th>
                        </thead>
                        <tbody id="condiciones2">
                            <tr>
                                <td>Mesual</td>
                                <td>Lunes</td>
                                <td>8:00AM</td>
                                <td><button class="btn-danger btn" onclick="eliminarCondicion('condiciones2')"><i class="fas fa-trash-alt"></i></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <a data-dismiss="modal">
                    <button type="button" class="btn btn-danger">Regresar</button>
                </a>
                <a data-target="#detallesModal22" data-toggle="modal" data-dismiss="modal">
                    <button type="button" class="btn btn-success">Confirmar</button>
                </a>
            </div>
        </div>
    </div>
</div>

<script>
    var Condiciones = 1;
    function agregarCondicion(condiciones){
        var tabla = document.getElementById(condiciones);
        var dia = document.getElementById("dia");
        var frecuencia = document.getElementById("frecuencia");
        var hora = document.getElementById("hora");
        if(condiciones == 0){
            var limite = tabla.childNodes.length;
            for (let index = 0; index < limite; index++) {
                tabla.removeChild(tabla.childNodes[tabla.childNodes.length-1]);
            }
        }
        var nueva_fila = document.createElement("TR");
        var col_frecuencia = document.createElement("TD");
        var col_dia = document.createElement("TD");
        var col_hora = document.createElement("TD");
        nueva_fila.setAttribute("class","text-center");
        var col_eliminar = document.createElement("TD");
        var texto_col_frecuencia = document.createTextNode(frecuencia.value);
        var texto_col_dia = document.createTextNode(dia.value);
        var texto_col_hora = document.createTextNode(hora.value);
        var boton_eliminar = document.createElement("BUTTON")
        var nodo_imagen = document.createElement("I")
        boton_eliminar.setAttribute("class","btn btn-danger");
        boton_eliminar.setAttribute("onclick","eliminarCondicion('"+condiciones+"')");
        boton_eliminar.appendChild(nodo_imagen);
        nodo_imagen.setAttribute("class","fas fa-trash-alt");
        col_frecuencia.appendChild(texto_col_frecuencia);
        col_dia.appendChild(texto_col_dia);
        col_hora.appendChild(texto_col_hora);
        col_eliminar.appendChild(boton_eliminar);
        nueva_fila.appendChild(col_frecuencia);
        nueva_fila.appendChild(col_dia);
        nueva_fila.appendChild(col_hora);
        nueva_fila.appendChild(col_eliminar);
        tabla.appendChild(nueva_fila);
        Condiciones ++;
        console.log(Condiciones);
    }

    function eliminarCondicion(condiciones){
        var tabla = document.getElementById(condiciones);
        if(Condiciones == 0){
            return;
        }
        if(Condiciones == 1){
            Condiciones --;
            var limite = tabla.childNodes.length;
            for (let index = 0; index < limite; index++) {
                tabla.removeChild(tabla.childNodes[tabla.childNodes.length-1]);
            }
            var nodo_lista = document.createElement("TR");
            var nodo_lista3 = document.createElement("TH");
            var nodo_lista2 = document.createElement("TH");
            nodo_lista.setAttribute("class","text-center")
            var residuo_lista = document.createTextNode("No hay condiciones seleccionadas.");
            nodo_lista2.appendChild(residuo_lista);
            nodo_lista.appendChild(nodo_lista3);
            nodo_lista.appendChild(nodo_lista2);
            tabla.appendChild(nodo_lista);
            return;
        }
        Condiciones --;
        tabla.removeChild(tabla.childNodes[tabla.childNodes.length-1]);
        console.log(Condiciones);
        return;
    }
</script>

@endsection

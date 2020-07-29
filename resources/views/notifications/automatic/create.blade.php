@extends('layouts.app')

@section('header')
<link rel="stylesheet" href="/css/notifications.css">
@endsection

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
            <a href="" class="w-25" data-toggle="modal" data-target="#detallesModal2">
                <button type="submit" class="btn btn-success mb-2 mr-0 ml-2 w-100">Nuevo mensaje automatico
                </button>
            </a>
        </div>
        <main class="container contenedor">
            <section class="row">
                <div class="col-12">
                    <div class="row border-bottom border-solid">
                        <div class="col-xl-6 col-md-6">
                            <h2 for="encendido">Mensajes automáticos<button class="btn btn-info ml-2" type="button"
                                    data-toggle="tooltip" data-placement="right"
                                    title="Esta opción de activación o desactivación permite bloquear o desbloquear, respectivamente, la función de envío de los mensajes automáticos establecidos.">
                                    <i class="fas fa-info-circle"></i>
                                </button></h2>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="">
                                <label class="switch float-right">
                                    <input id="encendido" type="checkbox">
                                    <span class="slider"></span>
                                </label>
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
                                <td>
                                    <div class="custom-control custom-checkbox d-inline">
                                        <input type="checkbox" class="custom-control-input" id="viernes" value="V">
                                        <label class="custom-control-label" for="viernes">Activo</label>
                                    </div>
                                </td>
                                <td>Mensaje de servicio</td>
                                <td class="overflow-hidden">Hola <a class="text-success">nombre de usuario!</a>
                                    No olvides sacar tu material reciclable y entregarlos a <a class="text-success">Nombre Reciclador</a>  los días
                                    laborales del reciclador</td>
                                <td><button class="btn btn-primary" data-target="#modal3" data-toggle="modal">Editar</button></td>
                            </tr>
                            <tr class="border-bottom border-solid">
                                <td>
                                    <div class="custom-control custom-checkbox d-inline">
                                        <input type="checkbox" class="custom-control-input" id="viernes" value="V">
                                        <label class="custom-control-label" for="viernes">Activo</label>
                                    </div>
                                </td>
                                <td>Indicador ambiental</td>
                                <td class="overflow-hidden">Hola <a class="text-success">nombre de usuario!</a>
                                    Con tu ayuda, hemos ayudado a evitar la emision de X toneladas de CO2e</td>
                                <td><button class="btn btn-primary" data-target="#modal3" data-toggle="modal">Editar</button></td>
                            </tr>
                            <tr class="border-bottom border-solid">
                                <td>
                                    <div class="custom-control custom-checkbox d-inline">
                                        <input type="checkbox" class="custom-control-input" id="viernes" value="V">
                                        <label class="custom-control-label" for="viernes">Activo</label>
                                    </div>
                                </td>
                                <td>Mensaje de servicio</td>
                                <td class="overflow-hidden">Hola <a class="text-success">nombre de usuario!</a>
                                    No olvides sacar tu material reciclable y entregarlos a <a class="text-success">Nombre Reciclador</a> los días
                                    laborales del reciclador</td>
                                <td><button class="btn btn-primary" data-target="#modal3" data-toggle="modal">Editar</button></td>
                            </tr>
                            <tr class="border-bottom border-solid">
                                <td>
                                    <div class="custom-control custom-checkbox d-inline">
                                        <input type="checkbox" class="custom-control-input" id="viernes" value="V">
                                        <label class="custom-control-label" for="viernes">Activo</label>
                                    </div>
                                </td>
                                <td>Indicador ambiental</td>
                                <td class="overflow-hidden">Hola <a class="text-success">nombre de usuario!</a>
                                    Con tu ayuda, hemos ayudado a evitar la emision de X toneladas de CO2e</td>
                                <td><button class="btn btn-primary" data-target="#modal3" data-toggle="modal">Editar</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
    </div>

    <div class="card-footer">
        <div class="d-flex flex-row-reverse">
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
                <a data-target="#detallesModal22" data-toggle="modal" data-dismiss="modal">
                    <button type="button" class="btn btn-success">Confirmar edición</button>
                </a>
            </div>
        </div>
    </div>
</div>

@endsection

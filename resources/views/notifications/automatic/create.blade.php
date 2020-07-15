@extends('layouts.app')

@section('header')
<link rel="stylesheet" href="/css/notifications.css">
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h1 class="py-3 text-center text-success">
            Notificación automática
        </h1>
        <h3 class="lead text-center">
            Aquí podrás configurar la(s) notificación(es) automática(s) que deseas enviar de forma periódica a todos tus
            usuarios. Este tipo de notificaciones es de uso exclusivo para enviar mensajes de recordación sobre el
            servicio o el impacto ambiental generado por la corporación.
        </h3>
    </div>

    <div class="card-body">

        <main class="container contenedor">
            <section class="row">
                <label for="encendido" class="col-md-6 lead">Activación/Desativación de mensajes automáticos <button class="btn btn-info" type="button" data-toggle="tooltip"
                    data-placement="right" title="Esta opción de activación o desactivación permite bloquear o desbloquear todos lo(s) mensaje(s) automático(s) establecidos, respectivamente.">
                    <i class="fas fa-info-circle"></i>
                </button></label>
                <div class="col-md-6">
                    <label class="switch float-right">
                        <input id="encendido" type="checkbox">
                        <span class="slider"></span>
                    </label>
                </div>
                <h3 class="col-md-6 mt-3 mb-4">Mensajes automaticos establecidos:</h3>
                <section class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h4><strong>Servicio <button class="btn btn-info" type="button" data-toggle="tooltip"
                                data-placement="right" title="Mensajes de recordación del servicio de recolección a todos los usuarios">
                                <i class="fas fa-info-circle"></i>
                            </button></strong></h4>
                        </div>
                        <div class="col-md-6 lead">
                            <b>Condiciones de envío</b>
                        </div>
                        <div class="col-md-5">
                            <p class="bg-gray">Hola nombre de usuario!<br>No olvides sacar tu material reciclable y
                                entregarlos a Nombre Reciclador los días laborales del reciclador</p>
                        </div>
                        <div class="col-md-4">
                            <label for="frecuencia">
                                Frecuencia de envío <button class="btn btn-info" type="button" data-toggle="tooltip"
                                data-placement="right" title="Esta opción de selección te permite escoger la periodicidad con la cual deseas compartir el mensaje automático entre todos los usuarios. ">
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
                            <label class="switch float-right">
                                <input id="encendido" type="checkbox">
                                <span class="slider"></span>
                            </label>
                        </div>
                        <div class="col-md-6 mt-5">
                            <h4><strong>Indicador ambiental <button class="btn btn-info" type="button" data-toggle="tooltip"
                                data-placement="right" title="Mensaje sobre el impacto ambiental logrado por la corporación.">
                                <i class="fas fa-info-circle"></i>
                            </button></strong></h4>
                        </div>
                        <div class="col-md-6 mt-5 lead">
                            <b>Condiciones de envío</b>
                        </div>
                        <div class="col-md-5">
                            <p class="bg-gray">Hola nombre de usuario!<br>No olvides sacar tu material reciclable y
                                entregarlos a Nombre Reciclador los días laborales del reciclador</p>
                        </div>
                        <div class="col-md-4">
                            <label for="frecuencia">
                                Frecuencia de envío: <button class="btn btn-info" type="button" data-toggle="tooltip"
                                data-placement="right" title="Esta opción de selección te permite escoger la periodicidad con la cual deseas compartir el mensaje automático entre todos los usuarios. ">
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
                            <label class="switch float-right">
                                <input id="encendido" name="" type="checkbox">
                                <span class="slider "></span>
                            </label>
                        </div>
                    </div>
                </section>
            </section>
        </main>
    </div>

    <div class="card-footer">
        <div class="d-flex flex-row-reverse">
            <a data-toggle="modal" data-target="#detallesModal">
                <button type="submit" class="btn btn-success">Establecer</button>
            </a>
            <button onclick="history.back()" class="btn btn-danger mr-2">Regresar</button>
        </div>
    </div>
</div>

<div class="modal fade" id="detallesModal" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-success" id="favoritesModalLabel">Resumen de nueva notificación automática</h4>
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
                                <i class="fas fa-check-circle" style="width: 10% !important; height: 10% !important;"></i>
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

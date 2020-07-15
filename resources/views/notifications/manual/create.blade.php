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
            Aquí podrás configurar las notificaciones manuales que deseas enviar de forma periódica a todos tus usuarios
            o algunos de ellos. Este tipo de notificaciones es de uso exclusivo para enviar actualizaciones del servicio
            prestado por la corporaciones o actualizaciones sobre las condiciones de mejora de los recicladores
            asociados.
        </h3>
    </div>
    <div class="card-body">

        <main class="container contenedor">
            <section class="manual">
                <h3>Copiar nuevo mensaje:</h3>
                <form class="container-fluid" action="">
                    <textarea name="Mensaje" id="" cols="30" rows="10" maxlength="255"
                        placeholder="Ingresa el mensaje a enviar"></textarea>
                    <h3 class="col-md-11 mt-3 mb-3">Condiciones de envio:</h3>
                    <div class="row">
                        <div class="col-md-11 lead">
                            <label for="todos">Compartir este mensaje entre todos tus usuarios
                                <button class="btn btn-info" type="button" data-toggle="tooltip"
                                data-placement="right" title="Al activar esta opción, el mensaje manual será compartido entre todos los usuarios comprometidos con la corporación. En caso contrario, desactiva esta opción y específica las condiciones de envío por usuarios según su localidad o usuarios según el reciclador designado.">
                                <i class="fas fa-info-circle"></i>
                            </button>
                            </label>
                        </div>
                        <div class="col-md-1">
                            <label class="switch">
                                <input name="" id="todos" type="checkbox">
                                <span class="slider"></span>
                            </label>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-3 lead">
                            <label for="sectores">Selecciona los usuarios por localidad
                                <button class="btn btn-info" type="button" data-toggle="tooltip"
                                data-placement="right" title="Esta opción de selección te permite compartir el mensaje manual entre los usuarios según el municipio, comuna o barrio en donde se encuentren.">
                                <i class="fas fa-info-circle"></i>
                            </button>
                            </label>
                        </div>
                        <div id="sectores" class="col-md-8">
                            <select class="form-control" name="sector">
                                <option value="default">Localidades</option>
                            </select>
                            <span class="span-button" id="button_sectores">Agregar localidades</span>
                        </div>
                        <div class="col-md-1">
                            <label class="switch">
                                <input id="todos" type="checkbox">
                                <span class="slider"></span>
                            </label>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-3 lead">
                            <label for="reciclador">Selecciona los usuarios por reciclador asignado
                                <button class="btn btn-info" type="button" data-toggle="tooltip"
                                data-placement="right" title="Esta opción de selección te permite compartir el mensaje manual entre los usuarios que tienen asignado un reciclador en específico.">
                                <i class="fas fa-info-circle"></i>
                            </button>
                            </label>
                        </div>
                        <div id="reciclador" class="col-md-8">
                            <select class="form-control" name="reciclador">
                                <option value="default">Reciclador</option>
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
                        <div class="col-md-3 lead">
                            <label for="fecha">Compartir mensaje en otro momento
                                <button class="btn btn-info" type="button" data-toggle="tooltip"
                                data-placement="right" title="Esta opción alterna entre enviar el mensaje ya o en otro momento">
                                <i class="fas fa-info-circle"></i>
                            </button>
                            </label>
                        </div>
                        <div class="col-md-8">
                            <input class="form-control width-50" required name="fecha" id="fecha" type="date">
                            <input class="form-control width-50" required type="time" name="hora">
                        </div>
                        <div class="col-md-1">
                            <label class="switch">
                                <input name="" id="todos" type="checkbox">
                                <span class="slider"></span>
                            </label>
                        </div>
                    </div>
                </form>

                <?php /*
                @foreach ($notifications as $notification)
                <section class="mensaje row">
                    <p>
                        {{$notification -> body}}
                        <br>
                        <span>
                            Enviado el día
                            @php
                            $d = new DateTime('2011-01-01T15:03:01.012345Z');
                            echo $d -> format('d/m/Y') . " a las " . $d -> format('h:i:s') . (intval ($d -> format('H')) > 11 ? " pm" : " am");
                            @endphp 
                            </span>
                            <span class="titulo_menor">Mensaje manual</span>
                            </p>
                            </section>
                            @endforeach
                            */?>
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
<script>
    const sector_button = document.getElementById("button_sectores");
    const reciclador_button = document.getElementById("button_reciclador");
    const sectores = document.getElementById("sectores");
    const reciclador = document.getElementById("reciclador");
    sector_button.addEventListener("click", function () {
        const select = document.createElement("select");
        const opts = document.createElement("option");
        opts.innerText = "Localidades";
        opts.setAttribute("value", "new");
        select.setAttribute("class", "form-control");
        select.appendChild(opts);
        sectores.insertBefore(select, sector_button);
    });
    reciclador_button.addEventListener("click", function () {
        const select = document.createElement("select");
        const opts = document.createElement("option");
        opts.innerText = "Reciclador";
        opts.setAttribute("value", "new");
        select.setAttribute("class", "form-control");
        select.appendChild(opts);
        console.log(reciclador, reciclador_button);
        reciclador.insertBefore(select, reciclador_button);
    });

</script>

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
                    Mensajes establecido:
                </h3>
                <p class="lead">
                    Hola usuario, te notificamos que tu reciclaje no pudo ser recogido por las condiciones climaticas del día de ayer, el reciclador pasará por el hoy a las 5:00 PM
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

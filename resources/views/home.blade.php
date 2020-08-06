@extends('layouts.app')

@section('content')
<div class="card shadow">
    <div class="card-header">
        <h1 class="text-success text-center">
            ¡Bienvenido, Arreciclar!
        </h1>
        <p class="lead text-center">
            Aquí podrás visualizar la información más importante con la cual podrás moniterear la gestión de la corporación en Reciclapp.
        </p>
    </div>
    <div class="card-body">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-5 col-sm-12 border border-solid p-3 mr-2 mb-2">
                <h2 class="text-success text-center">
                    Ranking material recolectado
                </h2>
                <div class="row">
                    <div class="col-3 p-1 d-flex align-items-center">
                        <img src="/ranking_icon.png" alt="" class="border-solid border" style="width: 110px; height: 110px; margin-left: auto; margin-right: auto; display: block">
                    </div>
                    <div class="col-9 p-1">
                        <h1 for=" " class="lead text-center">Arreciclar</h1>
                        <h1 for=" " class="font-weight-bold text-center border-bottom border-solid pb-3">1ero</h1>
                        <table class="w-100 lead">
                            <thead>
                                <th></th>
                                <th></th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1. Arreciclar</td>
                                    <th>492 ton</th>
                                </tr>
                                <tr>
                                    <td>2. Corpooccidente</td>
                                    <th>350 ton</th>
                                </tr>
                                <tr>
                                    <td>3. Corporación campo santo</td>
                                    <th>176 ton</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-sm-12 border border-solid p-3 mb-2">
                <h2 class="text-success text-center">
                    Histórico material recolectado
                </h2>
                <div class="row">
                    <div class="col-3 p-1 d-flex align-items-center">
                        <img src="/co22_gris.png" alt="" class="border-solid border" style="width: 110px; height: 110px; margin-left: auto; margin-right: auto; display: block">
                    </div>
                    <div class="col-9 p-1">
                        <p class="lead text-center">Arreciclar</p>
                        <h1 for=" " class="font-weight-bold text-center border-bottom border-solid pb-3">764 ton</h1>
                        <table class="w-100 lead">
                            <thead>
                                <th></th>
                                <th></th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1. Jul 21/20 - Ago 07/20</td>
                                    <th>52 ton</th>
                                </tr>
                                <tr>
                                    <td>2. Jun 19/20 - Jul 20/20</td>
                                    <th>30 ton</th>
                                </tr>
                                <tr>
                                    <td>3. May 18/20 - Jun 18/20</td>
                                    <th>35 ton</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-sm-12 border border-solid p-2 mr-2 mb-2">
                <h2 class="text-success text-center">
                    <a href="{{url("/comunidad")}}">Mi comunidad</a>
                </h2>
                <div class="row">
                    <div class="col-3 p-1 d-flex align-items-center">
                    <img src="{{url("comunidad.png")}}" class="border-solid border p-1" style="width: 110px; height: 110px; margin-left: auto; margin-right: auto; display: block">
                    </div>
                    <div class="col-9 p-1">
                        <h1 for=" " class="lead text-center">Usuarios afiliados</h1>
                        <h1 for=" " class="font-weight-bold text-center border-bottom border-solid pb-3">45</h1>
                        <table class="w-100 lead">
                            <thead>
                                <th></th>
                                <th></th>
                            </thead>
                            <tbody>
                                <tr>
                                <td>1. Sara Valencia</td>
                                    <th class="text-danger font-weight-bold"><a href="{{url("/comunidad/asignarReciclador/Michel")}}">Pendiente de asignar</a></th>
                                </tr>
                                <tr>
                                <td>2. Torres de la magnolia</td>
                                    <th class="text-danger font-weight-bold"><a href="{{url("/comunidad/asignarReciclador/Unidad1")}}">Pendiente de asignar</a></th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-sm-12 border border-solid p-2 mb-2">
                <h2 class="text-success text-center">
                    <a href="{{url("/recicladores")}}">Mis recicladores</a> 
                </h2>
                <div class="row">
                    <div class="col-3 p-1 d-flex align-items-center">
                    <img src="{{url("recicladores.png")}}" class="border-solid border p-1" style="width: 110px; height: 110px; margin-left: auto; margin-right: auto; display: block">
                    </div>
                    <div class="col-9 p-1">
                        <h1 for=" " class="lead text-center">Recicladores afiliados</h1>
                        <h1 for=" " class="font-weight-bold text-center border-bottom border-solid pb-3">6</h1>
                        <table class="w-100 lead">
                            <thead>
                                <th></th>
                                <th></th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1. Reinaldo Ochoa</td>
                                    <th class="text-center"><a href="{{url("/editar")}}">12 usuarios</a></th>
                                </tr>
                                <tr>
                                    <td>2. Monica Garcia</a></td>
                                    <th class="text-center"><a href="{{url("/editar")}}">11 usuarios</a></th>
                                </tr>
                                <tr>
                                    <td>3. Armando López</td>
                                    <th class="text-center"><a href="{{url("/editar")}}">4 usuarios</a></th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xl-10 col-sm-12 border border-solid mb-2 pl-2 pr-2 pt-2">
                <h2 class="text-success text-center">
                <a href="{{url("/historial")}}">Tu histórico</a> 
                </h2>
                <div class="row h-100">
                    <div class="col-12">
                        <p for=" " class="lead font-weight-bold text-center border-bottom border-solid">Última fecha de corte: hace 5 días</p>
                    </div>
                    <div class="col-12">
                        <div class="input-group inline w-100 mb-2">
                            <label class="lead"><strong>Material: </strong></label>
                            <select class="form-control mr-3 ml-1" name="type" id="lista_materiales" style="display: inline">
                                <option>Metal</option>
                                <option>Plástico</option>
                                <option>Vidrio</option>
                                <option>Papel</option>
                                <option>Cartón</option>
                                <option>Todos</option>
                            </select>
                            <label for="" class="lead"><strong>Desde:</strong>  </label>
                            <input class="form-control ml-1 mr-3" type="date" id="fechacorte" name="fechacorte"
                                            value="1 Enero 2020" />
                            <label for="" class="lead"> <strong>Hasta:</strong> </label>
                            <input class="form-control ml-1" type="date" id="fechacorte" name="fechacorte"
                                            value="1 Enero 2020" />
                            <button type="submit" class="btn btn-primary mr-1 ml-2" onclick="mostrarGraficaDistinta()">Aplicar</button>
                        </div>
                    </div>
                    <div class="col-8 pr-1">
                        <img src="grafica.png" class="border border-solid" style="width: 100%; height: 80%;" id="Grafica">
                    </div>
                    <div class="col-4 pl-1">
                        <img src="torta.png" class="border-solid border" style="width: 100%; height: 80%;">
                    </div>
                </div>
            </div>
            <div class="col-10 border-solid border">
            <h2 class="text-success text-center mt-2"><a href="{{url("/notificaciones")}}">Mensajes programados</a> </h2>
                <div class="row">
                    <div class="col-12 pb-4">
                        <table class="mt-3 border-solid border">
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
                                    <td><button class="btn btn-outline-success ml-4" data-toggle="modal" data-target="#modal4"><i class="fas fa-edit fa-lg"></i></button></td>
                                </tr>
                                <tr class="border-bottom border-solid">
                                    <td>
                                        <br>
                                        <p class="text-center">5 Sep 2020 7:00AM</p>
                                    </td>
                                    <td>Mensaje de servicio</td>
                                    <td class="overflow-hidden"><a class="bg-warning text-white p-1">MAN</a> <br>Hola <a class="text-success">@nombre de usuario!</a> Durante Semana Santa, el/la <a class="text-success">@nombre del reciclador</a> 
                                        realizará su ruta el lunes 01 de abril de 2020 desde las 7:00 am hasta las 10:00 am. Ten presente de entregar el material en este horario.

                                        </td>
                                    <td><button class="btn btn-outline-success ml-4" data-toggle="modal" data-target="#modal5"><i class="fas fa-edit fa-lg"></i></button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                {{-- <h2 class="text-success text-center mt-2">Notificaciones</h2> --}}
                    
                    {{-- <div class="row">
                        <div class="col-6">
                            <div class="d-flex justify-content-center">
                                <label for="" class="lead font-weight-bold">Ultimos enviados</label>
                            </div>
                            <table class="mt-3">
                                <thead>
                                    <th class="col-2 p-1"></th>
                                    <th class="col-10 p-1 overflow-hidden"></th>
                                </thead>
                                <tbody>
                                    <tr class="border-bottom border-solid">
                                        <td>23 julio
                                            
                                        </td>
                                        <td class="overflow-hidden">
                                            <a class="bg-primary text-white p-1">AUT</a> <br>
                                            <p> Hola <a href="" class="text-success">@nombre de usuario!</a>
                                            No olvides sacar tu material reciclable y entregarlos a <a class="text-success">@nombre reciclador</a> los días
                                            laborales del reciclador</p>
                                            </td>
                                    </tr>
                                    <tr class="border-bottom border-solid">
                                        <td>
                                            19 de julio
                                        </td>
                                        <td class="overflow-hidden"><a class="bg-warning text-white p-1">MAN</a> <br>
                                            Hola <a class="text-success">@nombre de usuario!</a>
                                            El reciclador <a class="text-success">@nombre del reciclador</a> no pudo pasar el dia
                                            de ayer por el reciclaje por las condiciones climaticas. Pasará hoy a las 5:00PM
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-6">
                            <div class="d-flex justify-content-center">
                                <label for="" class="lead font-weight-bold">Proximos a enviar</label>
                            </div>
                            <table class="mt-3">
                                <thead>
                                    <th class="col-2 p-1"></th>
                                    <th class="col-10 p-1 overflow-hidden"></th>
                                </thead>
                                <tbody>
                                    <tr class="border-bottom border-solid">
                                        <td>
                                            <br>
                                            <p class="text-center">2 Sep 2020 8:00AM</p>
                                        </td>
                                        <td class="overflow-hidden"><a class="bg-warning text-white p-1">MAN</a> <br>Hola <a class="text-success">@nombre de usuario!</a>
                                            El reciclador asignado para esta semana es <a class="text-success">@nombre del reciclador</a> debido a que tu reciclador
                                                asignado estará en una capacitación.</td>
                                    </tr>
                                    <tr class="border-bottom border-solid">
                                        <td>
                                            <br>
                                            <p class="text-center">5 Sep 2020 7:00AM</p>
                                        </td>
                                        <td class="overflow-hidden"><a class="bg-warning text-white p-1">MAN</a> <br>Hola <a class="text-success">@nombre de usuario!</a>
                                            El pasado viernes no pudimos recolectar tu reciclaje pues el reciclador timbró y nadie entregó el reciclaje, tenlo en cuenta para la proxima entrega.
                                            </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-end mt-3 mb-3">
                            <a href="{{url("/notificaciones")}}">
                                    <button class="btn btn-success">Ver notificaciones</button>
                                </a>
                            </div>
                        </div>
                    </div> --}}
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
                                <img src="{{url("Exito.png")}}" alt="">
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
<script>
    function mostrarGraficaDistinta() {
        var lista_busqueda = document.getElementById("lista_materiales")
        var objeto_busqueda = lista_busqueda.selectedIndex;
        var grafica = document.getElementById("Grafica");
        console.log(objeto_busqueda);
        switch (objeto_busqueda) {
            case 0:
                grafica.setAttribute("src", "{{url("/graficaMetal.png")}}");
                break;
            case 1:
                grafica.setAttribute("src", "{{url("/graficaPlastico.png")}}");
                break;
            case 2:
                grafica.setAttribute("src", "{{url("/graficaVidrio.png")}}");
                break;
            case 3:
                grafica.setAttribute("src", "{{url("/graficaPapel.png")}}");
                break;
            case 4:
                grafica.setAttribute("src", "{{url("/graficaCarton.png")}}");
                break;
            case 5:
                grafica.setAttribute("src", "{{url("/grafica.png")}}");
            default:
                grafica.setAttribute("src", "{{url("/grafica.png")}}");
        }
        return 0;
    }
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

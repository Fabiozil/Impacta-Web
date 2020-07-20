@extends('layouts.app')

@section('content')
<div class="card shadow">
    <div class="card-header">
        <h1 class="py-3 text-center text-success">Mi comunidad</h1>
        <p class="lead text-center">Aquí podrás encontrar información acerca de los usuarios que hacen parte de su
            comunidad. Además, podrás visualizar los usuarios que hacen parte de otras corporaciones de reciclaje.</p>
    </div>
    <div class="border border-solid">
        <div class="d-flex flex-row-reverse p-2">
            <span class="btn btn-info mb-2 ml-0" data-toggle="tooltip" data-placement="top"
                title="Utiliza este botón para visualizar los usuarios que hacen parte de otras corporaciones de recicladores.">
                <i class="fas fa-info-circle"></i></span>
            <a href="{{ url('/comunidad/corporaciones') }}">
                <button type="submit" class="btn btn-success mb-2 mr-0 ml-2">Otras comunidades
                </button>
            </a>

            <span class="btn btn-info mb-2 ml-0" data-toggle="tooltip" data-placement="top"
                title="Utiliza este botón para visualizar los usuarios asignados y pendientes por asignación que hacen parte de su comunidad.">
                <i class="fas fa-info-circle"></i></span>
            <a href="#">
                <button type="submit" class="btn btn-outline-success mb-2 mr-0">Mi comunidad
                </button>
            </a>
        </div>
    </div>
    <div class="card-body">
        
        <div id="map" class="h-100 w-100" style="border:2px solid; ">
            <img src="{{url("/5.png")}}" alt="Mapa" style="z-index: 0; max-height: 100%; max-width: 100%" id="Mapa">

            <a data-toggle="tooltip" data-html="true" data-placement="left" title='
            <div class="row">
                <div class="col-12">
                    <img src="{{url("/corp_logo.png")}}" class="logo-corp" alt="Logo corporacion">
                    <h5>Reciclando Ando</h5>
                    <p>Se unió hace 2 años</p>
                    <p>Dirección: Diagonal 33B #39 sur 40</p>
                    <p>Telefóno: (4) 561 09 21</p>
                    <p>Recicladores agremiados: 5</p>
                    <p>Usuarios afiliados: 23</p>
                    <p>Emisiones evitadas: 200 ton CO2e</p>
                </div>
            </div>
            '
                style="position:absolute; margin-top: -20%; margin-left: 10%; z-index: 2; max-width: 100%; max-height: 100%">
                <img src="{{url("/corp_icon.png")}}" alt="Icono corporacion"
                    style="z-index: 2; max-width: 10%; max-height: 10%">
            </a>

            <a href="{{url("/editCorp")}}" data-toggle="tooltip" data-html="true" data-placement="left" title='
            <div class="row">
                <div class="col-12">
                    <img src="{{url("/corp_logo.png")}}" class="logo-corp border border-success rounded-circle" alt="Logo corporacion">
                    <h5>Reciclando Ando</h5>
                    <p>Se unió hace 2 años</p>
                    <p>Dirección: Diagonal 33B #39 sur 40</p>
                    <p>Telefóno: (4) 561 09 21</p>
{{--                     <p>Recicladores agremiados: 5</p>
                    <p>Usuarios afiliados: 23</p>
                    <p>Emisiones evitadas: 200 ton CO2e</p> --}}
                    <small>Haz click sobre el icono para editar tu corporación</small>
                </div>
            </div>
            ' style="position:absolute; margin-top: -8%; margin-left: 40%; z-index: 2; max-width: 5%">
                <img src="{{url("/Imagen_corporacion.png")}}" alt="Icono usuario"
                    style="z-index: 2; max-width: 100%; max-height: 100%">
            </a>
            <span data-toggle="modal" data-target="#detallesModal"
                style="position:absolute; margin-top: -24%; margin-left: 45%; z-index: 2; max-width: 3%;">
                <a data-toggle="tooltip" data-html="true" data-placement="left" title='
                <div class="row">
                    <div class="col-12">
                        <img src="{{url("/Harlan.jpg")}}" class="logo-corp border border-success rounded-circle" alt="Foto perfil">
                        <h5>Harlan Barrera</h5>
                        <p>Se unió hace 1 año</p>
                        {{-- <p>Dirección: Diagonal 32D #32 sur 40</p> --}}
                        {{-- <p>Municipio de Envigado</p> --}}
                        <p>Reciclador: Avimilé Ribas</p>
                        <small></small>
                    </div>
                </div>
                '>
                    <img src="{{url("/Vivienda_particular.png")}}" alt="Icono usuario"
                        style="z-index: 2; max-width: 100%; max-height: 100%" id="harlan">
                </a>
            </span>

            <span data-toggle="modal" data-target="#detallesModal6"
                style="position:absolute; margin-top: -27%; margin-left: 50%; z-index: 2; max-width: 3%;">
                <a data-toggle="tooltip" data-html="true" data-placement="left" title='
                <div class="row">
                    <div class="col-12">
                        <img src="{{url("/Michel.jpg")}}" class="logo-corp border border-success rounded-circle" alt="Foto perfil">
                        <h5>Raquel Murillo</h5>
                        <p>Se unió hace 2 años</p>
                        {{-- <p>Dirección: Diagonal 32D #32 sur 40</p> --}}
                        {{-- <p>Municipio de Envigado</p> --}}
                        <p>Reciclador: Stiven Mendoza</p>
                        <small></small>
                    </div>
                </div>
                '>
                    <img src="{{url("/Vivienda_particular.png")}}" alt="Icono usuario"
                        style="z-index: 2; max-width: 100%; max-height: 100%" id="raquel">
                </a>
            </span>

            <span data-toggle="modal" data-target="#detallesModal5"
                style="position:absolute; margin-top: -34%; margin-left: 43%; z-index: 2; max-width: 3%;">
                <a data-toggle="tooltip" data-html="true" data-placement="left" title='
                <div class="row">
                    <div class="col-12">
                        <img src="{{url("/Harlan.jpg")}}" class="logo-corp border border-success rounded-circle" alt="Foto perfil">
                        <h5>Andres Betancur</h5>
                        <p>Se unió hace 1 año</p>
                        {{-- <p>Dirección: Diagonal 32D #32 sur 40</p> --}}
                        {{-- <p>Municipio de Envigado</p> --}}
                        <p>Reciclador: Kevin Tellez</p>
                        <small></small>
                    </div>
                </div>
                '>
                    <img src="{{url("/Vivienda_particular.png")}}" alt="Icono usuario"
                        style="z-index: 2; max-width: 100%; max-height: 100%" id="harlan">
                </a>
            </span>

            <span data-toggle="modal" data-target="#detallesModal7"
                style="position:absolute; margin-top: -18%; margin-left: 36%; z-index: 2; max-width: 3%;">
                <a data-toggle="tooltip" data-html="true" data-placement="left" title='
                <div class="row">
                    <div class="col-12">
                        <img src="{{url("/Harlan.jpg")}}" class="logo-corp border border-success rounded-circle" alt="Foto perfil">
                        <h5>Kevin Viveros</h5>
                        <p>Se unió hace 1 año</p>
                        {{-- <p>Dirección: Diagonal 32D #32 sur 40</p> --}}
                        {{-- <p>Municipio de Envigado</p> --}}
                        <p>Reciclador: Avimilé Ribas</p>
                        <small></small>
                    </div>
                </div>
                '>
                    <img src="{{url("/Vivienda_particular.png")}}" alt="Icono usuario"
                        style="z-index: 2; max-width: 100%; max-height: 100%" id="kevin">
                </a>
            </span>


            <span data-toggle="modal" data-target="#detallesModal4"
                style="position:absolute; margin-top: -16%; margin-left: 75%; z-index: 2; max-width: 3%;">
                <a data-toggle="tooltip" data-html="true" data-placement="left" title='
                <div class="row">
                    <div class="col-12">
                        <img src="{{url("/Harlan.jpg")}}" class="logo-corp border border-success rounded-circle" alt="Foto perfil">
                        <h5>Fabio Benjamin</h5>
                        <p>Se unió hace 3 años</p>
                        {{-- <p>Dirección: Diagonal 32D #32 sur 40</p> --}}
                        {{-- <p>Municipio de Envigado</p> --}}
                        <p>Reciclador: Avimilé Ribas</p>
                        <small></small>
                    </div>
                </div>
                '>
                    <img src="{{url("/Vivienda_particular.png")}}" alt="Icono usuario"
                        style="z-index: 2; max-width: 100%; max-height: 100%" id="fabio">
                </a>
            </span>

            <span data-toggle="modal" data-target="#detallesModal3"
                style="position:absolute; margin-top: -22%; margin-left: 50%; z-index: 2; max-width: 3%;">
                <a data-toggle="tooltip" data-html="true" data-placement="left" title='
                <div class="row">
                    <div class="col-12">
                        <img src="{{url("/unidad1.jpg")}}" class="logo-corp border border-success rounded-circle" alt="Foto perfil">
                        <h5>Torres de la magnolia</h5>
                        <p>Se unió hace 2 años</p>
                        {{-- <p>Dirección: Diagonal 32D #32 sur 40</p> --}}
                        {{-- <p>Municipio de Envigado</p> --}}
                        <p class="text-danger">Reciclador: Sin designar</p>
                        <small></small>
                    </div>
                </div>
                '>
                    <img src="{{url("/Admon_residencial.png")}}" alt="Icono usuario"
                        style="z-index: 2; max-width: 100%; max-height: 100%" id="torres_magnolia">
                </a>
            </span>

            <span data-toggle="modal" data-target="#detallesModal1"
                style="position:absolute; margin-top: -28%; margin-left: 28%; z-index: 2; max-width: 3%">
                <a data-toggle="tooltip" data-html="true" data-placement="left" title='
                <div class="row">
                    <div class="col-12">
                        <img src="{{url("/Michel.jpg")}}" class="logo-corp border border-success rounded-circle" alt="Logo corporacion">
                        <h5>Michel Osama</h5>
                        <p>Se unió hace 1 día</p>
                        {{-- <p>Dirección: Diagonal 28C 28 sur 25</p>
                        <p>Municipio de Envigado</p> --}}
                        <p class="text-danger">Reciclador: Sin designar</p>
                        <small></small>
                    </div>
                </div>
                '>
                    <img src="{{url("/Vivienda_particularE.png")}}" alt="Icono corporacion"
                        style="z-index: 2; max-width: 110%; max-height: 100%">
                </a>
            </span>
            <span data-toggle="modal" data-target="#detallesModal2"
                style="position:absolute; margin-top: -34%; margin-left: 10%; z-index: 2; max-width: 3%;">
                <a data-toggle="tooltip" data-html="true" data-placement="left" title='
                <div class="row">
                    <div class="col-12">
                        <img src="{{url("/unidad1.jpg")}}" class="logo-corp border border-success rounded-circle" alt="Foto unidad">
                        <h5>Torres del riachuelo</h5>
                        <p>Se unió hace 1 año</p>
                        {{-- <p>Apartamentos: 89<p> --}}
                        {{-- <p>Dirección: Calle 62B Carrera 50</p>
                        <p>Municipio de Itagui</p> --}}
                        <p>Reciclador: German Exequiel Cano</p>
                        <small></small>
                    </div>
                </div>
                '>
                    <img src="{{url("/Admon_residencial.png")}}" alt="Icono corporacion"
                        style="z-index: 2; max-width: 100%; max-height: 100%">
                </a>

            </span>


        </div>
    </div>
    <div class="card-footer">
        <div class="input-group inline w-100 mb-2">
            <label for="" class="lead mr-2">Opciones de busqueda:</label>
            <select class="form-control mr-1" name="type" id="lista_busqueda" style="display: inline">
                <option value="Nombre de reciclador(a)">Nombre de reciclador(a)</option>
                <option value="Localidad: Barrio">Localidad: Barrio</option>
                <option value="1">Localidad: Sector</option>
                <option value="2">Localidad: Municipio</option>
                <option value="3">Localidad: Comuna</option>
            </select>
            <input class="form-control" name="busqueda" autofocus placeholder="Busqueda" style="display: inline">
            <div class="input-group-append">
                <span class="btn btn-info" data-toggle="tooltip" data-placement="top"
                    title="Utiliza esta opción de búsqueda para encontrar los usuarios de tu comunidad a partir de la zonas en donde viven o el reciclador asignado.">
                    <i class="fas fa-info-circle"></i></span>
            </div>
            <button onclick="mostrarMapaDistinto()" class="btn btn-success mr-1 ml-2">Buscar</button>
            <a href="{{ url('/usuarios') }}">
                <button type="submit" class="btn btn-primary mr-1 ml-2">Ver en lista</button>
            </a>
        </div>
    </div>
</div>
{{-- Modal Harlan Barrera --}}
<div class="modal fade" id="detallesModal" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-success" id="favoritesModalLabel">Información del usuario</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-12 borde-derecha h-100">
                            <div class="row h-100">
                                <div class="container border-right">
                                    <div class="row">
                                        <div class="col-xl-12 h-100">
                                            <div class="container">
                                                <img src="{{url("/harlan.jpg")}}"
                                                    class="imgpg border border-success rounded-circle"
                                                    alt="">
                                                <div class="mt-2 ml-1 mr-1 text-center">
                                                    <h3><strong>Harlan Barrera</strong></h3>
                                                    <p>Se unió hace 1 año</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-12 h-100">
                            <div class="row h-100">
                                <div class="col-xl-10 h-100">
                                        <div class="container pt-4">
                                            <div class="row">
                                                <label class="lead"><strong>Reciclador:  </strong></label>
                                                <p class="p-1">Avimilé Ribas</p>
                                                <a href="{{url("/comunidad/asignarReciclador/Harlan")}}">
                                                    <button class="btn btn-outline-success btn-sm ml-2" data-toggle="modal" data-target="#editarHistoria"
                                                        data-backdrop="static">
                                                        <i class="fas fa-edit fa-lg"></i>
                                                    </button>
                                                </a>
                                            </div>
                                            <div class="row">
                                                <label class="lead"><strong>Tipo de usuario:  </strong></label>
                                                <p class="p-1">Vivienda</p>
                                            </div>
                                            <div class="row">
                                                <label class="lead"><strong>Municipio:  </strong></label>
                                                <p class="p-1">Envigado</p>
                                            </div>
                                            <div class="row">
                                                <label class="lead"><strong>Dirección:  </strong></label>
                                                <p class="p-1">Diagonal 32D #32 sur 40</p>
                                            </div>
                                            <div class="row">
                                                <label class="lead"><strong>Condición de entrega:  </strong></label>
                                                <p class="p-1">Tocar el timbre</p>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer p-1">
                <span class="pull-right"><button type="button" class="btn btn-danger"
                        data-dismiss="modal">Regresar</button></span>
            </div>
        </div>
    </div>
</div>

{{-- //Modal Michel --}}
<div class="modal fade" id="detallesModal1" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-success" id="favoritesModalLabel">Información del usuario</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-12 borde-derecha h-100">
                                    <div class="row h-100">
                                        <div class="container h-80 border-right">
                                            <div class="row">
                                                <div class="col-xl-12 h-100">
                                                    <div class="container">
                                                        <div class="py-5">
                                                        </div>
                                                        <img src="{{url("/Michel.jpg")}}"
                                                            class="logo-corpr logo-corp border border-success rounded-circle"
                                                            alt="">
                                                        <div class="py-4 text-center">
                                                            <p>Michel Osama</p>
                                                            <p>Se unió hace 1 año</p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-12 borde-derecha h-100">
                                    <div class="row h-100">
                                        <div class="container h-95">
                                            <div class="row h-100">
                                                <div class="col-xl-10">
                                                    <div class="py-5 subtitle">

                                                    </div>
                                                    <br>

                                                    <div class="container cont-rec-nf m-0">
                                                        <form>
                                                            <div class="form-group w-100">
                                                                <div class="form-group row text-danger">
                                                                    <p>Reciclador: </p>
                                                                    <div class="col-sm-10">
                                                                        <p>Pendiente de asignar</p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <p>Dirección: </p>
                                                                    <div class="col-sm-10">
                                                                        <p>Diagonal 32D #32 sur 40</p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <p>Municipio: </p>
                                                                    <div class="col-sm-10">
                                                                        <p>Envigado</p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <p>Metodo de recolección: </p>
                                                                    <div class="col-sm-10">
                                                                        <p>Tocar el timbre</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <span class="pull-right"><button type="button" class="btn btn-danger"
                        data-dismiss="modal">Cerrar</button></span>
                <a href="{{url("/comunidad/asignarReciclador/Michel")}}">
                    <button type="button" class="btn btn-success">Asignar reciclador</button></span>
                </a>


            </div>
        </div>
    </div>
</div>

{{-- Modal Torres del riachuelo --}}

<div class="modal fade" id="detallesModal2" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-success" id="favoritesModalLabel">Información del usuario</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-12 borde-derecha h-100">
                                    <div class="row h-100">
                                        <div class="container h-80 border-right">
                                            <div class="row">
                                                <div class="col-xl-12 h-100">
                                                    <div class="container">
                                                        <div class="py-5">
                                                        </div>
                                                        <img src="{{url("/harlan.jpg")}}"
                                                            class="logo-corpr logo-corp border border-success rounded-circle"
                                                            alt="">
                                                        <div class="py-4 text-center">
                                                            <p>Torres del riachuelo</p>
                                                            <p>Se unió hace 1 año</p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-12 borde-derecha h-100">
                                    <div class="row h-100">
                                        <div class="container h-95">
                                            <div class="row h-100">
                                                <div class="col-xl-10">
                                                    <div class="py-5 subtitle">

                                                    </div>
                                                    <br>

                                                    <div class="container cont-rec-nf m-0">
                                                        <form>
                                                            <div class="form-group w-100">
                                                                <div class="form-group row">
                                                                    <p class="lead">Reciclador: </p>
                                                                    <div class="col-sm-10">
                                                                        <p>German Exequiel Cano</p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <p>Dirección: </p>
                                                                    <div class="col-sm-10">
                                                                        <p>Calle 62B Carrera 50</p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <p>Municipio: </p>
                                                                    <div class="col-sm-10">
                                                                        <p>Envigado</p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <p>Numero de residencias: </p>
                                                                    <div class="col-sm-10">
                                                                        <p>12</p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <p>Metodo de recolección: </p>
                                                                    <div class="col-sm-10">
                                                                        <p>Tocar el timbre</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <span class="pull-right"><button type="button" class="btn btn-danger"
                        data-dismiss="modal">Cerrar</button></span>
                <a href="{{url("/comunidad/asignarReciclador/TorresDelRiachuelo")}}">
                    <button type="button" class="btn btn-success">Editar reciclador</button></span>
                </a>


            </div>
        </div>
    </div>
</div>

{{-- Modal torres de la magnolia --}}

<div class="modal fade" id="detallesModal3" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-success" id="favoritesModalLabel">Información del usuario</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-12 borde-derecha h-100">
                                    <div class="row h-100">
                                        <div class="container h-80 border-right">
                                            <div class="row">
                                                <div class="col-xl-12 h-100">
                                                    <div class="container">
                                                        <div class="py-5">
                                                        </div>
                                                        <img src="{{url("/unidad1.jpg")}}"
                                                            class="logo-corpr logo-corp border border-success rounded-circle"
                                                            alt="">
                                                        <div class="py-4 text-center">
                                                            <p>Torres de la Mangolia</p>
                                                            <p>Se unió hace 2 dias</p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-12 borde-derecha h-100">
                                    <div class="row h-100">
                                        <div class="container h-95">
                                            <div class="row h-100">
                                                <div class="col-xl-10">
                                                    <div class="py-5 subtitle">

                                                    </div>
                                                    <br>

                                                    <div class="container cont-rec-nf m-0">
                                                        <form>
                                                            <div class="form-group w-100">
                                                                <div class="form-group row text-danger">
                                                                    <p>Reciclador: </p>
                                                                    <div class="col-sm-10">
                                                                        <p>Pendiente de asignar</p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <p>Dirección: </p>
                                                                    <div class="col-sm-10">
                                                                        <p>Diagonal 32B #32 sur 42</p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <p>Municipio: </p>
                                                                    <div class="col-sm-10">
                                                                        <p>Envigado</p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <p>Numero de residencias: </p>
                                                                    <div class="col-sm-10">
                                                                        <p>5</p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <p>Metodo de recolección: </p>
                                                                    <div class="col-sm-10">
                                                                        <p>Hablar con recepcionista</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <span class="pull-right"><button type="button" class="btn btn-danger"
                        data-dismiss="modal">Cerrar</button></span>
                <a href="{{url("/comunidad/asignarReciclador/Michel")}}">
                    <button type="button" class="btn btn-success">Asignar reciclador</button></span>
                </a>


            </div>
        </div>
    </div>
</div>

{{-- Modal Fabio Bejamin  --}}

<div class="modal fade" id="detallesModal4" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-success" id="favoritesModalLabel">Información del usuario</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-12 borde-derecha h-100">
                                    <div class="row h-100">
                                        <div class="container h-80 border-right">
                                            <div class="row">
                                                <div class="col-xl-12 h-100">
                                                    <div class="container">
                                                        <div class="py-5">
                                                        </div>
                                                        <img src="{{url("/harlan.jpg")}}"
                                                            class="logo-corpr logo-corp border border-success rounded-circle"
                                                            alt="">
                                                        <div class="py-4 text-center">
                                                            <p>Fabio Benjamin</p>
                                                            <p>Se unió hace 1 año</p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-12 borde-derecha h-100">
                                    <div class="row h-100">
                                        <div class="container h-95">
                                            <div class="row h-100">
                                                <div class="col-xl-10">
                                                    <div class="py-5 subtitle">

                                                    </div>
                                                    <br>

                                                    <div class="container cont-rec-nf m-0">
                                                        <form>
                                                            <div class="form-group w-100">
                                                                <div class="form-group row">
                                                                    <p>Reciclador: </p>
                                                                    <div class="col-sm-10">
                                                                        <p>Avimilé Ribas</p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <p>Dirección: </p>
                                                                    <div class="col-sm-10">
                                                                        <p>Diagonal 32D #32 sur 40</p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <p>Municipio: </p>
                                                                    <div class="col-sm-10">
                                                                        <p>Envigado</p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <p>Metodo de recolección: </p>
                                                                    <div class="col-sm-10">
                                                                        <p>Tocar el timbre</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <span class="pull-right"><button type="button" class="btn btn-danger"
                        data-dismiss="modal">Cerrar</button></span>
                <a href="{{url("/comunidad/asignarReciclador/Harlan")}}">
                    <button type="button" class="btn btn-success">Editar reciclador</button></span>
                </a>


            </div>
        </div>
    </div>
</div>
{{-- 
Modal Andres Betancur --}}

<div class="modal fade" id="detallesModal5" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-success" id="favoritesModalLabel">Información del usuario</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-12 borde-derecha h-100">
                                    <div class="row h-100">
                                        <div class="container h-80 border-right">
                                            <div class="row">
                                                <div class="col-xl-12 h-100">
                                                    <div class="container">
                                                        <div class="py-5">
                                                        </div>
                                                        <img src="{{url("/harlan.jpg")}}"
                                                            class="logo-corpr logo-corp border border-success rounded-circle"
                                                            alt="">
                                                        <div class="py-4 text-center">
                                                            <p>Andres Betancur</p>
                                                            <p>Se unió hace 1 año</p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-12 borde-derecha h-100">
                                    <div class="row h-100">
                                        <div class="container h-95">
                                            <div class="row h-100">
                                                <div class="col-xl-10">
                                                    <div class="py-5 subtitle">

                                                    </div>
                                                    <br>

                                                    <div class="container cont-rec-nf m-0">
                                                        <form>
                                                            <div class="form-group w-100">
                                                                <div class="form-group row">
                                                                    <p>Reciclador: </p>
                                                                    <div class="col-sm-10">
                                                                        <p>Kevin Tellez</p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <p>Dirección: </p>
                                                                    <div class="col-sm-10">
                                                                        <p>Calle 16 sur #14</p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <p>Municipio: </p>
                                                                    <div class="col-sm-10">
                                                                        <p>Envigado</p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <p>Metodo de recolección: </p>
                                                                    <div class="col-sm-10">
                                                                        <p>Tocar el citófono</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <span class="pull-right"><button type="button" class="btn btn-danger"
                        data-dismiss="modal">Cerrar</button></span>
                <a href="{{url("/comunidad/asignarReciclador/Harlan")}}">
                    <button type="button" class="btn btn-success">Editar reciclador</button></span>
                </a>


            </div>
        </div>
    </div>
</div>

{{-- Modal Raquel Murillo --}}

<div class="modal fade" id="detallesModal6" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-success" id="favoritesModalLabel">Información del usuario</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-12 borde-derecha h-100">
                                    <div class="row h-100">
                                        <div class="container h-80 border-right">
                                            <div class="row">
                                                <div class="col-xl-12 h-100">
                                                    <div class="container">
                                                        <div class="py-5">
                                                        </div>
                                                        <img src="{{url("/Michel.jpg")}}"
                                                            class="logo-corpr logo-corp border border-success rounded-circle"
                                                            alt="">
                                                        <div class="py-4 text-center">
                                                            <p>Raquel Murillo</p>
                                                            <p>Se unió hace 1 año</p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-12 borde-derecha h-100">
                                    <div class="row h-100">
                                        <div class="container h-95">
                                            <div class="row h-100">
                                                <div class="col-xl-10">
                                                    <div class="py-5 subtitle">

                                                    </div>
                                                    <br>

                                                    <div class="container cont-rec-nf m-0">
                                                        <form>
                                                            <div class="form-group w-100">
                                                                <div class="form-group row">
                                                                    <p>Reciclador: </p>
                                                                    <div class="col-sm-10">
                                                                        <p>Stiven Mendoza</p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <p>Dirección: </p>
                                                                    <div class="col-sm-10">
                                                                        <p>Diagonal 33 #32 sur 37</p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <p>Municipio: </p>
                                                                    <div class="col-sm-10">
                                                                        <p>Envigado</p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <p>Metodo de recolección: </p>
                                                                    <div class="col-sm-10">
                                                                        <p>Deja el reciclaje en la puerta</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <span class="pull-right"><button type="button" class="btn btn-danger"
                        data-dismiss="modal">Cerrar</button></span>
                <a href="{{url("/comunidad/asignarReciclador/Harlan")}}">
                    <button type="button" class="btn btn-success">Editar reciclador</button></span>
                </a>


            </div>
        </div>
    </div>
</div>

{{-- //Kevin Viveros --}}
<div class="modal fade" id="detallesModal7" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-success" id="favoritesModalLabel">Información del usuario</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-12 borde-derecha h-100">
                                    <div class="row h-100">
                                        <div class="container h-80 border-right">
                                            <div class="row">
                                                <div class="col-xl-12 h-100">
                                                    <div class="container">
                                                        <div class="py-5">
                                                        </div>
                                                        <img src="{{url("/Harlan.jpg")}}"
                                                            class="logo-corpr logo-corp border border-success rounded-circle"
                                                            alt="">
                                                        <div class="py-4 text-center">
                                                            <p>Kevin Viveros</p>
                                                            <p>Se unió hace 2 años</p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-12 borde-derecha h-100">
                                    <div class="row h-100">
                                        <div class="container h-95">
                                            <div class="row h-100">
                                                <div class="col-xl-10">
                                                    <div class="py-5 subtitle">

                                                    </div>
                                                    <br>

                                                    <div class="container cont-rec-nf m-0">
                                                        <form>
                                                            <div class="form-group w-100">
                                                                <div class="form-group row">
                                                                    <p>Reciclador: </p>
                                                                    <div class="col-sm-10">
                                                                        <p>Avimilé Ribas</p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <p>Dirección: </p>
                                                                    <div class="col-sm-10">
                                                                        <p>Calle 33 #16 sur</p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <p>Municipio: </p>
                                                                    <div class="col-sm-10">
                                                                        <p>Envigado</p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <p>Metodo de recolección: </p>
                                                                    <div class="col-sm-10">
                                                                        <p>Llamar al telefonó</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <span class="pull-right"><button type="button" class="btn btn-danger"
                        data-dismiss="modal">Cerrar</button></span>
                <a href="{{url("/comunidad/asignarReciclador/Michel")}}">
                    <button type="button" class="btn btn-success">Editar reciclador</button></span>
                </a>


            </div>
        </div>
    </div>
</div>

<script>
    function mostrarMapaDistinto() {
        var lista_busqueda = document.getElementById("lista_busqueda");
        var objeto_busqueda = lista_busqueda.selectedIndex;
        var mapa = document.getElementById("Mapa");
        var harlan = document.getElementById("harlan");
        var torres_magnolia = document.getElementById("torres_magnolia");
        var fabio = document.getElementById("fabio");
        var kevin = document.getElementById("kevin");
        var raquel = document.getElementById("raquel");
        console.log(objeto_busqueda);
        console.log(lista_busqueda);
        if (objeto_busqueda == 1) {
            mapa.setAttribute("src", "{{url(" / mapaBarrio.png ")}}");
            harlan.setAttribute("src", "{{url(" / Vivienda_particularR.png ")}}");
            torres_magnolia.setAttribute("src", "{{url(" / Admon_residencialR.png ")}}");
            fabio.setAttribute("src", "{{url(" / Vivienda_particular.png ")}}");
            kevin.setAttribute("src", "{{url(" / Vivienda_particular.png ")}}");
            raquel.setAttribute("src", "{{url(" / Vivienda_particularR.png ")}}");
        } else {
            if (objeto_busqueda == 0) {
                mapa.setAttribute("src", "{{url(" / 5. png ")}}");
                harlan.setAttribute("src", "{{url(" / Vivienda_particularR.png ")}}");
                torres_magnolia.setAttribute("src", "{{url(" / Admon_residencial.png ")}}");
                fabio.setAttribute("src", "{{url(" / Vivienda_particularR.png ")}}");
                kevin.setAttribute("src", "{{url(" / Vivienda_particularR.png ")}}");
                raquel.setAttribute("src", "{{url(" / Vivienda_particular.png ")}}");
            } else {
                mapa.setAttribute("src", "{{url(" / 5. png ")}}");
                harlan.setAttribute("src", "{{url(" / Vivienda_particular.png ")}}");
                torres_magnolia.setAttribute("src", "{{url(" / Admon_residencial.png ")}}");
                fabio.setAttribute("src", "{{url(" / Vivienda_particular.png ")}}");
                kevin.setAttribute("src", "{{url(" / Vivienda_particular.png ")}}");
                raquel.setAttribute("src", "{{url(" / Vivienda_particular.png ")}}");
            }
        }
    }

</script>


@endsection

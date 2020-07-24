@extends('layouts.app')
@section('navbar-left')
<input type="text" class="form-control ml-2" placeholder="Buscar reciclador" aria-label="Buscador de recicladores" aria-describedby="filtrar">
            <div class="input-group-append">
                <button class="btn btn-outline-success" type="button" id="filtrar" onclick="buscar()">
                <i class="fas fa-search"></i></button>
            </div>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h1 class="py-3 text-center text-success">Otras comunidades</h1>
        <h3 class="lead text-center">Aquí podrás encontrar información acerca de los usuarios que hacen parte de otras corporaciones de recicladores.</h3>
    </div>
    <div class="border-bottom border-solid">
        <div class="d-flex flex-row pl-2 pt-1">
        <a href="{{url("/comunidad")}}">
                <button type="submit" class="btn btn-success mb-2 mr-0"><i class="fas fa-users mr-1"></i>Mi comunidad
                </button>
            </a>
            <span class="btn btn-info mb-2 ml-0 mr-2" data-toggle="tooltip" data-placement="top"
                title="Utiliza este botón para visualizar los usuarios asignados y pendientes por asignación que hacen parte de su comunidad.">
                <i class="fas fa-info-circle"></i></span>
                
            <a href="#">
                <button type="submit" class="btn btn-outline-success mb-2 mr-0 ml-2">Otras comunidades
                </button>
            </a>
            <span class="btn btn-info mb-2 ml-0" data-toggle="tooltip" data-placement="top"
                title="Utiliza este botón para visualizar los usuarios que hacen parte de otras corporaciones de recicladores.">
                <i class="fas fa-info-circle"></i></span>

        </div>
    </div>
    <div class="card-body">

        <div id="map" class="h-100 w-100" style="border:2px solid;">
            <img src="{{url("/5.png")}}" alt="Mapa" style="max-height: 100%; max-width: 100%">
            <a href="{{url("/editCorp")}}" data-toggle="tooltip" data-html="true" data-placement="left" 
            title='
            <div class="row">
                <div class="col-12">
                    <img src="{{url("/corp_logo.png")}}" class="logo-corp" alt="Logo corporacion">
                    <h5><strong>Reciclando Ando</strong></h5>
                    <p>Se unió hace 2 años</p>
                    {{-- <p>Dirección: Diagonal 33B #39 sur 40</p>
                    <p>Telefóno: (4) 561 09 21</p> --}}
                    <p><strong>Recicladores agremiados:</strong> 5</p>
                    <p><strong>Usuarios afiliados:</strong> 23</p>
                    {{-- <p>Emisiones evitadas: 200 ton CO2e</p> --}}
                </div>
            </div>
            '
            style="position:absolute; margin-top: -8%; margin-left: 40%; z-index: 2; max-width: 5%">
                <img src="{{url("/Corporacion_otro.png")}}" alt="Icono usuario" style="z-index: 2; max-width: 100%; max-height: 100%">
            </a>

            <a href="{{ url('/resultadosCorp') }}" style="position:absolute; margin-top: -40%; margin-left: 2%; z-index: 2; height: 40px !important; width: 40px !important">
                <i class="fas fa-list bg-primary rounded-circle border border-primary p-1" style="width: 100% !important; height: 100% !important;"></i>
            </a>

            
            <a href="{{url("/editCorp")}}" data-toggle="tooltip" data-html="true" data-placement="left" 
            title='
            <div class="row">
                <div class="col-12">
                    <img src="{{url("/corp_logo.png")}}" class="logo-corp" alt="Logo corporacion">
                    <h5><strong>Reciclando Ando</strong></h5>
                    <p>Se unió hace 2 años</p>
                    {{-- <p>Dirección: Diagonal 33B #39 sur 40</p>
                    <p>Telefóno: (4) 561 09 21</p> --}}
                    <p><strong>Recicladores agremiados:</strong> 3</p>
                    <p><strong>Usuarios afiliados:</strong> 23</p>
                    {{-- <p>Emisiones evitadas: 200 ton CO2e</p> --}}
                    <small>Haz click sobre el icono para editar tu corporación</small>
                </div>
            </div>
            '
            style="position:absolute; margin-top: -8%; margin-left: 40%; z-index: 2; max-width: 5%">
                <img src="{{url("/Imagen_corporacion.png")}}" alt="Icono usuario" style="z-index: 2; max-width: 100%; max-height: 100%">
            </a>

            <span style="position:absolute; margin-top: -35%; margin-left: 56%; z-index: 2; max-width: 4%" data-toggle="modal"
            data-target="#detallesModal1">
                <a data-toggle="tooltip" data-html="true" data-placement="left" 
                    title='
                <div class="row">
                    <div class="col-12">
                        <img src="{{url("/corp_logo3.png")}}" class="logo-corp" alt="Logo corporacion">
                        <h5><strong>EIA Recicla</strong></h5>
                        <p>Se unió hace 2 años</p>
                        {{-- <p>Dirección: Calle 22 sur Carrera 42b</p>
                        <p>Telefóno: (4) 312 17 54</p> --}}
                        <p><strong>Recicladores agremiados:</strong> 9</p>
                        <p><strong>Usuarios afiliados:</strong> 37</p>
                        {{-- <p>Emisiones evitadas: 274 ton CO2e</p> --}}
                        <small></small>
                    </div>
                </div>
                '>
                    <img src="{{url("/Corporacion_otro.png")}}" alt="Icono usuario" style="z-index: 2; max-width: 100%; max-height: 100%">
                </a>
            </span>

            <span style="position:absolute; margin-top: -12%; margin-left: 84%; z-index: 2; max-width: 4%" data-toggle="modal"
            data-target="#detallesModal2">
                <a data-toggle="tooltip" data-html="true" data-placement="left" 
                title='
                <div class="row">
                    <div class="col-12">
                        <img src="{{url("/corp_logo1.png")}}" class="logo-corp" alt="Logo corporacion">
                        <h5><strong>Recicladores las lomas</strong></h5>
                        <p>Se unió hace 1 año</p>
                        {{-- <p>Dirección: Calle 27 sur carrera 22</p>
                        <p>Telefóno: (4) 331 41 13</p> --}}
                        <p><strong>Recicladores agremiados:</strong> 4</p>
                        <p><strong>Usuarios afiliados:</strong> 19</p>
                        {{-- <p>Emisiones evitadas: 77 ton CO2e</p> --}}
                        <small></small>
                    </div>
                </div>
                '>
                    <img src="{{url("/Corporacion_otro.png")}}" alt="Icono usuario" style="z-index: 2; max-width: 100%; max-height: 100%">
                </a>
        </span>

        <span data-toggle="modal"
        data-target="#detallesModal" style="position:absolute; margin-top: -31%; margin-left: 20%; z-index: 2; max-width: 4%">
                <a  data-toggle="tooltip"  data-html="true" data-placement="left" 
                title='
                <div class="row">
                    <div class="col-12">
                        <img src="{{url("/corp_logo2.png")}}" class="logo-corp" alt="Logo corporacion">
                        <h5><strong>RecItagui</strong></h5>
                        <p>Se unió hace 3 años</p>
                        <p><strong>Recicladores agremiados:</strong> 12</p>
                        <p><strong>Usuarios afiliados:</strong> 45</p>
                        <small></small>
                    </div>
                </div>
                '>
                <img src="{{url("/Corporacion_otro.png")}}" alt="Icono usuario" style="z-index: 2; max-width: 100%; max-height: 100%">
                </a>
            </span>
        </div>
        <a data-toggle="tooltip" data-html="true"
                data-placement="left" title='
            <div class="row">
                <div class="col-12">
                    <h5 class="border-bottom border-solid"><strong>Vivienda</strong></h5>
                    <p>Se unió hace 26 días</p>
                    {{-- <p>Dirección: Diagonal 28C 28 sur 25</p>
                    <p>Municipio de Envigado</p> --}}
                    <p>Corporaión a la que pertenece: Recicladores las lomas</p>
                </div>
            </div>
            ' style="position:absolute; margin-top: -18%; margin-left: 68%; z-index: 2; max-width: 4%">
                <img src="{{url("/Vivienda_particular_otro.png")}}" alt="Icono corporacion"
                    style="z-index: 2; max-width: 110%; max-height: 100%">
        </a>
        <a data-toggle="tooltip" data-html="true"
            data-placement="left" title='
        <div class="row">
            <div class="col-12">
                <h5 class="border-solid border-bottom"><strong>Unidad residencial</strong></h5>
                <p>Se unió hace 12 día</p>
                {{-- <p>Dirección: Diagonal 28C 28 sur 25</p>
                <p>Municipio de Envigado</p> --}}
                <p><strong>Corporación:</strong> RecItagui</p>
            </div>
        </div>
        ' style="position:absolute; margin-top: -28%; margin-left: 38%; z-index: 2; max-width: 3%">
            <img src="{{url("/Admon_residencial_otro.png")}}" alt="Icono corporacion"
                style="z-index: 2; max-width: 110%; max-height: 100%">
        </a>
        <a data-toggle="tooltip" data-html="true"
            data-placement="left" title='
        <div class="row">
            <div class="col-12">
                <h5 class="border-solid border-bottom"><strong>Unidad residencial</strong></h5>
                <p>Se unió hace 3 meses</p>
                {{-- <p>Dirección: Diagonal 28C 28 sur 25</p>
                <p>Municipio de Envigado</p> --}}
                <p><strong>Corporación:</strong> EIA Recicla</p>
            </div>
        </div>
        ' style="position:absolute; margin-top: -38%; margin-left: 47%; z-index: 2; max-width: 3%">
            <img src="{{url("/Admon_residencial_otro.png")}}" alt="Icono corporacion"
                style="z-index: 2; max-width: 110%; max-height: 100%">
        </a>
        <a data-toggle="tooltip" data-html="true"
            data-placement="left" title='
        <div class="row">
            <div class="col-12">
                <h5 class="border-solid border-bottom"><strong>Unidad residencial</strong></h5>
                <p>Se unió hace 5 meses</p>
                {{-- <p>Dirección: Diagonal 28C 28 sur 25</p>
                <p>Municipio de Envigado</p> --}}
                <p><strong>Corporación:</strong> EIA Recicla</p>
            </div>
        </div>
        ' style="position:absolute; margin-top: -28%; margin-left: 68%; z-index: 2; max-width: 3%">
            <img src="{{url("/Admon_residencial_otro.png")}}" alt="Icono corporacion"
                style="z-index: 2; max-width: 110%; max-height: 100%">
        </a>
        <a data-toggle="tooltip" data-html="true"
            data-placement="left" title='
        <div class="row">
            <div class="col-12">
                <h5 class="border-solid border-bottom"><strong>Unidad residencial</strong></h5>
                <p>Se unió hace 9 meses</p>
                {{-- <p>Dirección: Diagonal 28C 28 sur 25</p>
                <p>Municipio de Envigado</p> --}}
                <p><strong>Corporación:</strong> Recicladores las lomas</p>
            </div>
        </div>
        ' style="position:absolute; margin-top: -10%; margin-left: 76%; z-index: 2; max-width: 3%">
            <img src="{{url("/Admon_residencial_otro.png")}}" alt="Icono corporacion"
                style="z-index: 2; max-width: 110%; max-height: 100%">
        </a>
        <a data-toggle="tooltip" data-html="true"
            data-placement="left" title='
        <div class="row">
            <div class="col-12">
                <h5 class="border-solid border-bottom"><strong>Unidad residencial</strong></h5>
                <p>Se unió hace 12 días</p>
                {{-- <p>Dirección: Diagonal 28C 28 sur 25</p>
                <p>Municipio de Envigado</p> --}}
                <p><strong>Corporación:</strong> RecItagui</p>
            </div>
        </div>
        ' style="position:absolute; margin-top: -33%; margin-left: 9%; z-index: 2; max-width: 3%">
            <img src="{{url("/Admon_residencial_otro.png")}}" alt="Icono corporacion"
                style="z-index: 2; max-width: 110%; max-height: 100%">
        </a>
        <a data-toggle="tooltip" data-html="true"
                data-placement="left" title='
            <div class="row">
                <div class="col-12">
                    <h5 class="border-bottom border-solid"><strong>Vivienda</strong></h5>
                    <p>Se unió hace 5 meses</p>
                    {{-- <p>Dirección: Diagonal 28C 28 sur 25</p>
                    <p>Municipio de Envigado</p> --}}
                    <p><strong>Corporación:</strong> EIA Recicla</p>
                </div>
            </div>
            ' style="position:absolute; margin-top: -23%; margin-left: 49%; z-index: 2; max-width: 3%">
                <img src="{{url("/Vivienda_particular_otro.png")}}" alt="Icono corporacion"
                    style="z-index: 2; max-width: 110%; max-height: 100%">
        </a>
        <a data-toggle="tooltip" data-html="true"
                data-placement="left" title='
            <div class="row">
                <div class="col-12">
                    <h5 class="border-bottom border-solid"><strong>Vivienda</strong></h5>
                    <p>Se unió hace 10 meses</p>
                    {{-- <p>Dirección: Diagonal 28C 28 sur 25</p>
                    <p>Municipio de Envigado</p> --}}
                    <p><strong>Corporación:</strong> RecItagui</p>
                </div>
            </div>
            ' style="position:absolute; margin-top: -27%; margin-left: 12%; z-index: 2; max-width: 3%">
                <img src="{{url("/Vivienda_particular_otro.png")}}" alt="Icono corporacion"
                    style="z-index: 2; max-width: 110%; max-height: 100%">
        </a>
        <a data-toggle="tooltip" data-html="true"
                data-placement="left" title='
            <div class="row">
                <div class="col-12">
                    <h5 class="border-bottom border-solid"><strong>Vivienda</strong></h5>
                    <p>Se unió hace 7 meses</p>
                    {{-- <p>Dirección: Diagonal 28C 28 sur 25</p>
                    <p>Municipio de Envigado</p> --}}
                    <p><strong>Corporación:</strong> Recicladores las lomas</p>
                </div>
            </div>
            ' style="position:absolute; margin-top: -16%; margin-left: 78%; z-index: 2; max-width: 3%">
                <img src="{{url("/Vivienda_particular_otro.png")}}" alt="Icono corporacion"
                    style="z-index: 2; max-width: 110%; max-height: 100%">
        </a>

        
        
    </div>
    <div class="card-footer">
        <div class="input-group inline w-100 mb-2">
            <label for="" class="lead mr-2">Opciones de busqueda:</label>
            <select class="form-control mr-1" name="type" id="type" style="display: inline">
                <option value="0">Localidad: Barrio</option>
                <option value="1">Localidad: Sector</option>
                <option value="2">Localidad: Municipio</option>
                <option value="3">Localidad: Comuna</option>
            </select>
            <input class="form-control" name="busqueda" autofocus placeholder="Busqueda" style="display: inline">
            <div class="input-group-append">
                <span class="btn btn-info" data-toggle="tooltip"
                    data-placement="top"
                    title="Utiliza esta opción de búsqueda para encontrar corporaciones partir de la zonas en donde residen.">
                    <i class="fas fa-info-circle"></i></span>
            </div>
            <button onclick="" class="btn btn-success ml-2">Buscar</button>
            
        </div>
    </div>
</div>

<div class="modal fade" id="detallesModal" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-success" id="favoritesModalLabel">Informacion de la corporación</h4>
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
                                                        <img src="{{url("/corp_logo2.png")}}" class="logo-corpr" alt="">


                                                        <div class="py-4 text-center">
                                                            <h3><strong>RecItagui</strong></h3>
                                                            <p>Se unió hace 3 años</p>
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
                                                                    <h3>Dirección: </h3>
                                                                    <div class="col-sm-10">
                                                                        <h3>Calle 67 carrera 57</h3>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <h3>Telefóno: </h3>
                                                                    <div class="col-sm-10">
                                                                        <h3>(4) 331 41 21</h3>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <h3>Recicladores afiliados: </h3>
                                                                    <div class="col-sm-10">
                                                                        <h3>12</h3>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <h3><strong>Usuarios afiliados:</strong> </h3>
                                                                    <div class="col-sm-10">
                                                                        <h3>45</h3>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <h3>Emisiones evitadas: </h3>
                                                                    <div class="col-sm-10">
                                                                        <h3>544 ton CO2e</h3>
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
                        data-dismiss="modal">Regresar</button></span>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="detallesModal1" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title text-success" id="favoritesModalLabel">Informacion de la corporación</h2>
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
                                                        <img src="{{url("/corp_logo3.png")}}" class="logo-corpr" alt="">


                                                        <div class="py-4 text-center">
                                                            <h3><strong>EIA Recicla</strong></h3>
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
                                                                <div class="row">
                                                                    <label class="lead"><strong>Dirección:  </strong></label>
                                                                    <p class="pl-1 lead">Calle 22 sur Carrera 42b</p>
                                                                </div>
                                                                <div class="row">
                                                                    <label class="lead"><strong>Telefóno:  </strong></label>
                                                                    <p class="pl-1 lead">(4) 312 17 54</p>
                                                                </div>
                                                                <div class="row">
                                                                    <label class="lead"><strong>Recicladores afiliados:  </strong></label>
                                                                    <p class="pl-1 lead">9</p>
                                                                </div>
                                                                <div class="row">
                                                                    <label class="lead"><strong>Usuarios afiliados:  </strong></label>
                                                                    <p class="pl-1 lead">37</p>
                                                                </div>
                                                                <div class="row">
                                                                    <label class="lead"><strong>Emisiones evitadas:  </strong></label>
                                                                    <p class="pl-1 lead">274 ton CO2e</p>
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
                        data-dismiss="modal">Regresar</button></span>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="detallesModal2" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-success" id="favoritesModalLabel">Informacion de la corporación</h4>
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
                                                        <img src="{{url("/corp_logo1.png")}}" class="logo-corpr" alt="">


                                                        <div class="py-4 text-center">
                                                            <h3>Recicladores las lomas</h3>
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
                                                                    <h3>Dirección: </h3>
                                                                    <div class="col-sm-10">
                                                                        <h3>Calle 27 sur carrera 22</h3>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <h3>Telefóno: </h3>
                                                                    <div class="col-sm-10">
                                                                        <h3>(4) 331 41 13</h3>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <h3>Recicladores afiliados: </h3>
                                                                    <div class="col-sm-10">
                                                                        <h3>4</h3>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <h3><strong>Usuarios afiliados:</strong> </h3>
                                                                    <div class="col-sm-10">
                                                                        <h3>19</h3>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <h3>Emisiones evitadas: </h3>
                                                                    <div class="col-sm-10">
                                                                        <h3>77 ton CO2e</h3>
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
                        data-dismiss="modal">Regresar</button></span>
            </div>
        </div>
    </div>
</div>


@endsection
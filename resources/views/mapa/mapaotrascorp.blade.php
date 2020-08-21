@extends('layouts.app')
@section('navbar-left')
    <form autocomplete="off" action="/action_page.php">
        <div class="autocomplete" style="width: 300px">
            <input type="text" id="myInput" name="myCountry" class="form-control ml-2" placeholder="Buscar en mapa" aria-label="Buscador de recicladores" aria-describedby="filtrar">
        </div>
    </form>
    <div class="input-group-append">
        <button class="btn btn-outline-success ml-2" type="button" id="filtrar" onclick="mostrarMapaDistinto2()">
        <i class="fas fa-search"></i></button>
    </div>
@endsection

@section('content')
<style>
    * { box-sizing: border-box; }
.autocomplete {
  /*the container must be positioned relative:*/
  position: relative;
  display: inline-block;
}
input {
  border: 1px solid transparent;
  background-color: #f1f1f1;
  padding: 10px;
  font-size: 16px;
}
input[type=text] {
  background-color: #f1f1f1;
  width: 100%;
}
input[type=submit] {
  background-color: DodgerBlue;
  color: #fff;
}
.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}
.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff;
  border-bottom: 1px solid #d4d4d4;
}
.autocomplete-items div:hover {
  /*when hovering an item:*/
  background-color: #e9e9e9;
}
.autocomplete-active {
  /*when navigating through the items using the arrow keys:*/
  background-color: DodgerBlue !important;
  color: #ffffff;
}
</style>

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
                title="Utiliza este botón para visualizar los usuarios asignados y pendientes de asignación que hacen parte de su comunidad.">
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
                    <img src="{{url("/corp_logo.png")}}" class="logo-corp rounded-circle border-solid border border-success" alt="Logo corporacion">
                    <h5><strong>Arreciclar</strong></h5>
                    <p>Se unió hace 2 años</p>
                    {{-- <p>Dirección: Diagonal 33B #39 Sur 40</p>
                    <p>Telefóno: (4) 561 09 21</p> --}}
                    <p><strong>Recicladores agremiados:</strong> 5</p>
                    <p><strong>Usuarios afiliados:</strong> 45</p>
                    {{-- <p>Emisiones evitadas: 200 ton CO2e</p> --}}
                </div>
            </div>
            '
            style="position:absolute; margin-top: -8%; margin-left: 40%; z-index: 2; max-width: 5%">
                <img src="{{url("/Corporacion_otro.png")}}" alt="Icono usuario" style="z-index: 2; max-width: 100%; max-height: 100%">
            </a>
            <a href="{{ url('/resultadosCorp') }}" style="position:absolute; margin-top: -40%; margin-left: 2%; z-index: 2; height: 60px !important; width: 60px !important">
                <img src="{{url("/Lista.png")}}" alt="lista" class="w-100 h-100 p-1">
            </a>

            <span style="position:absolute; margin-top: -8%; margin-left: 40%; z-index: 2; max-width: 5%" data-toggle="modal"
            data-target="#detallesModal4">
                <a data-toggle="tooltip" data-html="true" data-placement="top" 
                title='
                <div class="row">
                    <div class="col-12">
                        <img src="{{url("/Arreciclar.png")}}" class="logo-corp rounded-circle border-solid border border-success" alt="Logo corporacion">
                        <h5><strong>Arreciclar</strong></h5>
                        <p>Se unió hace 2 años</p>
                        {{-- <p>Dirección: Diagonal 33B #39 Sur 40</p>
                        <p>Telefóno: (4) 561 09 21</p> --}}
                        <p><strong>Recicladores agremiados:</strong> 3</p>
                        <p><strong>Usuarios afiliados:</strong> 45</p>
                        <p><strong>Emisiones evitadas:</strong> 764 ton CO2e</p>
                    </div>
                </div>
                '
                style="">
                    <img src="{{url("/Imagen_corporacion.png")}}" alt="Icono usuario" style="z-index: 2; max-width: 100%; max-height: 100%">
                </a>
            </span>

            <span style="position:absolute; margin-top: -35%; margin-left: 56%; z-index: 2; max-width: 4%" data-toggle="modal"
            data-target="#detallesModal1">
                <a data-toggle="tooltip" data-html="true" data-placement="left" 
                    title='
                <div class="row">
                    <div class="col-12">
                        <img src="{{url("/corp_logo3.png")}}" class="logo-corp rounded-circle border-solid border border-success" alt="Logo corporacion">
                        <h5 class="border-bottom border-solid"><strong>Corporación campo santo</strong></h5>
                        <p>Se unió hace 2 años</p>
                        {{-- <p>Dirección: Calle 22 Sur # 42b - 11</p>
                        <p>Telefóno: (4) 312 17 54</p> --}}
                        <p><strong>Recicladores agremiados:</strong> 9</p>
                        <p><strong>Usuarios afiliados:</strong> 37</p>
                        <p><strong>Emisiones evitadas:</strong> 274 ton CO2e</p>
                        <small></small>
                    </div>
                </div>
                '>
                    <img src="{{url("/Corporacion_otro.png")}}" alt="Icono usuario" style="z-index: 2; max-width: 100%; max-height: 100%" id="CORPORACIÓN CAMPO SANTO">
                </a>
            </span>

            <span style="position:absolute; margin-top: -12%; margin-left: 84%; z-index: 2; max-width: 4%" data-toggle="modal"
            data-target="#detallesModal2">
                <a data-toggle="tooltip" data-html="true" data-placement="left" 
                title='
                <div class="row">
                    <div class="col-12">
                        <img src="{{url("/corp_logo1.png")}}" class="logo-corp rounded-circle border-solid border border-success" alt="Logo corporacion">
                        <h5><strong>COPRESAP</strong></h5>
                        <p>Se unió hace 1 año</p>
                        {{-- <p>Dirección: Calle 27 Sur # 22 - 20</p>
                        <p>Telefóno: (4) 331 41 13</p> --}}
                        <p><strong>Recicladores agremiados:</strong> 4</p>
                        <p><strong>Usuarios afiliados:</strong> 19</p>
                        <p><strong>Emisiones evitadas:</strong> 77 ton CO2e</p>
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
                        <img src="{{url("/corp_logo2.jpg")}}" class="logo-corp rounded-circle border-solid border border-success" alt="Logo corporacion">
                        <h5><strong>Corpooccidente</strong></h5>
                        <p>Se unió hace 3 años</p>
                        <p><strong>Recicladores agremiados:</strong> 12</p>
                        <p><strong>Usuarios afiliados:</strong> 45</p>
                        <p><strong>Emisiones evitadas:</strong> 544 ton CO2e</p>
                    </div>
                </div>
                '>
                <img src="{{url("/Corporacion_otro.png")}}" alt="Icono usuario" style="z-index: 2; max-width: 100%; max-height: 100%" id="CORPOOCCIDENTE">
                </a>
            </span>
        </div>
        <a data-toggle="tooltip" data-html="true"
                data-placement="left" title='
            <div class="row">
                <div class="col-12">
                    <h5 class="border-bottom border-solid"><strong>Vivienda</strong></h5>
                    <p>Se unió hace 26 días</p>
                    {{-- <p>Dirección: Diagonal 28C 28 Sur 25</p>
                    <p>Municipio de Envigado</p> --}}
                    <p><strong>Corporación:</strong> COPRESAP</p>
                </div>
            </div>
            ' style="position:absolute; margin-top: -18%; margin-left: 68%; z-index: 2; max-width: 3%">
                <img src="{{url("/Vivienda_particular_otro.png")}}" alt="Icono corporacion"
                    style="z-index: 2; max-width: 110%; max-height: 100%">
        </a>
        <a data-toggle="tooltip" data-html="true"
            data-placement="left" title='
        <div class="row">
            <div class="col-12">
                <h5 class="border-solid border-bottom"><strong>Unidad residencial</strong></h5>
                <p>Se unió hace 12 día</p>
                {{-- <p>Dirección: Diagonal 28C 28 Sur 25</p>
                <p>Municipio de Envigado</p> --}}
                <p><strong>Corporación:</strong> Corpooccidente</p>
            </div>
        </div>
        ' style="position:absolute; margin-top: -28%; margin-left: 38%; z-index: 2; max-width: 3%">
            <img src="{{url("/Admon_residencial_otro.png")}}" alt="Icono corporacion"
                style="z-index: 2; max-width: 110%; max-height: 100%" id="unidad_itagui2">
        </a>
        <a data-toggle="tooltip" data-html="true"
            data-placement="left" title='
        <div class="row">
            <div class="col-12">
                <h5 class="border-solid border-bottom"><strong>Unidad residencial</strong></h5>
                <p>Se unió hace 3 meses</p>
                {{-- <p>Dirección: Diagonal 28C 28 Sur 25</p>
                <p>Municipio de Envigado</p> --}}
                <p><strong>Corporación:</strong> Corporación campo santo</p>
            </div>
        </div>
        ' style="position:absolute; margin-top: -38%; margin-left: 47%; z-index: 2; max-width: 3%">
            <img src="{{url("/Admon_residencial_otro.png")}}" alt="Icono corporacion"
                style="z-index: 2; max-width: 110%; max-height: 100%" id="unidad_eia2">
        </a>
        <a data-toggle="tooltip" data-html="true"
            data-placement="left" title='
        <div class="row">
            <div class="col-12">
                <h5 class="border-solid border-bottom"><strong>Unidad residencial</strong></h5>
                <p>Se unió hace 5 meses</p>
                {{-- <p>Dirección: Diagonal 28C 28 Sur 25</p>
                <p>Municipio de Envigado</p> --}}
                <p><strong>Corporación:</strong> Corporación campo santo</p>
            </div>
        </div>
        ' style="position:absolute; margin-top: -28%; margin-left: 68%; z-index: 2; max-width: 3%">
            <img src="{{url("/Admon_residencial_otro.png")}}" alt="Icono corporacion"
                style="z-index: 2; max-width: 110%; max-height: 100%" id="unidad_eia1">
        </a>
        <a data-toggle="tooltip" data-html="true"
            data-placement="left" title='
        <div class="row">
            <div class="col-12">
                <h5 class="border-solid border-bottom"><strong>Unidad residencial</strong></h5>
                <p>Se unió hace 9 meses</p>
                {{-- <p>Dirección: Diagonal 28C 28 Sur 25</p>
                <p>Municipio de Envigado</p> --}}
                <p><strong>Corporación:</strong> COPRESAP</p>
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
                {{-- <p>Dirección: Diagonal 28C 28 Sur 25</p>
                <p>Municipio de Envigado</p> --}}
                <p><strong>Corporación:</strong> Corpooccidente</p>
            </div>
        </div>
        ' style="position:absolute; margin-top: -33%; margin-left: 9%; z-index: 2; max-width: 3%">
            <img src="{{url("/Admon_residencial_otro.png")}}" alt="Icono corporacion"
                style="z-index: 2; max-width: 110%; max-height: 100%" id="unidad_itagui1">
        </a>
        <a data-toggle="tooltip" data-html="true"
                data-placement="left" title='
            <div class="row">
                <div class="col-12">
                    <h5 class="border-bottom border-solid"><strong>Vivienda</strong></h5>
                    <p>Se unió hace 5 meses</p>
                    {{-- <p>Dirección: Diagonal 28C 28 Sur 25</p>
                    <p>Municipio de Envigado</p> --}}
                    <p><strong>Corporación:</strong> Corporación campo santo</p>
                </div>
            </div>
            ' style="position:absolute; margin-top: -23%; margin-left: 49%; z-index: 2; max-width: 3%">
                <img src="{{url("/Vivienda_particular_otro.png")}}" alt="Icono corporacion"
                    style="z-index: 2; max-width: 110%; max-height: 100%" id="casa_eia1">
        </a>
        <a data-toggle="tooltip" data-html="true"
                data-placement="left" title='
            <div class="row">
                <div class="col-12">
                    <h5 class="border-bottom border-solid"><strong>Vivienda</strong></h5>
                    <p>Se unió hace 10 meses</p>
                    {{-- <p>Dirección: Diagonal 28C 28 Sur 25</p>
                    <p>Municipio de Envigado</p> --}}
                    <p><strong>Corporación:</strong> Corpooccidente</p>
                </div>
            </div>
            ' style="position:absolute; margin-top: -27%; margin-left: 12%; z-index: 2; max-width: 3%">
                <img src="{{url("/Vivienda_particular_otro.png")}}" alt="Icono corporacion"
                    style="z-index: 2; max-width: 110%; max-height: 100%" id="casa_itagui1">
        </a>
        <a data-toggle="tooltip" data-html="true"
                data-placement="left" title='
            <div class="row">
                <div class="col-12">
                    <h5 class="border-bottom border-solid"><strong>Vivienda</strong></h5>
                    <p>Se unió hace 7 meses</p>
                    {{-- <p>Dirección: Diagonal 28C 28 Sur 25</p>
                    <p>Municipio de Envigado</p> --}}
                    <p><strong>Corporación:</strong> COPRESAP</p>
                </div>
            </div>
            ' style="position:absolute; margin-top: -16%; margin-left: 78%; z-index: 2; max-width: 3%">
                <img src="{{url("/Vivienda_particular_otro.png")}}" alt="Icono corporacion"
                    style="z-index: 2; max-width: 110%; max-height: 100%">
        </a>

        
        
    </div>
    {{-- <div class="card-footer">
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
    </div> --}}
</div>

<div class="modal fade" id="detallesModal" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title text-success" id="favoritesModalLabel">Información de la corporación</h2>
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
                                                <img src="{{url("/corp_logo2.jpg")}}"
                                                    class="imgpg border border-success rounded-circle"
                                                    alt="">
                                                <div class="mt-2 ml-1 mr-1 text-center">
                                                    <h3><strong>Corpooccidente</strong></h3>
                                                    <p>Se unió hace 3 años</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-12 h-100">
                            <div class="row h-100">
                                <div class="col-xl-12 h-100">
                                    <div class="container pt-4">
                                        <div class="row mb-1">
                                            <div class="col-12 pl-0 border-bottom border-solid">
                                                <label class="lead pl-0 mb-3"><strong>Municipio: </strong>Medellín</label> <br>
                                                <label class="lead pl-0 mb-3"><strong>Dirección: </strong>Carrera 109a #63b - 420</label> <br>
                                                <label class="lead pl-0"><strong>Telefóno: </strong>(4) 2322668</label>
                                            </div>
                                            <div class="col-4 pr-0">
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <label class="lead"><strong>Recicladores agremiados:  </strong></label>
                                            <p class="pl-1 lead">12</p>
                                        </div>
                                        <div class="row">
                                            <label class="lead"><strong>Viviendas:  </strong></label>
                                            <p class="pl-1 lead">23</p>
                                        </div>
                                        <div class="row">
                                            <label class="lead"><strong>Administradores residenciales:  </strong></label>
                                            <p class="pl-1 lead">22</p>
                                        </div>
                                        <div class="row">
                                            <label class="lead"><strong>Emisiones evitadas:  </strong></label>
                                            <p class="pl-1 lead">544 ton CO2e</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer pb-0 pt-2 mb-0">
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
                <h2 class="modal-title text-success" id="favoritesModalLabel">Información de la corporación</h2>
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
                                                <img src="{{url("/corp_logo3.png")}}"
                                                    class="imgpg border border-success rounded-circle"
                                                    alt="">
                                                <div class="mt-2 ml-1 mr-1 text-center">
                                                    <h3><strong>Corporación campo santo</strong></h3>
                                                    <p>Se unió hace 2 años</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-12 h-100">
                            <div class="row h-100">
                                <div class="col-xl-12 h-100">
                                    <div class="container pt-4">
                                        <div class="row mb-1">
                                            <div class="col-12 pl-0 border-bottom border-solid">
                                                <label class="lead pl-0 mb-3"><strong>Municipio: </strong>Medellín</label> <br>
                                                <label class="lead pl-0 mb-3"><strong>Dirección: </strong>Calle 53 #10c - 63</label> <br>
                                                <label class="lead pl-0"><strong>Telefóno: </strong>(4) 2260243</label>
                                            </div>
                                            <div class="col-4 pr-0">
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <label class="lead"><strong>Recicladores agremiados:  </strong></label>
                                            <p class="pl-1 lead">9</p>
                                        </div>
                                        <div class="row">
                                            <label class="lead"><strong>Viviendas:  </strong></label>
                                            <p class="pl-1 lead">30</p>
                                        </div>
                                        <div class="row">
                                            <label class="lead"><strong>Administradores residenciales:  </strong></label>
                                            <p class="pl-1 lead">7</p>
                                        </div>
                                        <div class="row">
                                            <label class="lead"><strong>Emisiones evitadas:  </strong></label>
                                            <p class="pl-1 lead">274 ton CO2e</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer pb-0 pt-2 mb-0">
                <span class="pull-right"><button type="button" class="btn btn-danger"
                        data-dismiss="modal">Regresar</button></span>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="detallesModal4" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title text-success" id="favoritesModalLabel">Información de la corporación</h2>
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
                                                <img src="{{url("/Arreciclar.png")}}"
                                                    class="imgpg border border-success rounded-circle"
                                                    alt="">
                                                <div class="mt-2 ml-1 mr-1 text-center">
                                                    <h3><strong>Arreciclar</strong></h3>
                                                    <p>Se unió hace 2 años</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-12 h-100">
                            <div class="row h-100">
                                <div class="col-xl-12 h-100">
                                    <div class="container pt-4">
                                        <div class="row border-solid border-bottom mb-1">
                                            <div class="col-8 p-0">
                                                <label class="lead pl-0 mb-3"><strong>Municipio: </strong>Medellín</label> <br>
                                                <label class="lead pl-0 mb-3"><strong>Dirección: </strong>Calle 26 # 44 - 27</label> <br>
                                                <label class="lead pl-0"><strong>Telefóno: </strong>(4) 2322668</label>
                                            </div>
                                            <div class="col-4 pr-0">
                                                <div class="d-flex justify-content-end pl-0">
                                                    <a href="{{url("/configuracion")}}">
                                                    <button class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#editarHistoria"
                                                        data-backdrop="static">
                                                        <i class="fas fa-edit fa-lg"></i>
                                                    </button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <label class="lead"><strong>Recicladores agremiados:  </strong></label>
                                            <p class="pl-1 lead">6</p>
                                        </div>
                                        <div class="row">
                                            <label class="lead"><strong>Viviendas:  </strong></label>
                                            <p class="pl-1 lead">37</p>
                                        </div>
                                        <div class="row">
                                            <label class="lead"><strong>Administradores residenciales:  </strong></label>
                                            <p class="pl-1 lead">8</p>
                                        </div>
                                        <div class="row">
                                            <label class="lead"><strong>Emisiones evitadas:  </strong></label>
                                            <p class="pl-1 lead">764 ton CO2e</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer pb-0 pt-2 mb-0">
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
                <h2 class="modal-title text-success" id="favoritesModalLabel">Información de la corporación</h2>
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
                                                <img src="{{url("/corp_logo1.png")}}"
                                                    class="imgpg border border-success rounded-circle"
                                                    alt="">
                                                <div class="mt-2 ml-1 mr-1 text-center">
                                                    <h3><strong>COPRESAP</strong></h3>
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
                                <div class="col-xl-12 h-100">
                                    <div class="container pt-4">
                                        <div class="row mb-1">
                                            <div class="col-12 pl-0 border-bottom border-solid">
                                                <label class="lead pl-0 mb-3"><strong>Municipio: </strong>Medellín</label> <br>
                                                <label class="lead pl-0 mb-3"><strong>Dirección: </strong>Carrera 32a #102b - 53</label> <br>
                                                <label class="lead pl-0"><strong>Telefóno: </strong>(4) 5295490</label>
                                            </div>
                                            <div class="col-4 pr-0">
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <label class="lead"><strong>Recicladores agremiados:  </strong></label>
                                            <p class="pl-1 lead">4</p>
                                        </div>
                                        <div class="row">
                                            <label class="lead"><strong>Viviendas:  </strong></label>
                                            <p class="pl-1 lead">17</p>
                                        </div>
                                        <div class="row">
                                            <label class="lead"><strong>Administradores residenciales:  </strong></label>
                                            <p class="pl-1 lead">2</p>
                                        </div>
                                        <div class="row">
                                            <label class="lead"><strong>Emisiones evitadas:  </strong></label>
                                            <p class="pl-1 lead">77 ton CO2e</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer pb-0 pt-2 mb-0">
                <span class="pull-right"><button type="button" class="btn btn-danger"
                        data-dismiss="modal">Regresar</button></span>
            </div>
        </div>
    </div>
</div>

<script>
    var countries = ["Corpooccidente", "Corporación campo santo"];
    autocomplete(document.getElementById("myInput"), countries);

    function mostrarMapaDistinto2(){
        var entrada = document.getElementById("myInput").value;
        var CORPOOCCIDENTE = document.getElementById("CORPOOCCIDENTE");
        var casai1 = document.getElementById("casa_itagui1");
        var unidadi1 = document.getElementById("unidad_itagui1");
        var unidadi2 = document.getElementById("unidad_itagui2");
        var CORPORACIÓNCAMPOSANTO = document.getElementById("CORPORACIÓN CAMPO SANTO");
        var casae1 = document.getElementById("casa_eia1");
        var unidade1 = document.getElementById("unidad_eia1");
        var unidade2 = document.getElementById("unidad_eia2");
        console.log(entrada);
        if (entrada == "Corpooccidente") {
            //Mostrar usuarios CORPOOCCIDENTE
            CORPOOCCIDENTE.setAttribute("src", "{{url("/Corporacion_otroR.png")}}");
            casai1.setAttribute("src", "{{url("/Vivienda_particular_otroR.png")}}");
            unidadi1.setAttribute("src", "{{url("/Admon_residencial_otroR.png")}}");
            unidadi2.setAttribute("src", "{{url("/Admon_residencial_otroR.png")}}");
            CORPORACIÓNCAMPOSANTO.setAttribute("src", "{{url("/Corporacion_otro.png")}}");
            casae1.setAttribute("src", "{{url("/Vivienda_particular_otro.png")}}");
            unidade1.setAttribute("src", "{{url("/Admon_residencial_otro.png")}}");
            unidade2.setAttribute("src", "{{url("/Admon_residencial_otro.png")}}");
            return;
        }
        if (entrada == "Corporación campo santo") {
            //Mostrar usuarios de EIARecila
            CORPOOCCIDENTE.setAttribute("src", "{{url("/Corporacion_otro.png")}}");
            casai1.setAttribute("src", "{{url("/Vivienda_particular_otro.png")}}");
            unidadi1.setAttribute("src", "{{url("/Admon_residencial_otro.png")}}");
            unidadi2.setAttribute("src", "{{url("/Admon_residencial_otro.png")}}");
            CORPORACIÓNCAMPOSANTO.setAttribute("src", "{{url("/Corporacion_otroR.png")}}");
            casae1.setAttribute("src", "{{url("/Vivienda_particular_otroR.png")}}");
            unidade1.setAttribute("src", "{{url("/Admon_residencial_otroR.png")}}");
            unidade2.setAttribute("src", "{{url("/Admon_residencial_otroR.png")}}");
            return;
        }
    }
    
    function autocomplete(inp, arr) {
        var currentFocus;
        /*execute a function when someone writes in the text field:*/
        inp.addEventListener("input", function(e) {
            var a, b, i, val = this.value;
            /*close any already open lists of autocompleted values*/
            closeAllLists();
            if (!val) { return false;}
            currentFocus = -1;
            /*create a DIV element that will contain the items (values):*/
            a = document.createElement("DIV");
            a.setAttribute("id", this.id + "autocomplete-list");
            a.setAttribute("class", "autocomplete-items");
            /*append the DIV element as a child of the autocomplete container:*/
            this.parentNode.appendChild(a);
            /*for each item in the array...*/
            for (i = 0; i < arr.length; i++) {
                /*check if the item starts with the same letters as the text field value:*/
                if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                /*create a DIV element for each matching element:*/
                b = document.createElement("DIV");
                /*make the matching letters bold:*/
                b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                b.innerHTML += arr[i].substr(val.length);
                /*insert a input field that will hold the current array item's value:*/
                b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                /*execute a function when someone clicks on the item value (DIV element):*/
                    b.addEventListener("click", function(e) {
                    /*insert the value for the autocomplete text field:*/
                    inp.value = this.getElementsByTagName("input")[0].value;
                    /*close the list of autocompleted values,
                    (or any other open lists of autocompleted values:*/
                    closeAllLists();
                });
                a.appendChild(b);
                }
            }
        });
        /*execute a function presses a key on the keyboard:*/
        inp.addEventListener("keydown", function(e) {
            var x = document.getElementById(this.id + "autocomplete-list");
            if (x) x = x.getElementsByTagName("div");
            if (e.keyCode == 40) {
                /*If the arrow DOWN key is pressed,
                increase the currentFocus variable:*/
                currentFocus++;
                /*and and make the current item more visible:*/
                addActive(x);
            } else if (e.keyCode == 38) { //up
                /*If the arrow UP key is pressed,
                decrease the currentFocus variable:*/
                currentFocus--;
                /*and and make the current item more visible:*/
                addActive(x);
            } else if (e.keyCode == 13) {
                /*If the ENTER key is pressed, prevent the form from being submitted,*/
                e.preventDefault();
                if (currentFocus > -1) {
                /*and simulate a click on the "active" item:*/
                if (x) x[currentFocus].click();
                }
            }
        });
        function addActive(x) {
            /*a function to classify an item as "active":*/
            if (!x) return false;
            /*start by removing the "active" class on all items:*/
            removeActive(x);
            if (currentFocus >= x.length) currentFocus = 0;
            if (currentFocus < 0) currentFocus = (x.length - 1);
            /*add class "autocomplete-active":*/
            x[currentFocus].classList.add("autocomplete-active");
        }
        function removeActive(x) {
            /*a function to remove the "active" class from all autocomplete items:*/
            for (var i = 0; i < x.length; i++) {
            x[i].classList.remove("autocomplete-active");
            }
        }
        function closeAllLists(elmnt) {
            /*close all autocomplete lists in the document,
            except the one passed as an argument:*/
            var x = document.getElementsByClassName("autocomplete-items");
            for (var i = 0; i < x.length; i++) {
            if (elmnt != x[i] && elmnt != inp) {
            x[i].parentNode.removeChild(x[i]);
            }
        }
        }
        /*execute a function when someone clicks in the document:*/
        document.addEventListener("click", function (e) {
            closeAllLists(e.target);
    });
    } 
</script>

@endsection
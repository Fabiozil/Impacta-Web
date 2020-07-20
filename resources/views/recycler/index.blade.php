@extends('layouts.app')
@section('navbar-left')
<input type="text" class="form-control ml-2" placeholder="Buscar reciclador" aria-label="Buscador de recicladores" aria-describedby="filtrar">
            <div class="input-group-append">
                <button class="btn btn-outline-success" type="button" id="filtrar">
                <i class="fas fa-search"></i></button>
            </div>
@endsection
@section('content')
<div class="card shadow w-100">
    <div class="card-header">
        <div class="row ">
            <div class="col-md-12">
                <div class="py-5 text-center titulo">
                    <h1 class="text-success">Mis recicladores</h1>
                    <p class="lead">Aquí podrás encontrar los perfiles de todos los recicladores y recicladoras que hacen parte de la organización.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body p-2 pl-3">
        <a class="btn btn-success mr-3" href="{{url('/recicladores/crear')}}"  data-toggle="tooltip" data-placement="bottom" title="Añadir un nuevo reciclador">
        <i class="fas fa-user-plus"> </i> {{__('Añadir')}} reciclador</a>
    </div>
    <div class="card-footer">
        <div class="row">
            <div class="col-xl-4 col-md-6 col-sm-12 p-1">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-xl-5 col-sm-12 p-0">
                                <img src="{{ url('/Avimile.jpg') }}" class="border border-success rounded-circle imgp" alt="Avimilé" style="display: block; margin-right: auto; margin-left: auto;">
                                <p class="text-center mt-1">Miembro hace 3 meses</p>
                            </div>
                            <div class="col-xl-7 col-sm-12 p-0">
                                <p class="lead text-center border-bottom"><strong>Avimilé Ribas</strong></p>
                                <p>Apodo: Avi</p>
                                <p>Teléfono: 333 31 42</p>
                                <p>Usuarios asignados: 4</p>
                            </div>
                            
                        </div>
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <a href="{{ url('/editar') }}">
                                <button type="submit" class="btn btn-success w-100 ml-2">Ver Perfil</button>
                            </a>
                            <a data-toggle="modal" data-target="#detallesModal">
                                <button type="submit" class="btn btn-danger w-100 ">Eliminar</button>
                            </a>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-xl-5 col-sm-12 p-0">
                                <img src="{{ url('/Avimile.jpg') }}" class="border border-success rounded-circle imgp" alt="Avimilé" style="display: block; margin-right: auto; margin-left: auto">
                                <p class="text-center mt-1">Miembro hace 1 mes</p>
                            </div>
                            <div class="col-xl-7 col-sm-12 p-0">
                                <p class="lead text-center border-bottom"><strong>Kevin Tellez</strong></p>
                                <p>Apodo: Kete</p>
                                <p>Teléfono: 330 21 19</p>
                                <p>Usuarios asignados: 1</p>
                            </div>
                            
                        </div>
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <a href="{{ url('/editar') }}">
                                <button type="submit" class="btn btn-success w-100 ml-2">Ver Perfil</button>
                            </a>
                            <a data-toggle="modal" data-target="#detallesModal">
                                <button type="submit" class="btn btn-danger w-100 ">Eliminar</button>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12 p-1">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-xl-5 col-sm-12 p-0">
                                <img src="{{ url('/Cano.jpg') }}" class="border border-success rounded-circle imgp" alt="Avimilé" style="display: block; margin-right: auto; margin-left: auto">
                                <p class="text-center mt-1">Miembro hace 2 años</p>
                            </div>
                            <div class="col-xl-7 col-sm-12 p-0">
                                <p class="lead text-center border-bottom"><strong>German Exequiel Cano</strong></p>
                                <p>Apodo: Cano</p>
                                <p>Teléfono: 313 61 72</p>
                                <p>Usuarios asignados: 6</p>
                            </div>
                        </div>
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <a href="{{ url('/editar') }}">
                                <button type="submit" class="btn btn-success w-100 ml-2">Ver Perfil</button>
                            </a>
                            <a data-toggle="modal" data-target="#detallesModal">
                                <button type="submit" class="btn btn-danger w-100 ">Eliminar</button>
                            </a>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-xl-5 col-sm-12 p-0">
                                <img src="{{ url('/Avimile.jpg') }}" class="border border-success rounded-circle imgp" alt="Avimilé" style="display: block; margin-right: auto; margin-left: auto">
                                <p class="text-center mt-1">Miembro hace 6 meses</p>
                            </div>
                            <div class="col-xl-7 col-sm-12 p-0">
                                <p class="lead text-center border-bottom"><strong>Stiven Mendoza</strong></p>
                                <p>Apodo: Mendo</p>
                                <p>Teléfono: 313 13 23</p>
                                <p>Usuarios asignados: 4</p>
                            </div>
                            
                        </div>
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <a href="{{ url('/editar') }}">
                                <button type="submit" class="btn btn-success w-100 ml-2">Ver Perfil</button>
                            </a>
                            <a data-toggle="modal" data-target="#detallesModal">
                                <button type="submit" class="btn btn-danger w-100 ">Eliminar</button>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12 p-1">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-xl-5 col-sm-12 p-0">
                                <img src="{{ url('/Jeison.jpg') }}" class="border border-success rounded-circle imgp" alt="Avimilé" style="display: block; margin-right: auto; margin-left: auto;">
                                <p class="text-center mt-1">Miembro hace 4 años</p>
                            </div>
                            <div class="col-xl-7 col-sm-12 p-0">
                                <p class="lead text-center border-bottom"><strong>Jeison Guzmán</strong></p>
                                <p>Apodo: Jeison</p>
                                <p>Teléfono: 253 19 72</p>
                                <p>Usuarios asignados: 12</p>

                            </div>
                        </div>
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <a href="{{ url('/editar') }}">
                                <button type="submit" class="btn btn-success w-100 ml-2">Ver Perfil</button>
                            </a>
                            <a data-toggle="modal" data-target="#detallesModal">
                                <button type="submit" class="btn btn-danger w-100 ">Eliminar</button>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="detallesModal" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <h1 class="py-2 text-center">¿Deseas eliminar este reciclador(a)?</h1>
                            <div class="d-flex justify-content-center mt-2 mb-2">
                                <i class="fas fa-question" style="width: 10% !important; height: 10% !important;"></i>
                            </div>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-xl-5 col-sm-12 p-0">
                                        <img src="{{ url('/Jeison.jpg') }}" class="border border-success rounded-circle imgpg" alt="Avimilé" style="display: block; margin-right: auto; margin-left: auto;">
                                        <p class="text-center mt-1">Miembro hace 4 años</p>
                                    </div>
                                    <div class="col-xl-7 col-sm-12 p-0">
                                        <p class="lead text-center border-bottom"><strong>Jeison Guzmán</strong></p>
                                        <p>Apodo: Jeison</p>
                                        <p>Teléfono: 253 19 72</p>
                                        <p>Usuarios asignados: 12</p>
        
                                    </div>
                                </div>
                            </li>
                            <h5 class="lead text-center mt-2">Una vez eliminado el reciclador(a), todos los usuarios asignados pasarán a estar pendientes de asignar. Ver mapa "Mi Comunidad"</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <span class="pull-right"><button type="button" class="btn btn-danger"
                        data-dismiss="modal">Regresar</button></span>
                <a data-dismiss="modal" data-toggle="modal" data-target="#detallesModal1">
                    <button type="button" class="btn btn-success">Confirmar</button></span>
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
                            <h5 class="lead text-center">Cambios realizados correctamente.</h5>
                            <div class="d-flex justify-content-center">
                                <i class="fas fa-check-circle" style="width: 10% !important; height: 10% !important;"></i>
                            </div>
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

@endsection

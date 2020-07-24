@extends('layouts.app')
@section('navbar-left')
<input type="text" class="form-control ml-2" placeholder="Buscar reciclador" aria-label="Buscador de recicladores" aria-describedby="filtrar">
            <div class="input-group-append">
                <button class="btn btn-outline-success" type="button" id="filtrar" onclick="buscar()">
                <i class="fas fa-search"></i></button>
            </div>
@endsection
@section('content')
<div class="card shadow">
    <div class="card-header">
        <h1 class="py-3 text-center text-success">Mi comunidad</h1>
        <p class="lead text-center">Aquí podrás encontrar información acerca de los usuarios que hacen parte de su
            comunidad. Además, podrás visualizar los usuarios que hacen parte de otras corporaciones de reciclaje.</p>
    </div>
    <div class="border-bottom border-solid">
        <div class="d-flex flex-row pl-2 pt-1">
            <a href="#">
                <button type="submit" class="btn btn-outline-success mb-2 mr-0"><i class="fas fa-users mr-1"></i>Mi comunidad
                </button>
            </a>
            <span class="btn btn-info mb-2 ml-0 mr-2" data-toggle="tooltip" data-placement="top"
                title="Utiliza este botón para visualizar los usuarios asignados y pendientes por asignación que hacen parte de su comunidad.">
                <i class="fas fa-info-circle"></i></span>
                
            <a href="{{ url('/comunidad/corporaciones') }}">
                <button type="submit" class="btn btn-success mb-2 mr-0 ml-2">Otras comunidades
                </button>
            </a>
            <span class="btn btn-info mb-2 ml-0" data-toggle="tooltip" data-placement="top"
                title="Utiliza este botón para visualizar los usuarios que hacen parte de otras corporaciones de recicladores.">
                <i class="fas fa-info-circle"></i></span>

        </div>
    </div>
    <div class="card-body">
        <div class="row main-r w-100 h-100">
            <div class="container h-100 main-cr mr-0">
                <div class="row h-75 overflow-auto">
                    <div class="col-xl-4 col-lg-6 col-md-12 p-1">
                        <ul class="list-group list-group-flush" id="lista_usuarios">
                            <li class="list-group-item border border-solid" id="item-lista-usuarios">
                                <div class="row">
                                    <div class="col-xl-5 col-sm-12 p-0">
                                        <img src="{{ url('/Michel.jpg') }}" class="border border-success rounded-circle imgp" alt="Avimilé" style="display: block; margin-right: auto; margin-left: auto;">
                                        <p class="text-center mt-1">Miembro hace 3 meses</p>
                                    </div>
                                    <div class="col-xl-7 col-sm-12 p-0">
                                        <h4 class="text-center border-bottom"><strong>Michel Osama</strong></h4>
                                        <p class="pl-3 pt-2 text-danger"><strong>Reciclador: </strong><br>Sin designar</p>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success btn-block" data-toggle="modal"
                                        data-target="#detallesModal">Ver perfil</button>
                            </li>
                            <li class="list-group-item" id="item-lista-usuarios">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <img src="{{url("/Harlan.jpg")}}" class="logo-corpr border border-success rounded-circle" alt="">
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="row">
                                                <p class="lead mb-1 border-bottom">Harlan Barrera</p>
                                                </div>
                                                <div class=" row">A 1km de la corporación
                                            </div>
                                            <div class="row mb-2">Vivienda particular</div>
                                            <div class="row justify-content-end">
                                                <button type="submit" class="btn btn-success" data-toggle="modal"
                                                    data-target="#detallesModal"
                                                    style="margin-bottom: 10px; margin-left: -15px">Ver perfil</button>
                                                <a href="{{ url('/comunidad') }}">
                                                    <button type="submit" class="btn btn-success"
                                                        style="margin-left: 10px; margin-bottom: 10px">Ubicacion</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <ul class="list-group list-group-flush" id="lista_usuarios">
                            <li class="list-group-item" id="item-lista-usuarios">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <img src="{{url("/unidad1.jpg")}}" class="logo-corpr border border-success rounded-circle" alt="">
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="row">
                                                <p class="lead mb-1 border-bottom">Torres del Riachuelo</p>
                                                </div>
                                                <div class=" row">A 3km de la corporación
                                            </div>
                                            <div class="row mb-2">Unidad residencial</div>
                                            <div class="row justify-content-end">
                                                <button type="submit" class="btn btn-success" data-toggle="modal"
                                                    data-target="#detallesModal"
                                                    style="margin-bottom: 10px; margin-left: -15px">Ver perfil</button>
                                                <a href="{{ url('/comunidad') }}">
                                                    <button type="submit" class="btn btn-success"
                                                        style="margin-left: 10px; margin-bottom: 10px">Ubicacion</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item" id="item-lista-usuarios">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <img src="{{url("/unidad1.jpg")}}" class="logo-corpr border border-success rounded-circle" alt="">
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="row">
                                                <p class="lead mb-1 border-bottom">Andres Perez</p>
                                                </div>
                                                <div class=" row">A 5km de la corporación
                                            </div>
                                            <div class="row mb-2">Vivienda particular</div>
                                            <div class="row justify-content-end">
                                                <button type="submit" class="btn btn-success" data-toggle="modal"
                                                    data-target="#detallesModal"
                                                    style="margin-bottom: 10px; margin-left: -15px">Ver perfil</button>
                                                <a href="{{ url('/comunidad') }}">
                                                    <button type="submit" class="btn btn-success"
                                                        style="margin-left: 10px; margin-bottom: 10px">Ubicacion</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <ul class="list-group list-group-flush" id="usuarios">
                            <li class="list-group-item" id="item-lista-usuarios">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <img src="{{url("/unidad1.jpg")}}" class="logo-corpr border border-success rounded-circle" alt="">
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="row">
                                                <p class="lead mb-1 border-bottom">Torres del rio</p>
                                                </div>
                                                <div class=" row">A 6.6km de la corporación
                                            </div>
                                            <div class="row mb-2">Unidad residencial</div>
                                            <div class="row justify-content-end">
                                                <button type="submit" class="btn btn-success" data-toggle="modal"
                                                    data-target="#detallesModal"
                                                    style="margin-bottom: 10px; margin-left: -15px">Ver perfil</button>
                                                <a href="{{ url('/comunidad') }}">
                                                    <button type="submit" class="btn btn-success"
                                                        style="margin-left: 10px; margin-bottom: 10px">Ubicacion</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item" id="item-lista-usuarios">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <img src="{{url("/unidad1.jpg")}}" class="logo-corpr border border-success rounded-circle" alt="">
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="row">
                                                <p class="lead mb-1 border-bottom">Alejandro Ramirez</p>
                                                </div>
                                                <div class=" row">A 3.1km de la corporación
                                            </div>
                                            <div class="row mb-2">Vivienda particular</div>
                                            <div class="row justify-content-end">
                                                <button type="submit" class="btn btn-success" data-toggle="modal"
                                                    data-target="#detallesModal"
                                                    style="margin-bottom: 10px; margin-left: -15px">Ver perfil</button>
                                                <a href="{{ url('/comunidad') }}">
                                                    <button type="submit" class="btn btn-success"
                                                        style="margin-left: 10px; margin-bottom: 10px">Ubicacion</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <a href="{{ url('/comunidad') }}">
            <div class="d-flex flex-row-reverse bd-highlight">
                <button type="submit" class="btn btn-primary">Ver mapa</button>
            </div>
        </a>
    </div>
</div>

<div class="modal fade" id="detallesModal" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title text-success" id="favoritesModalLabel">Datos del usuario</h3>
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
                                                        <img src="{{url("/Harlan.jpg")}}" class="logo-corpr border border-success rounded-circle" alt="">
                                                        <div class="py-4 text-center">
                                                            <h3>Harlan Barrera</h3>
                                                            <p>Se unió hace 2 meses</p>
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
                                                                        <h3>Diagonal 32D #32 sur 40</h3>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <h3>Municipio:</h3>
                                                                    <div class="col-sm-10">
                                                                        <h3>Envigado</h3>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <h3>Metodo de recolección:</h3>
                                                                    <div class="col-sm-10">
                                                                        <h3>Tocar el timbre</h3>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <h3>Reciclador asignado</h3>
                                                                    <div class="col-sm-10">
                                                                        <h3>Avimilé Ribas</h3>
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
            </div>
        </div>
    </div>
</div>


@endsection

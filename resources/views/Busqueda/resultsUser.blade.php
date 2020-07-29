@extends('layouts.app')
@section('navbar-left')
<input type="text" class="form-control ml-2" placeholder="Buscar en mapa" aria-label="Buscador de recicladores" aria-describedby="filtrar">
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
                            <li class="list-group-item border border-solid mb-2" id="item-lista-usuarios">
                                <div class="row">
                                    <div class="col-xl-5 col-sm-12 p-0">
                                        <img src="{{ url('/Michel.jpg') }}" class="border border-success rounded-circle imgp" alt="Avimilé" style="display: block; margin-right: auto; margin-left: auto;">
                                        <p class="text-center mt-1">Miembro hace 1 dia</p>
                                    </div>
                                    <div class="col-xl-7 col-sm-12 p-0">
                                        <h4 class="text-center border-bottom"><strong>Michel Osama</strong></h4>
                                        <p class="pl-3 pt-4 text-danger mb-4"><strong>Reciclador: </strong>Sin designar</p>
                                        <div class="d-flex justify-content-center">
                                            <button type="submit" class="btn btn-success w-75" data-toggle="modal"
                                                    data-target="#detallesModal1">Ver perfil</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item border border-solid" id="item-lista-usuarios">
                                <div class="row">
                                    <div class="col-xl-5 col-sm-12 p-0">
                                        <img src="{{ url('/harlan.jpg') }}" class="border border-success rounded-circle imgp" alt="Avimilé" style="display: block; margin-right: auto; margin-left: auto;">
                                        <p class="text-center mt-1">Miembro hace 1 año</p>
                                    </div>
                                    <div class="col-xl-7 col-sm-12 p-0">
                                        <h4 class="text-center border-bottom"><strong>Harlan Barrera</strong></h4>
                                        <p class="pl-3 pt-4 mb-4"><strong>Reciclador: </strong>Avimilé Ribas</p>
                                        <div class="d-flex justify-content-center">
                                            <button type="submit" class="btn btn-success w-75" data-toggle="modal"
                                                    data-target="#detallesModal">Ver perfil</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-12 p-1">
                        <ul class="list-group list-group-flush" id="lista_usuarios">
                            <li class="list-group-item border border-solid mb-2" id="item-lista-usuarios">
                                <div class="row">
                                    <div class="col-xl-5 col-sm-12 p-0">
                                        <img src="{{ url('/unidad1.jpg') }}" class="border border-success rounded-circle imgp" alt="Avimilé" style="display: block; margin-right: auto; margin-left: auto;">
                                        <p class="text-center mt-1">Miembro hace 1 año</p>
                                    </div>
                                    <div class="col-xl-7 col-sm-12 p-0">
                                        <h4 class="text-center border-bottom"><strong>Torres del riachuelo</strong></h4>
                                        <p class="pl-3 pt-4 mb-4"><strong>Reciclador: </strong>German Exequiel Cano</p>
                                        <div class="d-flex justify-content-center">
                                            <button type="submit" class="btn btn-success w-75" data-toggle="modal"
                                                    data-target="#detallesModal2">Ver perfil</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item border border-solid" id="item-lista-usuarios">
                                <div class="row">
                                    <div class="col-xl-5 col-sm-12 p-0">
                                        <img src="{{ url('/unidad1.jpg') }}" class="border border-success rounded-circle imgp" alt="Avimilé" style="display: block; margin-right: auto; margin-left: auto;">
                                        <p class="text-center mt-1">Miembro hace 2 dias</p>
                                    </div>
                                    <div class="col-xl-7 col-sm-12 p-0">
                                        <h4 class="text-center border-bottom"><strong>Torres de la Magnolia</strong></h4>
                                        <p class="pl-3 pt-4 mb-4 text-danger"><strong>Reciclador: </strong>Sin designar</p>
                                        <div class="d-flex justify-content-center">
                                            <button type="submit" class="btn btn-success w-75" data-toggle="modal"
                                                    data-target="#detallesModal3">Ver perfil</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-12 p-1">
                        <ul class="list-group list-group-flush" id="usuarios">
                            <li class="list-group-item border border-solid mb-2" id="item-lista-usuarios">
                                <div class="row">
                                    <div class="col-xl-5 col-sm-12 p-0">
                                        <img src="{{ url('/harlan.jpg') }}" class="border border-success rounded-circle imgp" alt="Avimilé" style="display: block; margin-right: auto; margin-left: auto;">
                                        <p class="text-center mt-1">Miembro hace 1 año</p>
                                    </div>
                                    <div class="col-xl-7 col-sm-12 p-0">
                                        <h4 class="text-center border-bottom"><strong>Fabio Benjamin</strong></h4>
                                        <p class="pl-3 pt-4 mb-4"><strong>Reciclador: </strong>Avimilé Ribas</p>
                                        <div class="d-flex justify-content-center">
                                            <button type="submit" class="btn btn-success w-75" data-toggle="modal"
                                                    data-target="#detallesModal4">Ver perfil</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item border border-solid" id="item-lista-usuarios">
                                <div class="row">
                                    <div class="col-xl-5 col-sm-12 p-0">
                                        <img src="{{ url('/harlan.jpg') }}" class="border border-success rounded-circle imgp" alt="Avimilé" style="display: block; margin-right: auto; margin-left: auto;">
                                        <p class="text-center mt-1">Miembro hace 2 años</p>
                                    </div>
                                    <div class="col-xl-7 col-sm-12 p-0">
                                        <h4 class="text-center border-bottom"><strong>Andres Betancur</strong></h4>
                                        <p class="pl-3 pt-4 mb-4"><strong>Reciclador: </strong>Kevin Tellez</p>
                                        <div class="d-flex justify-content-center">
                                            <button type="submit" class="btn btn-success w-75" data-toggle="modal"
                                                    data-target="#detallesModal5">Ver perfil</button>
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
                <h2 class="modal-title text-success" id="favoritesModalLabel">Información del usuario</h2>
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
                                <div class="col-xl-12 h-100">
                                    <div class="container pt-4">
                                        <div class="row border-solid border-bottom mb-1">
                                            <div class="col-6 pl-0">
                                                <label class="lead pl-0"><strong>Reciclador:</strong> Avimilé Ribas</label>
                                            </div>
                                            <div class="col-6 pr-0">
                                                <div class="d-flex justify-content-end pl-0">
                                                    <a href="{{url("/comunidad/asignarReciclador/Harlan")}}">
                                                    <button class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#editarHistoria"
                                                        data-backdrop="static">
                                                        <i class="fas fa-edit fa-lg"></i>
                                                    </button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="lead"><strong>Tipo de usuario:  </strong></label>
                                            <p class="pl-1 lead">Vivienda</p>
                                        </div>
                                        <div class="row">
                                            <label class="lead"><strong>Municipio:  </strong></label>
                                            <p class="pl-1 lead">Envigado</p>
                                        </div>
                                        <div class="row">
                                            <label class="lead"><strong>Dirección:  </strong></label>
                                            <p class="pl-1 lead">Diagonal 32D #32 sur 40</p>
                                        </div>
                                        <div class="row">
                                            <label class="lead"><strong>Condición de entrega:  </strong></label>
                                            <p class="pl-1 lead">Tocar el timbre</p>
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

{{-- //Modal Michel --}}
<div class="modal fade" id="detallesModal1" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title text-success" id="favoritesModalLabel">Información del usuario</h2>
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
                                                <img src="{{url("/Michel.jpg")}}"
                                                    class="imgpg border border-success rounded-circle"
                                                    alt="">
                                                <div class="mt-2 ml-1 mr-1 text-center">
                                                    <h3><strong>Michel Osama</strong></h3>
                                                    <p>Se unió hace 1 dia</p>
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
                                            <div class="col-10 pl-0">
                                                <label class="lead pl-0 text-danger"><strong>Reciclador:</strong> Pendiente de asignar</label>
                                            </div>
                                            <div class="col-2 pr-0">
                                                <div class="d-flex justify-content-end pl-0">
                                                    <a href="{{url("/comunidad/asignarReciclador/Michel")}}">
                                                    <button class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#editarHistoria"
                                                        data-backdrop="static">
                                                        <i class="fas fa-edit fa-lg"></i>
                                                    </button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="lead"><strong>Tipo de usuario:  </strong></label>
                                            <p class="pl-1 lead">Vivienda</p>
                                        </div>
                                        <div class="row">
                                            <label class="lead"><strong>Municipio:  </strong></label>
                                            <p class="pl-1 lead">Envigado</p>
                                        </div>
                                        <div class="row">
                                            <label class="lead"><strong>Dirección:  </strong></label>
                                            <p class="pl-1 lead">Diagonal 32D #32 sur 40</p>
                                        </div>
                                        <div class="row">
                                            <label class="lead"><strong>Condición de entrega:  </strong></label>
                                            <p class="pl-1 lead">Tocar el timbre</p>
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
                        <div class="col-xl-4 col-lg-4 col-md-12 borde-derecha h-100">
                            <div class="row h-100">
                                <div class="container border-right">
                                    <div class="row">
                                        <div class="col-xl-12 h-100">
                                            <div class="container">
                                                <img src="{{url("/unidad1.jpg")}}"
                                                    class="imgpg border border-success rounded-circle"
                                                    alt="">
                                                <div class="mt-2 ml-1 mr-1 text-center">
                                                    <h3><strong>Torres del riachuelo</strong></h3>
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
                                        <div class="row border-solid border-bottom mb-1">
                                            <div class="col-10 pl-0">
                                                <label class="lead pl-0"><strong>Reciclador:</strong> German Exequiel Cano</label>
                                            </div>
                                            <div class="col-2 pr-0">
                                                <div class="d-flex justify-content-end pl-0">
                                                    <a href="{{url("/comunidad/asignarReciclador/Unidad1")}}">
                                                    <button class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#editarHistoria"
                                                        data-backdrop="static">
                                                        <i class="fas fa-edit fa-lg"></i>
                                                    </button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="lead"><strong>Tipo de usuario:  </strong></label>
                                            <p class="pl-1 lead">Administracion residencial</p>
                                        </div>
                                        <div class="row">
                                            <label class="lead"><strong>Municipio:  </strong></label>
                                            <p class="pl-1 lead">Itagui</p>
                                        </div>
                                        <div class="row">
                                            <label class="lead"><strong>Dirección:  </strong></label>
                                            <p class="pl-1 lead">Calle 62B Carrera 50</p>
                                        </div>
                                        <div class="row">
                                            <label class="lead"><strong>Condición de entrega:  </strong></label>
                                            <p class="pl-1 lead">Recoger en portería</p>
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
                        <div class="col-xl-4 col-lg-4 col-md-12 borde-derecha h-100">
                            <div class="row h-100">
                                <div class="container border-right">
                                    <div class="row">
                                        <div class="col-xl-12 h-100">
                                            <div class="container">
                                                <img src="{{url("/unidad1.jpg")}}"
                                                    class="imgpg border border-success rounded-circle"
                                                    alt="">
                                                <div class="mt-2 ml-1 mr-1 text-center">
                                                    <h3><strong>Torres de la Mangolia</strong></h3>
                                                    <p>Se unió hace 2 dias</p>
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
                                            <div class="col-10 pl-0">
                                                <label class="lead pl-0 text-danger"><strong>Reciclador:</strong> Pendiente de asignar</label>
                                            </div>
                                            <div class="col-2 pr-0">
                                                <div class="d-flex justify-content-end pl-0">
                                                    <a href="{{url("/comunidad/asignarReciclador/Harlan")}}">
                                                    <button class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#editarHistoria"
                                                        data-backdrop="static">
                                                        <i class="fas fa-edit fa-lg"></i>
                                                    </button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="lead"><strong>Tipo de usuario: </strong></label>
                                            <p class="pl-1 lead">Administracion residencial</p>
                                        </div>
                                        <div class="row">
                                            <label class="lead"><strong>Municipio:  </strong></label>
                                            <p class="pl-1 lead">Envigado</p>
                                        </div>
                                        <div class="row">
                                            <label class="lead"><strong>Dirección:  </strong></label>
                                            <p class="pl-1 lead">Diagonal 32B #32 sur 42</p>
                                        </div>
                                        <div class="row">
                                            <label class="lead"><strong>Condición de entrega:  </strong></label>
                                            <p class="pl-1 lead">Hablar con recepcionista</p>
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
                                                    <h3><strong>Fabio Benjamin</strong></h3>
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
                                        <div class="row border-solid border-bottom mb-1">
                                            <div class="col-6 pl-0">
                                                <label class="lead pl-0"><strong>Reciclador:</strong> Avimilé Ribas</label>
                                            </div>
                                            <div class="col-6 pr-0">
                                                <div class="d-flex justify-content-end pl-0">
                                                    <a href="{{url("/comunidad/asignarReciclador/Harlan")}}">
                                                    <button class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#editarHistoria"
                                                        data-backdrop="static">
                                                        <i class="fas fa-edit fa-lg"></i>
                                                    </button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="lead"><strong>Tipo de usuario:  </strong></label>
                                            <p class="pl-1 lead">Vivienda</p>
                                        </div>
                                        <div class="row">
                                            <label class="lead"><strong>Municipio:  </strong></label>
                                            <p class="pl-1 lead">Envigado</p>
                                        </div>
                                        <div class="row">
                                            <label class="lead"><strong>Dirección:  </strong></label>
                                            <p class="pl-1 lead">Calle 27 #32 sur 40</p>
                                        </div>
                                        <div class="row">
                                            <label class="lead"><strong>Condición de entrega:  </strong></label>
                                            <p class="pl-1 lead">Tocar el citofono</p>
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
                                                    <h3><strong>Andres Betancur</strong></h3>
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
                                            <div class="col-6 pl-0">
                                                <label class="lead pl-0"><strong>Reciclador:</strong> Kevin Tellez</label>
                                            </div>
                                            <div class="col-6 pr-0">
                                                <div class="d-flex justify-content-end pl-0">
                                                    <a href="{{url("/comunidad/asignarReciclador/Harlan")}}">
                                                    <button class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#editarHistoria"
                                                        data-backdrop="static">
                                                        <i class="fas fa-edit fa-lg"></i>
                                                    </button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="lead"><strong>Tipo de usuario:  </strong></label>
                                            <p class="pl-1 lead">Vivienda</p>
                                        </div>
                                        <div class="row">
                                            <label class="lead"><strong>Municipio:  </strong></label>
                                            <p class="pl-1 lead">Envigado</p>
                                        </div>
                                        <div class="row">
                                            <label class="lead"><strong>Dirección:  </strong></label>
                                            <p class="pl-1 lead">Calle 16 sur #14</p>
                                        </div>
                                        <div class="row">
                                            <label class="lead"><strong>Condición de entrega:  </strong></label>
                                            <p class="pl-1 lead">Llamar de porteria al 1012</p>
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
                        <div class="col-xl-4 col-lg-4 col-md-12 borde-derecha h-100">
                            <div class="row h-100">
                                <div class="container border-right">
                                    <div class="row">
                                        <div class="col-xl-12 h-100">
                                            <div class="container">
                                                <img src="{{url("/Michel.jpg")}}"
                                                    class="imgpg border border-success rounded-circle"
                                                    alt="">
                                                <div class="mt-2 ml-1 mr-1 text-center">
                                                    <h3><strong>Raquel Morales</strong></h3>
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
                                            <div class="col-6 pl-0">
                                                <label class="lead pl-0"><strong>Reciclador:</strong> Stiven Mendoza</label>
                                            </div>
                                            <div class="col-6 pr-0">
                                                <div class="d-flex justify-content-end pl-0">
                                                    <a href="{{url("/comunidad/asignarReciclador/Harlan")}}">
                                                    <button class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#editarHistoria"
                                                        data-backdrop="static">
                                                        <i class="fas fa-edit fa-lg"></i>
                                                    </button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="lead"><strong>Tipo de usuario:  </strong></label>
                                            <p class="pl-1 lead">Vivienda</p>
                                        </div>
                                        <div class="row">
                                            <label class="lead"><strong>Municipio:  </strong></label>
                                            <p class="pl-1 lead">Envigado</p>
                                        </div>
                                        <div class="row">
                                            <label class="lead"><strong>Dirección:  </strong></label>
                                            <p class="pl-1 lead">Diagonal 33 #32 sur 37</p>
                                        </div>
                                        <div class="row">
                                            <label class="lead"><strong>Condición de entrega:  </strong></label>
                                            <p class="pl-1 lead">Deja el reciclaje en la puerta</p>
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
                                                    <h3><strong>Kevin Viveros</strong></h3>
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
                                            <div class="col-6 pl-0">
                                                <label class="lead pl-0"><strong>Reciclador:</strong> Avimilé Ribas</label>
                                            </div>
                                            <div class="col-6 pr-0">
                                                <div class="d-flex justify-content-end pl-0">
                                                    <a href="{{url("/comunidad/asignarReciclador/Harlan")}}">
                                                    <button class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#editarHistoria"
                                                        data-backdrop="static">
                                                        <i class="fas fa-edit fa-lg"></i>
                                                    </button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="lead"><strong>Tipo de usuario: </strong></label>
                                            <p class="pl-1 lead">Vivienda</p>
                                        </div>
                                        <div class="row">
                                            <label class="lead"><strong>Municipio:  </strong></label>
                                            <p class="pl-1 lead">Envigado</p>
                                        </div>
                                        <div class="row">
                                            <label class="lead"><strong>Dirección:  </strong></label>
                                            <p class="pl-1 lead">Calle 33 #16 sur</p>
                                        </div>
                                        <div class="row">
                                            <label class="lead"><strong>Condición de entrega:  </strong></label>
                                            <p class="pl-1 lead">Llamar al telefonó</p>
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

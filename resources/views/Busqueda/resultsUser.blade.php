@extends('layouts.app')
@section('content')
<div class="py-5 text-center titulo">
    <h1 class="text-success">Resultados de la búsqueda</h1>
    <p class="lead">Usuarios encontrados</p>
</div>
<div class="row main-r w-100 h-100">
    <div class="container cont-rec h-100 main-cr mr-0">
        <div class="row h-75 overflow-auto">
            <div class="col-xl-4 col-lg-6 col-md-12">
                <ul class="list-group list-group-flush" id="lista_usuarios">
                    <li class="list-group-item" id="item-lista-usuarios">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-4">
                                    <i class="fas fa-user user-icon"></i>
                                </div>
                                <div class="col-sm-8">
                                    <div class="row">
                                        <p class="lead mb-1"">Nombre del usuario</p>
                                        </div>
                                        <div class=" row">A 100km de ti
                                    </div>
                                    <div class="row">Vivienda particular</div>
                                    <div class="row justify-content-end">
                                        <button type="submit" class="btn btn-success" data-toggle="modal"
                                            data-target="#detallesModal"
                                            style="margin-bottom: 10px; margin-left: -15px">Ver perfil</button>
                                        <a href="{{ url('/') }}">
                                            <button type="submit" class="btn btn-success"
                                                style="margin-left: 10px; margin-bottom: 10px">Ver en mapa >></button>
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
                                    <i class="fas fa-user user-icon"></i>
                                </div>
                                <div class="col-sm-8">
                                    <div class="row">
                                        <p class="lead mb-1"">Nombre del usuario</p>
                                        </div>
                                        <div class=" row">A 100km de ti
                                    </div>
                                    <div class="row">Vivienda particular</div>
                                    <div class="row justify-content-end">
                                        <button type="submit" class="btn btn-success" data-toggle="modal"
                                            data-target="#detallesModal"
                                            style="margin-bottom: 10px; margin-left: -15px">Ver perfil</button>
                                        <a href="{{ url('/') }}">
                                            <button type="submit" class="btn btn-success"
                                                style="margin-left: 10px; margin-bottom: 10px">Ver en mapa >></button>
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
                                    <i class="fas fa-user user-icon"></i>
                                </div>
                                <div class="col-sm-8">
                                    <div class="row">
                                        <p class="lead mb-1"">Nombre del usuario</p>
                                        </div>
                                        <div class=" row">A 100km de ti
                                    </div>
                                    <div class="row">Unidad residencial</div>
                                    <div class="row justify-content-end">
                                        <button type="submit" class="btn btn-success" data-toggle="modal"
                                            data-target="#detallesModal"
                                            style="margin-bottom: 10px; margin-left: -15px">Ver perfil</button>
                                        <a href="{{ url('/') }}">
                                            <button type="submit" class="btn btn-success"
                                                style="margin-left: 10px; margin-bottom: 10px">Ver en mapa >></button>
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
                                    <i class="fas fa-user user-icon"></i>
                                </div>
                                <div class="col-sm-8">
                                    <div class="row">
                                        <p class="lead mb-1"">Nombre del usuario</p>
                                        </div>
                                        <div class=" row">A 100km de ti
                                    </div>
                                    <div class="row">Vivienda particular</div>
                                    <div class="row justify-content-end">
                                        <button type="submit" class="btn btn-success" data-toggle="modal"
                                            data-target="#detallesModal"
                                            style="margin-bottom: 10px; margin-left: -15px">Ver perfil</button>
                                        <a href="{{ url('/') }}">
                                            <button type="submit" class="btn btn-success"
                                                style="margin-left: 10px; margin-bottom: 10px">Ver en mapa >></button>
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
                                    <i class="fas fa-user user-icon"></i>
                                </div>
                                <div class="col-sm-8">
                                    <div class="row">
                                        <p class="lead mb-1"">Nombre del usuario</p>
                                        </div>
                                        <div class=" row">A 14km de ti
                                    </div>
                                    <div class="row">Unidad residencial</div>
                                    <div class="row justify-content-end">
                                        <button type="submit" class="btn btn-success" data-toggle="modal"
                                            data-target="#detallesModal"
                                            style="margin-bottom: 10px; margin-left: -15px">Ver perfil</button>
                                        <a href="{{ url('/') }}">
                                            <button type="submit" class="btn btn-success"
                                                style="margin-left: 10px; margin-bottom: 10px">Ver en mapa >></button>
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
                                    <i class="fas fa-user user-icon"></i>
                                </div>
                                <div class="col-sm-8">
                                    <div class="row">
                                        <p class="lead mb-1"">Nombre del usuario</p>
                                        </div>
                                        <div class=" row">A 0km de ti
                                    </div>
                                    <div class="row">Vivienda particular</div>
                                    <div class="row justify-content-end">
                                        <button type="submit" class="btn btn-success" data-toggle="modal"
                                            data-target="#detallesModal"
                                            style="margin-bottom: 10px; margin-left: -15px">Ver perfil</button>
                                        <a href="{{ url('/') }}">
                                            <button type="submit" class="btn btn-success"
                                                style="margin-left: 10px; margin-bottom: 10px">Ver en mapa >></button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
        <a href="{{ url('/comunidad') }}">
            <button type="submit" class="btn btn-success"
                style="margin-bottom: 10px; margin-left: -15px">Regresar</button>
        </a>
    </div>
</div>


<div class="modal fade" id="detallesModal" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-success" id="favoritesModalLabel">Datos del usuario</h4>
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
                                        <div class="container h-80 cont-rec">
                                            <div class="row">
                                                <div class="col-xl-12 h-100">
                                                    <div class="container">
                                                        <div class="py-5">
                                                        </div>
                                                        <i class="fas fa-user user-icon center-img"></i>


                                                        <div class="py-4 text-center">
                                                            <h3>Dango123</h3>
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
                                        <div class="container cont-rec h-95">
                                            <div class="row h-100">
                                                <div class="col-xl-10">
                                                    <div class="py-5 subtitle">

                                                    </div>
                                                    <br>

                                                    <div class="container cont-rec-nf m-0">
                                                        <form>
                                                            <div class="form-group w-100">
                                                                <div class="form-group row">
                                                                    <h3>Dirección </h3>
                                                                    <div class="col-sm-10">
                                                                        <h3>Carrera 24 No. 33 - 45</h3>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <h3>Municipio</h3>
                                                                    <div class="col-sm-10">
                                                                        <h3>Medellin</h3>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <h3>Reciclador asignado</h3>
                                                                    <div class="col-sm-10">
                                                                        <h3>Antonio Marín</h3>
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
                <span class="pull-right"><button type="button" class="btn btn-success"
                        data-dismiss="modal">Cerrar</button></span>
            </div>
        </div>
    </div>
</div>


@endsection

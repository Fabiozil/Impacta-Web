@extends('layouts.app')
@section('content')
<div class="card shadow">
    <div class="card-header">
        <div class="py-3 text-center titulo">
            <h1 class="text-success">Resultados de la búsqueda</h1>
            <p class="lead">6 Usuarios encontrados segun la corporación</p>
        </div>
    </div>
    <div class="card-body">
        <div class="row main-r w-100 h-100">
            <div class="container h-100 main-cr mr-0">
                <div class="row h-75 overflow-auto">
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <ul class="list-group list-group-flush" id="lista_usuarios">
                            <li class="list-group-item" id="item-lista-usuarios">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <img src="{{url("/Michel.jpg")}}" class="logo-corpr border border-success rounded-circle" alt="">
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="row">
                                                <p class="lead mb-1 border-bottom">Michel Osama</p>
                                                </div>
                                                <div class=" row">A 1.5km de la corporación
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
                <button type="submit" class="btn btn-danger">Regresar</button>
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

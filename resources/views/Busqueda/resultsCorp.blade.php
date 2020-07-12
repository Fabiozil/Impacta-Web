@extends('layouts.app')
@section('content')
<div class="card shadow">
    <div class="card-header">
        <div class="py-3 text-center titulo">
            <h1 class="text-success">Resultados de la búsqueda</h1>
            <p class="lead">3 Corporaciones encontradas segun sector</p>
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
                                            <img src="{{url("/corp_logo2.png")}}" class="logo-corpr" alt="">
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="row">
                                                <p class="lead mb-1 border-bottom">RecItagui</p>
                                                </div>
                                                <div class=" row">A 2.9km de la corporación
                                            </div>
                                            <div class="row mb-2">Corporación de reciclaje</div>
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
                                            <img src="{{url("/corp_logo3.png")}}" class="logo-corpr" alt="">
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="row">
                                                <p class="lead mb-1 border-bottom">EIA Recicla</p>
                                                </div>
                                                <div class=" row">A 3km de la corporación
                                            </div>
                                            <div class="row mb-2">Corporación de reciclaje</div>
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
                                            <img src="{{url("/corp_logo1.png")}}" class="logo-corpr" alt="">
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="row">
                                                <p class="lead mb-1 border-bottom">Recicladores las Lomas</p>
                                                </div>
                                                <div class=" row">A 4.3km de la corporación
                                            </div>
                                            <div class="row mb-2">Corporación de recilaje</div>
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
        <a href="{{ url('/comunidad/corporaciones') }}">
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
                <h4 class="modal-title text-success" id="favoritesModalLabel">Datos de la corporación</h4>
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
                                                            <h3>RecItagui</h3>
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
                                                                    <h3>Recicladores afiliados: </h3>
                                                                    <div class="col-sm-10">
                                                                        <h3>12</h3>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <h3>Usuarios afiliados: </h3>
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
                <span class="pull-right"><button type="button" class="btn btn-success"
                        data-dismiss="modal">Cerrar</button></span>
            </div>
        </div>
    </div>
</div>


@endsection

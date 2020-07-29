@extends('layouts.app')
@section('navbar-left')
<input type="text" class="form-control ml-2" placeholder="Buscar en mapa" aria-label="Buscador de recicladores"
    aria-describedby="filtrar">
<div class="input-group-append">
    <button class="btn btn-outline-success" type="button" id="filtrar">
        <i class="fas fa-search"></i></button>
</div>
@endsection
@section('content')
<div class="card shadow">
    <div class="card-header">
        <h1 class="py-3 text-center text-success">Asignación de reciclador(a)</h1>
        <p class="lead text-center">Aquí podrás seleccionar al reciclador o recicladora de su comunidad, quien será el o
            la
            encargada de aprovechar el material reciclable a disponer por el usuario. Ten en cuenta la dirección de
            vivienda del usuario</p>

    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-xl-4 col-sm-12">
                <img class="imgRecycler border border-success rounded-circle imgpg"
                    style="max-width: 100%; max-height: 100%" src="{{url("/Michel.jpg")}}" alt="Michele Osama">
                <h3 class="text-center mb-1 pb-1 mt-2"><strong>Michel Osama</strong></h3>
                <p class="text-center">Miembro hace 1 año</p>
            </div>
            <div class="col-xl-8 col-sm-12">
                <h2 class="py-4 text-center"><strong>Informacion del usuario</strong></h2>
                <p class="text-center lead text-danger"><strong>Reciclador asignado: </strong> Sin designar</p>
                <p class="text-center lead"><strong>Tipo de usuario: </strong> Vivienda</p>
                <p class="text-center lead"><strong>Municipio: </strong> Envigado</p>
                <p class="text-center lead"><strong>Dirección: </strong> Diagonal 32D #32 sur 40</p>
                <p class="text-center lead"><strong>Condición de entrega: </strong> Tocar el timbre</p>


                {{--                 <label class="lead">Buscar reciclador: </label>
                <input class="form-control w-75 mb-3" name="busqueda" autofocus placeholder="Nombre"
                    style="display: inline"> --}}
            </div>
        </div>
        <h2 class="text-center py-3"><strong>Asignar reciclador</strong></h2>
        <div class="row border-solid border">
            <div class="col-xl-4 col-md-6 col-sm-12 p-1">
                <ul class="list-group list-group-flush" id="col-1">
                    <li class="list-group-item border border-solid mb-1">
                        <div class="row">
                            <div class="col-xl-5 col-sm-12 p-0">
                                <img src="{{ url('/Avimile.jpg') }}" class="border border-success rounded-circle imgp" alt="Avimilé" style="display: block; margin-right: auto; margin-left: auto;">
                                <p class="text-center mt-1">Miembro hace 3 meses</p>
                            </div>
                            <div class="col-xl-7 col-sm-12 p-0">
                                <h4 class="text-center border-bottom"><strong>Avimilé Ribas</strong></h4>
                                <p class="pl-3 pt-2"><strong>Apodo:</strong> Avi</p>
                                <p class="pl-3"><strong>Teléfono:</strong> 333 31 42</p>
                                <p class="pl-3"><strong>Usuarios asignados:</strong> 4</p>
                            </div>
                        </div>
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <a data-toggle="modal" data-target="#modalConfirmarAsignacion">
                                <button type="submit" class="btn btn-success">Asignar</button>
                            </a>
                        </div>
                    </li>
                    <li class="list-group-item border-solid border">
                        <div class="row">
                            <div class="col-xl-5 col-sm-12 p-0">
                                <img src="{{ url('/Avimile.jpg') }}" class="border border-success rounded-circle imgp" alt="Avimilé" style="display: block; margin-right: auto; margin-left: auto">
                                <p class="text-center mt-1">Miembro hace 1 mes</p>
                            </div>
                            <div class="col-xl-7 col-sm-12 p-0">
                                <h4 class="text-center border-bottom"><strong>Kevin Tellez</strong></h4>
                                <p class="pl-3 pt-2"><strong>Apodo:</strong> Kete</p>
                                <p class="pl-3"><strong>Teléfono:</strong> 330 21 19</p>
                                <p class="pl-3"><strong>Usuarios asignados:</strong> 1</p>
                            </div>
                            
                        </div>
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <a data-toggle="modal" data-target="#modalConfirmarAsignacion">
                                <button type="submit" class="btn btn-success">Asignar</button>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12 p-1">
                <ul class="list-group list-group-flush" id="col-2">
                    <li class="list-group-item border-solid border mb-1">
                        <div class="row">
                            <div class="col-xl-5 col-sm-12 p-0">
                                <img src="{{ url('/Cano.jpg') }}" class="border border-success rounded-circle imgp" alt="Avimilé" style="display: block; margin-right: auto; margin-left: auto">
                                <p class="text-center mt-1">Miembro hace 2 años</p>
                            </div>
                            <div class="col-xl-7 col-sm-12 p-0">
                                <h4 class="text-center border-bottom"><strong>German Exequiel Cano</strong></h4>
                                <p class="pl-3 pt-2"><strong>Apodo:</strong> Cano</p>
                                <p class="pl-3"><strong>Teléfono:</strong> 313 61 72</p>
                                <p class="pl-3"><strong>Usuarios asignados:</strong> 6</p>
                            </div>
                        </div>
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <a data-toggle="modal" data-target="#modalConfirmarAsignacion">
                                <button type="submit" class="btn btn-success">Asignar</button>
                            </a>
                        </div>
                    </li>
                    <li class="list-group-item border-solid border">
                        <div class="row">
                            <div class="col-xl-5 col-sm-12 p-0">
                                <img src="{{ url('/Avimile.jpg') }}" class="border border-success rounded-circle imgp" alt="Avimilé" style="display: block; margin-right: auto; margin-left: auto">
                                <p class="text-center mt-1">Miembro hace 6 meses</p>
                            </div>
                            <div class="col-xl-7 col-sm-12 p-0">
                                <h4 class="text-center border-bottom"><strong>Stiven Mendoza</strong></h4>
                                <p class="pl-3 pt-2"><strong>Apodo:</strong> Mendo</p>
                                <p class="pl-3"><strong>Teléfono:</strong> 313 13 23</p>
                                <p class="pl-3"><strong>Usuarios asignados:</strong> 4</p>
                            </div>
                            
                        </div>
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <a data-toggle="modal" data-target="#modalConfirmarAsignacion">
                                <button type="submit" class="btn btn-success">Asignar</button>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12 p-1">
                <ul class="list-group list-group-flush" id="col-3">
                    <li class="list-group-item border border-solid">
                        <div class="row">
                            <div class="col-xl-5 col-sm-12 p-0">
                                <img src="{{ url('/Jeison.jpg') }}" class="border border-success rounded-circle imgp" alt="Avimilé" style="display: block; margin-right: auto; margin-left: auto;">
                                <p class="text-center mt-1">Miembro hace 4 años</p>
                            </div>
                            <div class="col-xl-7 col-sm-12 p-0">
                                <h4 class="text-center border-bottom"><strong>Jeison Guzmán</strong></h4>
                                <p class="pl-3 pt-2"><strong>Apodo:</strong> Jeison</p>
                                <p class="pl-3"><strong>Teléfono:</strong> 253 19 72</p>
                                <p class="pl-3"><strong>Usuarios asignados:</strong> 12</p>

                            </div>
                        </div>
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <a data-toggle="modal" data-target="#modalConfirmarAsignacion">
                                <button type="submit" class="btn btn-success">Asignar</button>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <div class="d-flex flex-row-reverse bd-highlight">
            <a data-target="#modalConfirmarCambios" data-toggle="modal">
                <button type="submit" class="btn btn-success ml-2"><i class="fas fa-save fa-lg"></i> Guardar</button>
            </a>
            <a href="{{ url('/comunidad') }}">
                <button type="submit" class="btn btn-danger">Regresar</button>
            </a>
        </div>
    </div>
</div>
<div class="modal fade" id="modalConfirmarAsignacion" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
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
                            <h1 class="py-2 text-center">¿Deseas asignar este reciclador(a)?</h1>
                            <div class="d-flex justify-content-center mt-2 mb-2">
                                <i class="fas fa-question" style="width: 10% !important; height: 10% !important;"></i>
                            </div>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-xl-5 col-sm-12 p-0">
                                        <img src="{{ url('/Jeison.jpg') }}"
                                            class="border border-success rounded-circle imgpg" alt="Avimilé"
                                            style="display: block; margin-right: auto; margin-left: auto;">
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
                            <h5 class="lead text-center mt-2">Una asignado este reciclador(a), el reciclador asignado
                                anteriormente será reemplazado.</h5>
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
<div class="modal fade" id="modalQuitarAsignacion" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
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
                            <h1 class="py-2 text-center">¿Deseas quitar la asignación de este reciclador(a)?</h1>
                            <div class="d-flex justify-content-center mt-2 mb-2">
                                <i class="fas fa-question" style="width: 10% !important; height: 10% !important;"></i>
                            </div>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-xl-5 col-sm-12 p-0">
                                        <img src="{{ url('/Avimile.jpg') }}"
                                            class="border border-success rounded-circle imgpg" alt="Avimilé"
                                            style="display: block; margin-right: auto; margin-left: auto;">
                                        <p class="text-center mt-1">Miembro hace 3 meses</p>
                                    </div>
                                    <div class="col-xl-7 col-sm-12 p-0">
                                        <p class="lead text-center border-bottom"><strong>Avimilé Ribas</strong></p>
                                        <p>Apodo: Avi</p>
                                        <p>Teléfono: 333 31 42</p>
                                        <p>Usuarios asignados: 4</p>

                                    </div>
                                </div>
                            </li>
                            <h5 class="lead text-center mt-2">Una vez quitada la asignación, el usuario asignado pasará
                                a estar pendiente de asignar. Ver mapa "Mi Comunidad"</h5>
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
                                <i class="fas fa-check-circle"
                                    style="width: 10% !important; height: 10% !important;"></i>
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
<div class="modal fade" id="modalConfirmarCambios" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-success" id="favoritesModalLabel"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <h1 class="py-2 text-center">¿Deseas confirmar los cambios realizados?</h1>
                            <div class="d-flex justify-content-center mt-2 mb-2">
                                <i class="fas fa-question" style="width: 10% !important; height: 10% !important;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a data-dismiss="modal">
                    <span class="pull-right"><button type="button" class="btn btn-danger"
                            data-dismiss="modal">Regresar</button></span>
                </a>
                <a data-toggle="modal" data-target="#detallesModal2">
                    <span class="pull-right"><button type="button" class="btn btn-success"
                            data-dismiss="modal">Continuar</button></span>
                </a>

            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="detallesModal2" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
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
                                <i class="fas fa-check-circle"
                                    style="width: 10% !important; height: 10% !important;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="{{url("/comunidad")}}"><button type="button" class="btn btn-success">Continuar</button></a>

            </div>
        </div>
    </div>
</div>
@endsection

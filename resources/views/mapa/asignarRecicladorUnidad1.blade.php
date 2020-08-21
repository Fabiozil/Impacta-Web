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
        <p class="lead text-center">Aquí podrás seleccionar al reciclador(a) de su comunidad, quien será el encargado(a) de aprovechar el material reciclable a disponer por el usuario. Ten en cuenta la dirección de
            vivienda del usuario.</p>

    </div>
    <div class="card-body">
        <div class="row border border-solid bg-light mb-2">
            <div class="col-xl-4 col-sm-12">
                <img class="imgRecycler border border-success rounded-circle imgpg"
                    style="max-width: 100%; max-height: 100%" src="{{url("/TORRES_DE_LA_MAGNOLIA.jpg")}}" alt="Michele Osama">
                <h3 class="text-center mb-1 pb-1 mt-2"><strong>Torres de la Magnolia</strong></h3>
                <p class="text-center">Miembro hace 2 dias</p>
            </div>
            <div class="col-xl-8 col-sm-12">
                <h2 class="py-4 text-center text-success"><strong>Información del usuario</strong></h2>
                <p class="text-center lead text-danger"><strong>Reciclador(a) asignado: </strong> Pendiente de asignar</p>
                <p class="text-center lead"><strong>Tipo de usuario: </strong> Administrador residencial</p>
                <p class="text-center lead"><strong>Municipio: </strong> Envigado</p>
                <p class="text-center lead"><strong>Dirección: </strong> Diagonal 32B #32 Sur - 42</p>
                <p class="text-center lead"><strong>Condición de entrega: </strong> Hablar con recepcionista</p>


                {{--                 <label class="lead">Buscar reciclador: </label>
                <input class="form-control w-75 mb-3" name="busqueda" autofocus placeholder="Nombre"
                    style="display: inline"> --}}
            </div>
        </div>
        <div class="row border-solid border">
            <div class="col-12">
                <h2 class="text-center py-3 text-success"><strong>Asignar reciclador(a)</strong></h2>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12 p-1">
                <ul class="list-group list-group-flush" id="col-1">
                    <li class="list-group-item border-solid border mb-1">
                        <div class="row">
                            <div class="col-xl-5 col-sm-12 p-0">
                                <img src="{{ url('/Alejita_Uribe.png') }}" class="border border-success rounded-circle imgp" alt="Avimilé" style="display: block; margin-right: auto; margin-left: auto">
                                <p class="text-center mt-1">Miembro hace 2 años</p>
                            </div>
                            <div class="col-xl-7 col-sm-12 p-0">
                                <h4 class="text-center border-bottom"><strong>Alejandra Uribe</strong></h4>
                                <p class="pl-3 pt-2"><strong>Apodo:</strong> Alejita</p>
                                <p class="pl-3"><strong>Celular:</strong> 310 202 0001</p>
                                <p class="pl-3"><strong>Usuarios asignados:</strong> 6</p>
                            </div>
                        </div>
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <a data-toggle="modal" data-target="#modalConfirmarAsignacion">
                                <button type="submit" class="btn btn-success w-100 ml-2">Asignar</button>
                            </a>
                        </div>
                    </li>
                    <li class="list-group-item border-solid border">
                        <div class="row">
                            <div class="col-xl-5 col-sm-12 p-0">
                                <img src="{{ url('/Rodrigo_hincapie.png') }}" class="border border-success rounded-circle imgp" alt="Avimilé" style="display: block; margin-right: auto; margin-left: auto">
                                <p class="text-center mt-1">Miembro hace 1 mes</p>
                            </div>
                            <div class="col-xl-7 col-sm-12 p-0">
                                <h4 class="text-center border-bottom"><strong>Rodrigo Hincapie</strong></h4>
                                <p class="pl-3 pt-2"><strong>Apodo:</strong> El Rodri</p>
                                <p class="pl-3"><strong>Celular:</strong> 310 330 2119</p>
                                <p class="pl-3"><strong>Usuarios asignados:</strong> 1</p>
                            </div>
                            
                        </div>
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <a data-toggle="modal" data-target="#modalConfirmarAsignacion">
                                <button type="submit" class="btn btn-success w-100 ml-2">Asignar</button>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12 p-1">
                <ul class="list-group list-group-flush" id="col-2">
                    
                    <li class="list-group-item border border-solid mb-1">
                        <div class="row">
                            <div class="col-xl-5 col-sm-12 p-0">
                                <img src="{{ url('/Reinaldo_Ochoa.png') }}" class="border border-success rounded-circle imgp" alt="Avimilé" style="display: block; margin-right: auto; margin-left: auto;">
                                <p class="text-center mt-1">Miembro hace 3 meses</p>
                            </div>
                            <div class="col-xl-7 col-sm-12 p-0">
                                <h4 class="text-center border-bottom"><strong>Reinaldo Ochoa</strong></h4>
                                <p class="pl-3 pt-2"><strong>Apodo:</strong> Rey</p>
                                <p class="pl-3"><strong>Celular:</strong> 310 333 3142</p>
                                <p class="pl-3"><strong>Usuarios asignados:</strong> 12</p>
                            </div>
                        </div>
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <a data-toggle="modal" data-target="#modalConfirmarAsignacion">
                                <button type="submit" class="btn btn-success w-100 ml-2">Asignar</button>
                            </a>
                        </div>
                    </li>
                    <li class="list-group-item border-solid border">
                        <div class="row">
                            <div class="col-xl-5 col-sm-12 p-0">
                                <img src="{{ url('/Armando_lopez.png') }}" class="border border-success rounded-circle imgp" alt="Avimilé" style="display: block; margin-right: auto; margin-left: auto">
                                <p class="text-center mt-1">Miembro hace 6 meses</p>
                            </div>
                            <div class="col-xl-7 col-sm-12 p-0">
                                <h4 class="text-center border-bottom"><strong>Armando López</strong></h4>
                                <p class="pl-3 pt-2"><strong>Apodo:</strong> Armando</p>
                                <p class="pl-3"><strong>Celular:</strong> 310 313 1323</p>
                                <p class="pl-3"><strong>Usuarios asignados:</strong> 4</p>
                            </div>
                            
                        </div>
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <a data-toggle="modal" data-target="#modalConfirmarAsignacion">
                                <button type="submit" class="btn btn-success w-100 ml-2">Asignar</button>
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
                                <img src="{{ url('/Claudia_Marin.png') }}" class="border border-success rounded-circle imgp" style="display: block; margin-right: auto; margin-left: auto;">
                                <p class="text-center mt-1">Miembro hace 4 años</p>
                            </div>
                            <div class="col-xl-7 col-sm-12 p-0">
                                <h4 class="text-center border-bottom"><strong>Claudia Marín</strong></h4>
                                <p class="pl-3 pt-2"><strong>Apodo:</strong> Clau</p>
                                <p class="pl-3"><strong>Celular:</strong> 310 253 1972</p>
                                <p class="pl-3"><strong>Usuarios asignados:</strong> 12</p>

                            </div>
                        </div>
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <a data-toggle="modal" data-target="#modalConfirmarAsignacion">
                                <button type="submit" class="btn btn-success w-100 ml-2">Asignar</button>
                            </a>
                        </div>
                    </li>
                    <li class="list-group-item border border-solid mt-1">
                        <div class="row">
                            <div class="col-xl-5 col-sm-12 p-0">
                                <img src="{{ url('/Monica_Garcia.png') }}" class="border border-success rounded-circle imgp" style="display: block; margin-right: auto; margin-left: auto;">
                                <p class="text-center mt-1">Miembro hace 4 años</p>
                            </div>
                            <div class="col-xl-7 col-sm-12 p-0">
                                <h4 class="text-center border-bottom"><strong>Mónica García</strong></h4>
                                <p class="pl-3 pt-2"><strong>Apodo:</strong> La Negra</p>
                                <p class="pl-3"><strong>Celular:</strong> 310 253 1972</p>
                                <p class="pl-3"><strong>Usuarios asignados:</strong> 11</p>

                            </div>
                        </div>
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <a data-toggle="modal" data-target="#modalConfirmarAsignacion">
                                <button type="submit" class="btn btn-success w-100 ml-2">Asignar</button>
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
                <h2 class="modal-title text-success">Asignar reciclador(a)</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="d-flex justify-content-center mt-2 mb-2">
                                <img src="{{url("alerta.png")}}" alt="">
                            </div>
                            <h1 class="py-2 text-center">¿Deseas seleccionar este reciclador(a)?</h1>
                            <h5 class="lead border-solid text-center border p-3">El reciclador(a) <strong>Alejandra Uribe</strong> será asignado(a) al usuario <strong>Torres de la Magnolia</strong>, quien
                                será el responsable de recolectar el material reciclable a disponer.</h5>
                            <h5 class="lead text-center mt-2">Una vez asignado el reciclador(a), podras modificar esta
                                selección en el perfil del usuario.</h5>
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
                            <li class="list-group-item border border-solid mb-1">
                                <div class="row">
                                    <div class="col-xl-5 col-sm-12 p-0">
                                        <img src="{{ url('/Reinaldo_Ochoa.png') }}" class="border border-success rounded-circle imgp" alt="Avimilé" style="display: block; margin-right: auto; margin-left: auto;">
                                        <p class="text-center mt-1">Miembro hace 3 meses</p>
                                    </div>
                                    <div class="col-xl-7 col-sm-12 p-0">
                                        <h4 class="text-center border-bottom"><strong>Reinaldo Ochoa</strong></h4>
                                        <p class="pl-3 pt-2"><strong>Apodo:</strong> Rey</p>
                                        <p class="pl-3"><strong>Teléfono:</strong> 333 31 42</p>
                                        <p class="pl-3"><strong>Usuarios asignados:</strong> 4</p>
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
                <h4 class="modal-title text-success" id="favoritesModalLabel">Éxito</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="d-flex justify-content-center">
                                <img src="{{url("Exito.png")}}" alt="">
                            </div>
                            <h1 class="py-2 text-center">¡Éxito!</h1>
                            <h5 class="lead text-center">Cambios realizados correctamente.</h5>
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
<div class="modal fade" id="detallesModal11" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-success" id="favoritesModalLabel">Éxito</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="d-flex justify-content-center">
                                <img src="{{url("Exito.png")}}" alt="">
                            </div>
                            <h1 class="py-2 text-center">¡Éxito!</h1>
                            <h5 class="lead text-center">Cambios realizados correctamente.</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            <a href="{{url("/comunidad")}}"><button class="btn btn-success">Continuar</button></span></a>
                
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalConfirmarCambios" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title text-success" id="favoritesModalLabel">Confirmar cambios</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="d-flex justify-content-center">
                                <img src="{{url("alerta.png")}}" alt="">
                            </div>
                            <h1 class="py-2 text-center">¿Deseas confirmar los cambios realizados?</h1>
                            <h5 class="lead border-solid text-center border p-3">El reciclador(a) <strong>Alejandra Uribe</strong> fue asignado(a) al usuario<strong> Torres de la Magnolia</strong>, quien
                                será el responsable de recolectar el material reciclable dispuesto.</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a data-dismiss="modal">
                    <span class="pull-right"><button type="button" class="btn btn-danger"
                            data-dismiss="modal">Regresar</button></span>
                </a>
                <a data-toggle="modal" data-target="#detallesModal11">
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

@extends('layouts.app')
@section('content')
    <div class="py-5 text-center titulo">
        <h1 class="text-primary">Mis recicladores</h1>
        <p class="lead">Aquí podrás encontrar los perfiles de todos los recicladores que hacen parte de tu organización</p>
    </div>
    <div class="row main-r w-100">
        <div class="container cont-rec h-100 main-cr mr-0">
            <div class="row m-1 mb-0 h-20">
                <div class="col-3 pl-5 mt-3">
                    <a href="{{ url('/crear_reciclador') }}" data-toggle="tooltip" data-placement="top" title="Crear reciclador">
                            <i class="fas fa-user-plus user-icon center-img"></i>
                    </a>
                </div>
                <div class="col-9">
                    <div class="row">
                        <div class="input-group mb-3 w-75 mt-5 mb-0">
                            <input type="text" class="form-control" id="barrio">
                            <div class="input-group-prepend">
                                <button class="btn btn-outline-secondary" type="button"
                                    id="boton_filtrar" onclick="filtrar_recicladores()">Filtrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row h-75 overflow-auto">
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <ul class="list-group list-group-flush" id="lista_recicladores">
                        <li class="list-group-item" id="item-lista-recicladores">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <i class="fas fa-user user-icon"></i>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="row">
                                            <p class="lead mb-1"">Apodo :</p>
                                        </div>
                                        <div class="row">Nombre :</div>
                                        <div class="row">Celular :</div> 
                                        <div class="row justify-content-end">
                                            <a href="{{ url('/editar_reciclador') }}">
                                                <button type="submit" class="btn btn-primary" style="margin-bottom: 10px; margin-left: -15px">Editar</button>
                                            </a>
                                            <a href="{{ url('/confirmar_eliminar') }}">
                                                <button type="submit" class="btn btn-danger" style="margin-left: 10px; margin-bottom: 10px">Eliminar</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item" id="item-lista-recicladores">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <i class="fas fa-user user-icon"></i>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="row">
                                            <p class="lead mb-1"">Apodo :</p>
                                        </div>
                                        <div class="row">Nombre :</div>
                                        <div class="row">Celular :</div> 
                                        <div class="row justify-content-end">
                                            <a href="{{ url('/editar_reciclador') }}">
                                                <button type="submit" class="btn btn-primary" style="margin-bottom: 10px; margin-left: -15px">Editar</button>
                                            </a>
                                            <a href="{{ url('/confirmar_eliminar') }}">
                                                <button type="submit" class="btn btn-danger" style="margin-left: 10px; margin-bottom: 10px">Eliminar</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item" id="item-lista-recicladores">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <i class="fas fa-user user-icon"></i>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="row">
                                            <p class="lead mb-1"">Apodo :</p>
                                        </div>
                                        <div class="row">Nombre :</div>
                                        <div class="row">Celular :</div> 
                                        <div class="row justify-content-end">
                                            <a href="{{ url('/editar_reciclador') }}">
                                                <button type="submit" class="btn btn-primary" style="margin-bottom: 10px; margin-left: -15px">Editar</button>
                                            </a>
                                            <a href="{{ url('/confirmar_eliminar') }}">
                                                <button type="submit" class="btn btn-danger" style="margin-left: 10px; margin-bottom: 10px">Eliminar</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-12">
                    <ul class="list-group list-group-flush" id="lista_recicladores">
                        <li class="list-group-item" id="item-lista-recicladores">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <i class="fas fa-user user-icon"></i>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="row">
                                            <p class="lead mb-1"">Apodo :</p>
                                        </div>
                                        <div class="row">Nombre :</div>
                                        <div class="row">Celular :</div> 
                                        <div class="row justify-content-end">
                                            <a href="{{ url('/editar_reciclador') }}">
                                                <button type="submit" class="btn btn-primary" style="margin-bottom: 10px; margin-left: -15px">Editar</button>
                                            </a>
                                            <a href="{{ url('/confirmar_eliminar') }}">
                                                <button type="submit" class="btn btn-danger" style="margin-left: 10px; margin-bottom: 10px">Eliminar</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item" id="item-lista-recicladores">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <i class="fas fa-user user-icon"></i>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="row">
                                            <p class="lead mb-1"">Apodo :</p>
                                        </div>
                                        <div class="row">Nombre :</div>
                                        <div class="row">Celular :</div> 
                                        <div class="row justify-content-end">
                                            <a href="{{ url('/editar_reciclador') }}">
                                                <button type="submit" class="btn btn-primary" style="margin-bottom: 10px; margin-left: -15px">Editar</button>
                                            </a>
                                            <a href="{{ url('/confirmar_eliminar') }}">
                                                <button type="submit" class="btn btn-danger" style="margin-left: 10px; margin-bottom: 10px">Eliminar</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item" id="item-lista-recicladores">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <i class="fas fa-user user-icon"></i>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="row">
                                            <p class="lead mb-1"">Apodo :</p>
                                        </div>
                                        <div class="row">Nombre :</div>
                                        <div class="row">Celular :</div> 
                                        <div class="row justify-content-end">
                                            <a href="{{ url('/editar_reciclador') }}">
                                                <button type="submit" class="btn btn-primary" style="margin-bottom: 10px; margin-left: -15px">Editar</button>
                                            </a>
                                            <a href="{{ url('/confirmar_eliminar') }}">
                                                <button type="submit" class="btn btn-danger" style="margin-left: 10px; margin-bottom: 10px">Eliminar</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-12">
                    <ul class="list-group list-group-flush" id="lista_recicladores">
                        <li class="list-group-item" id="item-lista-recicladores">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <i class="fas fa-user user-icon"></i>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="row">
                                            <p class="lead mb-1"">Apodo :</p>
                                        </div>
                                        <div class="row">Nombre :</div>
                                        <div class="row">Celular :</div> 
                                        <div class="row justify-content-end">
                                            <a href="{{ url('/editar_reciclador') }}">
                                                <button type="submit" class="btn btn-primary" style="margin-bottom: 10px; margin-left: -15px">Editar</button>
                                            </a>
                                            <a href="{{ url('/confirmar_eliminar') }}">
                                                <button type="submit" class="btn btn-danger" style="margin-left: 10px; margin-bottom: 10px">Eliminar</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item" id="item-lista-recicladores">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <i class="fas fa-user user-icon"></i>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="row">
                                            <p class="lead mb-1"">Apodo :</p>
                                        </div>
                                        <div class="row">Nombre :</div>
                                        <div class="row">Celular :</div> 
                                        <div class="row justify-content-end">
                                            <a href="{{ url('/editar_reciclador') }}">
                                                <button type="submit" class="btn btn-primary" style="margin-bottom: 10px; margin-left: -15px">Editar</button>
                                            </a>
                                            <a href="{{ url('/confirmar_eliminar') }}">
                                                <button type="submit" class="btn btn-danger" style="margin-left: 10px; margin-bottom: 10px">Eliminar</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item" id="item-lista-recicladores">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <i class="fas fa-user user-icon"></i>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="row">
                                            <p class="lead mb-1"">Apodo :</p>
                                        </div>
                                        <div class="row">Nombre :</div>
                                        <div class="row">Celular :</div> 
                                        <div class="row justify-content-end">
                                            <a href="{{ url('/editar_reciclador') }}">
                                                <button type="submit" class="btn btn-primary" style="margin-bottom: 10px; margin-left: -15px">Editar</button>
                                            </a>
                                            <a href="{{ url('/confirmar_eliminar') }}">
                                                <button type="submit" class="btn btn-danger" style="margin-left: 10px; margin-bottom: 10px">Eliminar</button>
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
@endsection

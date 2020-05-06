@extends('layouts.app')
@section('content')
    <div class="py-5 text-center" id="titulo">
        <h1>Mis recicladores</h1>
        <p class="lead">Gestionar recicladores</p>
    </div>
    <div class="row" style="height: 69vh;">
        <div class="container" id="contenedor-recicladores" style="height: 100%; max-width: 150%;">
            <div class="row" style="margin: 1%; margin-bottom: 0px; height: 20%;">
                <div class="col-3" style="padding-left: 10%">
                    <a href="{{ url('/crear_reciclador') }}" style="margin-left: auto; margin-right: auto">
                        <i class="fas fa-user-plus" style="width: 100%; height: 60%;"></i>
                    </a>
                </div>
                <div class="col-9">
                    <div class="row">
                        <div class="input-group mb-3" style="width: 85%; margin-top: 3%; margin-bottom: 0% !important">
                            <input type="text" class="form-control" id="barrio">
                            <div class="input-group-prepend">
                                <button class="btn btn-outline-secondary" type="button"
                                    id="boton_filtrar" onclick="filtrar_recicladores()">Filtrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="overflow: auto; max-height: 75%">
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <ul class="list-group list-group-flush" id="lista_recicladores">
                        <li class="list-group-item" id="item-lista-recicladores">
                            <div class="container" id="contenedor-crear-reciclador" style="border-radius: 10px">
                                <div class="row">
                                    <div class="col-4">
                                        <i class="fas fa-user" id="user-icon"></i>
                                    </div>
                                    <div class="col-8">
                                        <div class="row">
                                            <p class="lead" style="margin-bottom: 4px;">Apodo</p>
                                        </div>
                                        <div class="row">Nombre:</div>
                                        <div class="row">Celular:</div>
                                        <a href="{{ url('/editar_reciclador') }}">
                                            <button type="submit" class="btn btn-primary" style="margin-bottom: 10px; margin-left: -15px">Editar</button>
                                        </a>
                                        <a href="{{ url('/confirmar_eliminar') }}">
                                            <button type="submit" class="btn btn-danger" style="margin-left: 10px; margin-bottom: 10px">Eliminar</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item" id="item-lista-recicladores">
                            <div class="container" id="contenedor-crear-reciclador">
                                <div class="row">
                                    <div class="col-4">
                                        <i class="fas fa-user" id="user-icon"></i>
                                    </div>
                                    <div class="col-8">
                                        <div class="row">
                                            <p class="lead" style="margin-bottom: 4px;">Apodo</p>
                                        </div>
                                        <div class="row">Nombre:</div>
                                        <div class="row">Celular:</div>
                                        <a href="{{ url('/editar_reciclador') }}">
                                            <button type="submit" class="btn btn-primary" style="margin-bottom: 10px; margin-left: -15px">Editar</button>
                                        </a>
                                        <a href="{{ url('/confirmar_eliminar') }}">
                                            <button type="submit" class="btn btn-danger" style="margin-left: 10px; margin-bottom: 10px">Eliminar</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item" id="item-lista-recicladores">
                            <div class="container" id="contenedor-crear-reciclador" style="border-radius: 10px">
                                <div class="row">
                                    <div class="col-4">
                                        <i class="fas fa-user" id="user-icon"></i>
                                    </div>
                                    <div class="col-8">
                                        <div class="row">
                                            <p class="lead" style="margin-bottom: 4px;">Apodo</p>
                                        </div>
                                        <div class="row">Nombre:</div>
                                        <div class="row">Celular:</div>
                                        <a href="{{ url('/editar_reciclador') }}">
                                            <button type="submit" class="btn btn-primary" style="margin-bottom: 10px; margin-left: -15px">Editar</button>
                                        </a>
                                        <a href="{{ url('/confirmar_eliminar') }}">
                                            <button type="submit" class="btn btn-danger" style="margin-left: 10px; margin-bottom: 10px">Eliminar</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-12">
                    <ul class="list-group list-group-flush" id="lista_recicladores">
                        <li class="list-group-item" id="item-lista-recicladores">
                            <div class="container" id="contenedor-crear-reciclador" style="border-radius: 10px">
                                <div class="row">
                                    <div class="col-4">
                                        <i class="fas fa-user" id="user-icon"></i>
                                    </div>
                                    <div class="col-8">
                                        <div class="row">
                                            <p class="lead" style="margin-bottom: 4px;">Apodo</p>
                                        </div>
                                        <div class="row">Nombre:</div>
                                        <div class="row">Celular:</div>
                                        <a href="{{ url('/editar_reciclador') }}">
                                            <button type="submit" class="btn btn-primary" style="margin-bottom: 10px; margin-left: -15px">Editar</button>
                                        </a>
                                        <a href="{{ url('/confirmar_eliminar') }}">
                                            <button type="submit" class="btn btn-danger" style="margin-left: 10px; margin-bottom: 10px">Eliminar</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item" id="item-lista-recicladores">
                            <div class="container" id="contenedor-crear-reciclador" style="border-radius: 10px">
                                <div class="row">
                                    <div class="col-4">
                                        <i class="fas fa-user" id="user-icon"></i>
                                    </div>
                                    <div class="col-8">
                                        <div class="row">
                                            <p class="lead" style="margin-bottom: 4px;">Apodo</p>
                                        </div>
                                        <div class="row">Nombre:</div>
                                        <div class="row">Celular:</div>
                                        <a href="{{ url('/editar_reciclador') }}">
                                            <button type="submit" class="btn btn-primary" style="margin-bottom: 10px; margin-left: -15px">Editar</button>
                                        </a>
                                        <a href="{{ url('/confirmar_eliminar') }}">
                                            <button type="submit" class="btn btn-danger" style="margin-left: 10px; margin-bottom: 10px">Eliminar</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item" id="item-lista-recicladores">
                            <div class="container" id="contenedor-crear-reciclador" style="border-radius: 10px">
                                <div class="row">
                                    <div class="col-4">
                                        <i class="fas fa-user" id="user-icon"></i>
                                    </div>
                                    <div class="col-8">
                                        <div class="row">
                                            <p class="lead" style="margin-bottom: 4px;">Apodo</p>
                                        </div>
                                        <div class="row">Nombre:</div>
                                        <div class="row">Celular:</div>
                                        <a href="{{ url('/editar_reciclador') }}">
                                            <button type="submit" class="btn btn-primary" style="margin-bottom: 10px; margin-left: -15px">Editar</button>
                                        </a>
                                        <a href="{{ url('/confirmar_eliminar') }}">
                                            <button type="submit" class="btn btn-danger" style="margin-left: 10px; margin-bottom: 10px">Eliminar</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-12">
                    <ul class="list-group list-group-flush" id="lista_recicladores">
                        <li class="list-group-item" id="item-lista-recicladores">
                            <div class="container" id="contenedor-crear-reciclador" style="border-radius: 10px">
                                <div class="row">
                                    <div class="col-4">
                                        <i class="fas fa-user" id="user-icon"></i>
                                    </div>
                                    <div class="col-8">
                                        <div class="row">
                                            <p class="lead" style="margin-bottom: 4px;">Apodo</p>
                                        </div>
                                        <div class="row">Nombre:</div>
                                        <div class="row">Celular:</div>
                                        <a href="{{ url('/editar_reciclador') }}">
                                            <button type="submit" class="btn btn-primary" style="margin-bottom: 10px; margin-left: -15px">Editar</button>
                                        </a>
                                        <a href="{{ url('/confirmar_eliminar') }}">
                                            <button type="submit" class="btn btn-danger" style="margin-left: 10px; margin-bottom: 10px">Eliminar</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item" id="item-lista-recicladores">
                            <div class="container" id="contenedor-crear-reciclador" style="border-radius: 10px">
                                <div class="row">
                                    <div class="col-4">
                                        <i class="fas fa-user" id="user-icon"></i>
                                    </div>
                                    <div class="col-8">
                                        <div class="row">
                                            <p class="lead" style="margin-bottom: 4px;">Apodo</p>
                                        </div>
                                        <div class="row">Nombre:</div>
                                        <div class="row">Celular:</div>
                                        <a href="{{ url('/editar_reciclador') }}">
                                            <button type="submit" class="btn btn-primary" style="margin-bottom: 10px; margin-left: -15px">Editar</button>
                                        </a>
                                        <a href="{{ url('/confirmar_eliminar') }}">
                                            <button type="submit" class="btn btn-danger" style="margin-left: 10px; margin-bottom: 10px">Eliminar</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item" id="item-lista-recicladores">
                            <div class="container" id="contenedor-crear-reciclador" style="border-radius: 10px">
                                <div class="row">
                                    <div class="col-4">
                                        <i class="fas fa-user" id="user-icon"></i>
                                    </div>
                                    <div class="col-8">
                                        <div class="row">
                                            <p class="lead" style="margin-bottom: 4px;">Apodo</p>
                                        </div>
                                        <div class="row">Nombre:</div>
                                        <div class="row">Celular:</div>
                                        <a href="{{ url('/editar_reciclador') }}">
                                            <button type="submit" class="btn btn-primary" style="margin-bottom: 10px; margin-left: -15px">Editar</button>
                                        </a>
                                        <a href="{{ url('/confirmar_eliminar') }}">
                                            <button type="submit" class="btn btn-danger" style="margin-left: 10px; margin-bottom: 10px">Eliminar</button>
                                        </a>
                                    </div>
                                </div>
                                <div class="row">

                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

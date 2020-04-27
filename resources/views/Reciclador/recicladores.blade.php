@extends('nav')
@section('conteint')

    <div class="row" style="height: 100%">
        <div class="container" id="contenedor-formulario" style="margin: 10%; max-height: 90%">
            <div class="row" style="margin-top: 20px">
                <div class="col-3">
                    <a href="{{ url('/crear_reciclador') }}">
                        <img src="/icons/mas.png" id="center-img" alt="Nuevo reciclador">
                    </a>
                </div>
                <div class="col-9">
                    <div class="row align-items-center">
                        <div class="input-group mb-3" style="width: 80%; margin-top: 15px">
                            <div class="input-group-prepend">
                                <button class="btn btn-outline-secondary" type="button"
                                    id="boton_filtrar" onclick="filtrar_recicladores()">Filtrar</button>
                            </div>
                            <input type="text" class="form-control" id="barrio">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="overflow: auto; max-height: 80%">
                <div class="col-6">
                    <ul class="list-group list-group-flush" id="lista_recicladores">
                        <li class="list-group-item">
                            <div class="container" id="contenedor-crear-reciclador" style="border-radius: 10px">
                                <div class="row">
                                    <div class="col-4">
                                        <img src="/icons/user.png" alt="Foto de perfil" style="max-height: 100%;max-width: 100%">
                                    </div>
                                    <div class="col-8">
                                        <div class="row">
                                            <p class="lead" style="margin-bottom: 4px;">Apodo</p>
                                        </div>
                                        <div class="row">Nombre:</div>
                                        <div class="row">Celular:</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <a href="{{ url('/editar_reciclador') }}">
                                        <button type="submit" class="btn btn-light" style="margin-left: 10px; margin-bottom: 10px">Editar</button>
                                    </a>
                                    <a href="{{ url('/confirmar_eliminar') }}">
                                        <button type="submit" class="btn btn-light" style="margin-left: 10px; margin-bottom: 10px">Eliminar</button>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="container" id="contenedor-crear-reciclador" style="border-radius: 10px">
                                <div class="row">
                                    <div class="col-4">
                                        <img src="/icons/user.png" alt="Foto de perfil" style="max-height: 100%;max-width: 100%">
                                    </div>
                                    <div class="col-8">
                                        <div class="row">
                                            <p class="lead" style="margin-bottom: 4px;">Apodo</p>
                                        </div>
                                        <div class="row">Nombre:</div>
                                        <div class="row">Celular:</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <a href="{{ url('/editar_reciclador') }}">
                                        <button type="submit" class="btn btn-light" style="margin-left: 10px; margin-bottom: 10px">Editar</button>
                                    </a>
                                    <a href="{{ url('/confirmar_eliminar') }}">
                                        <button type="submit" class="btn btn-light" style="margin-left: 10px; margin-bottom: 10px">Eliminar</button>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="container" id="contenedor-crear-reciclador" style="border-radius: 10px">
                                <div class="row">
                                    <div class="col-4">
                                        <img src="/icons/user.png" alt="Foto de perfil" style="max-height: 100%;max-width: 100%">
                                    </div>
                                    <div class="col-8">
                                        <div class="row">
                                            <p class="lead" style="margin-bottom: 4px;">Apodo</p>
                                        </div>
                                        <div class="row">Nombre:</div>
                                        <div class="row">Celular:</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <a href="{{ url('/editar_reciclador') }}">
                                        <button type="submit" class="btn btn-light" style="margin-left: 10px; margin-bottom: 10px">Editar</button>
                                    </a>
                                    <a href="{{ url('/confirmar_eliminar') }}">
                                        <button type="submit" class="btn btn-light" style="margin-left: 10px; margin-bottom: 10px">Eliminar</button>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="col-6">
                    <ul class="list-group list-group-flush" id="lista_recicladores">
                        <li class="list-group-item">
                            <div class="container" id="contenedor-crear-reciclador" style="border-radius: 10px">
                                <div class="row">
                                    <div class="col-4">
                                        <img src="/icons/user.png" alt="Foto de perfil" style="max-height: 100%;max-width: 100%">
                                    </div>
                                    <div class="col-8">
                                        <div class="row">
                                            <p class="lead" style="margin-bottom: 4px;">Apodo</p>
                                        </div>
                                        <div class="row">Nombre:</div>
                                        <div class="row">Celular:</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <a href="{{ url('/editar_reciclador') }}">
                                        <button type="submit" class="btn btn-light" style="margin-left: 10px; margin-bottom: 10px">Editar</button>
                                    </a>
                                    <a href="{{ url('/confirmar_eliminar') }}">
                                        <button type="submit" class="btn btn-light" style="margin-left: 10px; margin-bottom: 10px">Eliminar</button>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="container" id="contenedor-crear-reciclador" style="border-radius: 10px">
                                <div class="row">
                                    <div class="col-4">
                                        <img src="/icons/user.png" alt="Foto de perfil" style="max-height: 100%;max-width: 100%">
                                    </div>
                                    <div class="col-8">
                                        <div class="row">
                                            <p class="lead" style="margin-bottom: 4px;">Apodo</p>
                                        </div>
                                        <div class="row">Nombre:</div>
                                        <div class="row">Celular:</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <a href="{{ url('/editar_reciclador') }}">
                                        <button type="submit" class="btn btn-light" style="margin-left: 10px; margin-bottom: 10px">Editar</button>
                                    </a>
                                    <a href="{{ url('/confirmar_eliminar') }}">
                                        <button type="submit" class="btn btn-light" style="margin-left: 10px; margin-bottom: 10px">Eliminar</button>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="container" id="contenedor-crear-reciclador" style="border-radius: 10px">
                                <div class="row">
                                    <div class="col-4">
                                        <img src="/icons/user.png" alt="Foto de perfil" style="max-height: 100%;max-width: 100%">
                                    </div>
                                    <div class="col-8">
                                        <div class="row">
                                            <p class="lead" style="margin-bottom: 4px;">Apodo</p>
                                        </div>
                                        <div class="row">Nombre:</div>
                                        <div class="row">Celular:</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <a href="{{ url('/editar_reciclador') }}">
                                        <button type="submit" class="btn btn-light" style="margin-left: 10px; margin-bottom: 10px">Editar</button>
                                    </a>
                                    <a href="{{ url('/confirmar_eliminar') }}">
                                        <button type="submit" class="btn btn-light" style="margin-left: 10px; margin-bottom: 10px">Eliminar</button>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')
@section('content')
<div class="card shadow">
    <div class="card-header">
        <h1 class="py-3 text-center text-success">Asignar reciclador a usuario</h1>
        
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-xl-4 col-sm-12">
                <img class="imgRecycler border border-success rounded-circle" style="display: block ;margin-left: auto; margin-right: auto; max-width: 100%; max-height: 100%" src="{{url("/Harlan.jpg")}}" alt="Michele Osama">
                <h3 class="text-center mb-1 pb-1">Harlan Barrera</h3>
                <p class="text-center lead">Miembro hace 1 año</p>
            </div>
            <div class="col-xl-8 col-sm-12">
                <h2 class="py-4 text-center">Informacion general</h2>
                <p class="text-center">Dirección: Diagonal 32D #32 sur 40</p>
                <p class="text-center">Municipio de Envigado</p>
                <p class="text-center">Metodo de recolección: Tocar el timbre</p>
                <p class="text-center">Reciclador asignado: Avimilé Ribas</p>
                <h3 class="text-center py-3">Asignar reciclador</h3>
                <label class="lead">Buscar reciclador: </label>
                <input class="form-control w-75 mb-3" name="busqueda" autofocus placeholder="Nombre" style="display: inline">
                <ul class="list-group list-group-flush border">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-xl-4 col-sm-12">
                                <img src="{{ url('/Avimile.jpg') }}" class="border border-success rounded-circle" alt="Avimilé" style="display: block; margin-right: auto; margin-left: auto; max-height: 100%; max-width: 40%">
                                <p class="text-center mt-1">Miembro hace 3 meses</p>
                            </div>
                            <div class="col-xl-8 col-sm-12">
                                <p class="lead text-center border-bottom">Avimilé Ribas</p>
                                <p>Apodo: Avi</p>
                                <p>Teléfono: 333 31 42</p>
                                <p>Usuarios asignados: 4</p>
                                <a href="{{ url('/comunidad') }}">
                                    <button type="submit" class="btn btn-danger w-100">Quitar asignación</button>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-xl-4 col-sm-12">
                                <img src="{{ url('/Cano.jpg') }}" class="border border-success rounded-circle" alt="Avimilé" style="display: block; margin-right: auto; margin-left: auto; max-height: 100%; max-width: 40%">
                                <p class="text-center mt-1">Miembro hace 2 años</p>
                            </div>
                            <div class="col-xl-8 col-sm-12">
                                <p class="lead text-center border-bottom">German Exequiel Cano</p>
                                <p>Apodo: Cano</p>
                                <p>Teléfono: 313 61 72</p>
                                <p>Usuarios asignados: 6</p>
                                <a href="{{ url('/comunidad') }}">
                                    <button type="submit" class="btn btn-success w-100">Asignar</button>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-xl-4 col-sm-12">
                                <img src="{{ url('/Jeison.jpg') }}" class="border border-success rounded-circle" alt="Avimilé" style="display: block; margin-right: auto; margin-left: auto; max-height: 100%; max-width: 40%">
                                <p class="text-center mt-1">Miembro hace 1 año</p>
                            </div>
                            <div class="col-xl-8 col-sm-12">
                                <p class="lead text-center border-bottom">Jeison Guzmán</p>
                                <p>Apodo: Jeison</p>
                                <p>Teléfono: 253 19 72</p>
                                <p>Usuarios asignados: 12</p>
                                <a href="{{ url('/comunidad') }}">
                                    <button type="submit" class="btn btn-success w-100">Asignar</button>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-xl-4 col-sm-12">
                                <img src="{{ url('/Avimile.jpg') }}" class="border border-success rounded-circle" alt="Avimilé" style="display: block; margin-right: auto; margin-left: auto; max-height: 100%; max-width: 40%">
                                <p class="text-center mt-1">Miembro hace 1 mes</p>
                            </div>
                            <div class="col-xl-8 col-sm-12">
                                <p class="lead text-center border-bottom">Kevin Tellez</p>
                                <p>Apodo: Kete</p>
                                <p>Teléfono: 330 21 19</p>
                                <p>Usuarios asignados: 1</p>
                                <a href="{{ url('/comunidad') }}">
                                    <button type="submit" class="btn btn-success w-100">Asignar</button>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-xl-4 col-sm-12">
                                <img src="{{ url('/Avimile.jpg') }}" class="border border-success rounded-circle" alt="Avimilé" style="display: block; margin-right: auto; margin-left: auto; max-height: 100%; max-width: 40%">
                                <p class="text-center mt-1">Miembro hace 6 meses</p>
                            </div>
                            <div class="col-xl-8 col-sm-12">
                                <p class="lead text-center border-bottom">Stiven Mendoza</p>
                                <p>Apodo: Mendo</p>
                                <p>Teléfono: 313 13 23</p>
                                <p>Usuarios asignados: 4</p>
                                <a href="{{ url('/comunidad') }}">
                                    <button type="submit" class="btn btn-success w-100">Asignar</button>
                                </a>
                            </div>
                        </div>
                    </li>
                  </ul>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <div class="d-flex flex-row-reverse bd-highlight">
            <a href="{{ url('/comunidad') }}">
                <button type="submit" class="btn btn-success ml-2">Confirmar cambios</button>
            </a>
            <a href="{{ url('/comunidad') }}">
                <button type="submit" class="btn btn-danger">Salir</button>
            </a>
        </div>        
    </div>
</div>
@endsection
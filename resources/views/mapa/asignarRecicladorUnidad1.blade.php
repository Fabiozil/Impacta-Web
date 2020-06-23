@extends('layouts.app')
@section('content')
<div class="card shadow">
    <div class="card-header">
        <h1 class="py-3 text-center text-success">Asignar reciclador a usuario</h1>

    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-xl-4 col-sm-12">
                <img class="imgRecycler border border-success rounded-circle"
                    style="display: block ;margin-left: auto; margin-right: auto; max-width: 100%; max-height: 100%"
                    src="{{url("/unidad1.jpg")}}" alt="Michele Osama">
                <h3 class="text-center mb-1 pb-1">Torres del Riachuelo</h3>
                <p class="text-center lead">Miembro hace 1 año</p>
            </div>
            <div class="col-xl-8 col-sm-12">
                <h2 class="py-4 text-center">Informacion general</h2>
                <p class="text-center">Dirección: Calle 62B Carrera 50</p>
                <p class="text-center">Municipio de Itagui</p>
                <p class="text-center">Emisiones evitadas: 9 ton CO2e</p>
                <p class="text-center">Recolectas realizadas: 56</p>
                <p class="text-center">Apartamentos: 89<p>
                <p class="text-center">Reciclador asignado: German Exequiel Cano</p>
                <h3 class="text-center py-3">Asignar reciclador</h3>
                <ul class="list-group list-group-flush border">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-xl-4 col-sm-12">
                                <img src="{{ url('/Avimile.jpg') }}" alt="Avimilé"
                                    style="display: block; margin-right: auto; margin-left: auto; max-height: 100%; max-width: 40%">
                                <p class="text-center mt-1">Miembro hace 3 meses</p>
                            </div>
                            <div class="col-xl-8 col-sm-12">
                                <p class="lead text-center">Avimilé Ribas</p>
                                <p>Usuarios asignados: 4</p>
                                <a href="{{ url('/comunidad') }}">
                                    <button type="submit" class="btn btn-success w-100">Asignar</button>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-xl-4 col-sm-12">
                                <img src="{{ url('/Cano.jpg') }}" alt="Cano"
                                    style="display: block; margin-right: auto; margin-left: auto; max-height: 100%; max-width: 40%">
                                <p class="text-center mt-1">Miembro hace 2 años</p>
                            </div>
                            <div class="col-xl-8 col-sm-12">
                                <p class="lead text-center">German Exequiel Cano</p>
                                <p>Usuarios asignados: 6</p>
                                <a href="{{ url('/comunidad') }}">
                                    <button type="submit" class="btn btn-danger w-100">Quitar asignación</button>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-xl-4 col-sm-12">
                                <img src="{{ url('/Jeison.jpg') }}" alt="Avimilé"
                                    style="display: block; margin-right: auto; margin-left: auto; max-height: 100%; max-width: 40%">
                                <p class="text-center mt-1">Miembro hace 1 año</p>
                            </div>
                            <div class="col-xl-8 col-sm-12">
                                <p class="lead text-center">Jeison Guzmán</p>
                                <p>Usuarios asignados: 12</p>
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
        <a href="{{ url('/comunidad') }}">
            <button type="submit" class="btn btn-success">Confirmar cambios</button>
        </a>
        <a href="{{ url('/comunidad') }}">
            <button type="submit" class="btn btn-danger">Salir</button>
        </a>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h1 class="py-3 text-center text-success">Otras corporaciones</h1>
        
    </div>
    <div class="card-body">
        <a href="{{ url('/comunidad') }}">
            <button type="submit" class="btn btn-success mb-2">Ver mi comunidad</button>
        </a>
        <div id="map" class="h-100 w-100" style="border:2px solid;">
            <img src="{{url("/5.png")}}" alt="Mapa" style="max-height: 100%; max-width: 100%">
        </div>
    </div>
    <div class="card-footer">
        <select class="form-control w-25 mb-2" name="type" id="type" style="display: inline">
            <option value="0">Opciones de filtrado</option>
            <option value="1">Nombre</option>
            <option value="2">Dirección</option>
        </select>
        <input class="form-control w-25" name="busqueda" autofocus placeholder="Busqueda" style="display: inline">
        <br>
        <a href="{{ url('/corporaciones') }}">
            <button type="submit" class="btn btn-success">Buscar corporaciones</button>
        </a>
    </div>
</div>


@endsection
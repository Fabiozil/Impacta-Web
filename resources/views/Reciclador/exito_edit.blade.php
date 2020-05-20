@extends('Reciclador.layout_exito')
@section('texto-confirm')
    <p class="lead">¡El perfil de tu reciclador se ha modificado de manera satisfactoria!</p>
@endsection
@section('boton-redirigir')
    <a href="{{ url('/recicladores') }}">
        <div class="row justify-content-center mb-3 mt-5">
            <button type="submit" class="btn btn-primary">Continuar</button>
        </div>
    </a>
@endsection
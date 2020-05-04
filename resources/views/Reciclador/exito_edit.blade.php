@extends('Reciclador.layout_exito')
@section('texto-confirm')
    <p class="lead">Se ha editado satisfactoriamente!</p>
@endsection
@section('boton-redirigir')
    <a href="{{ url('/recicladores') }}">
        <div class="py-5 text-center" style="height: 20%; margin-bottom: 10px">
            <button type="submit" class="btn btn-light">Continuar</button>
        </div>
    </a>
@endsection
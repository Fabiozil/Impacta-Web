@extends('Reciclador.layout_confirmar')
@section('operacion')
    <h1>Se editará el perfil</h1>
    <p class="lead">¿Deseas guardar los cambios anteriores al perfil de tu reciclador? Para aceptar por favor presiona el botón de confirmar más abajo.l</p>
@endsection
@section('redirigir')
<a href="{{ url('/editar_reciclador') }}">
    <div class="row justify-content-center mb-3 mt-5">
        <button type="submit" class="btn btn-danger">Volver</button>
    </div>
</a>
<a href="{{ url('/exito_edit') }}">
    <div class="row justify-content-center mb-3 mt-5">
        <button type="submit" class="btn btn-primary">Confirmar</button>
    </div>
</a>
@endsection
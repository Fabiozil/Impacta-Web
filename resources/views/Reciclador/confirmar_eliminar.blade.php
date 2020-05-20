@extends('Reciclador.layout_confirmar')
@section('operacion')
<h1>Se eliminará el perfil</h1>
<p class="lead">¿Deseas Eliminar el perfil de este reciclador? Para aceptar por favor presiona el botón de confirmar más abajo.  Recuerda que una vez eliminado el perfil no se podrá recuperar.</p>
@endsection
@section('redirigir')
<a href="{{ url('/recicladores') }}">
    <div class="row justify-content-center mb-3 mt-5">
        <button type="submit" class="btn btn-danger">Cancelar</button>
    </div>
</a>
<a href="{{ url('/exito_delete') }}">
    <div class="row justify-content-center mb-3">
        <button type="submit" class="btn btn-primary">Confirmar</button>
    </div>
</a>
@endsection

@extends('Reciclador.layout_confirmar')
@section('operacion')
    <p class="lead">Desea realizar los cambios anteriores en el perfil?</p>
@endsection
@section('redirigir')
<a href="{{ url('/editar_reciclador') }}">
    <div class="py-5 text-center" style="height: 20%; margin-bottom: 10px">
        <button type="submit" class="btn btn-light">Atras</button>
    </div>
</a>
<a href="{{ url('/exito_edit') }}">
    <div class="py-5 text-center" style="height: 20%; margin-bottom: 10px">
        <button type="submit" class="btn btn-light">Confirmar</button>
    </div>
</a>
@endsection
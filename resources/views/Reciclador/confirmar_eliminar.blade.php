@extends('Reciclador.layout_confirmar')
@section('operacion')
<p class="lead">Desea eliminar este perfil?. Una vez eliminado el perfil no se podra recuperar</p>
@endsection
@section('redirigir')
<a href="{{ url('/recicladores') }}">
    <div class="py-5 text-center" style="height: 20%; margin-bottom: 10px">
        <button type="submit" class="btn btn-light">Atras</button>
    </div>
</a>
<a href="{{ url('/exito_delete') }}">
    <div class="py-5 text-center" style="height: 20%; margin-bottom: 10px">
        <button type="submit" class="btn btn-light">Confirmar</button>
    </div>
</a>
@endsection

@extends('layouts.app')

@section('content')

<a href="/indicadores/nuevo">
    <button class="btn btn-secondary">Nueva Medición</button>
</a>
<a href="/indicadores/historial">
    <button class="btn btn-secondary">Historial</button>
</a>
<a href="/indicadores">
    <button class="btn btn-secondary">Emisiones</button>
</a>
<br />
<h1>
    Materiales Aprovechados
</h1>
<br />
<h1>Registro de emisiones</h1>
<br>
<div class="row">
    <div class="col-4">   
        <h3>Histórico de emisiones evitadas por la corporación</h3>   
        <h5 id="historico">123</h5>
    </div>
    <div class="col-6">
        <p>Se han evitado que 2000 particulares emitan sus emisiones en el Valle de Aburrá.
            Se han evitado que se se prenden 100 bombillos eléctricos por 1 hora innecesariamente.
            Se han evitado 40 toneladas de residuos en el relleno sanitario.
        </p>
    </div> 
<div class="row">
    <div class="col-4">   
        <h3>Emisiones evitadas dentro de la fecha de corte</h3>     
        <h5 id="emisiones">123</h5> 
    </div>
    <div class="col-6">
        <p>Se evitaron que 10 particulares emitan sus emisiones en el Valle de Aburrá entre el 01/01/2020 y el 07/01/2020.
            Se evitaron que se se prendan 5 bombillos eléctricos por 1 hora innecesariamente entre el 01/01/2020 y el 07/01/2020.
            Se han evitado 0,1 toneladas de residuos en el relleno sanitario.
        </p> 
    </div>
</div>
@endsection
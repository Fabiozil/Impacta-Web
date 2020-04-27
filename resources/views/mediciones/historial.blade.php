@extends('nav.nav')

@section('conteint') 

<a href="NuevaMedicion">
    <button class="btn">Nueva Medición</button>
</a>
<a href="HistorialMediciones">
    <button class="btn">Historial</button>
</a>
<a href="Emisiones">
    <button class="btn">Emisiones</button>
</a>
<br />


<h1>Bajo construcción</h1>
{{-- 
    Como hacer el grafico? Graph.js
         Esperando datos  
--}}

<img id= "graph" src="{{asset("graph.jpg")}}" alt="Grafico">
@endsection
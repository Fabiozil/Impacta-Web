@extends('layouts.app')

@section('content')
<div class="card shadow">
    <div class="card-header">
        <h1 class="py-3 text-center text-success">Registro de emisiones</h1>
    </div>
    <div class="card-body">
        <div class="d-flex flex-row-reverse">
            <span class="btn btn-info mb-2 ml-0" data-toggle="tooltip" data-placement="top"
            title="Utiliza esta pestaña para ver el histograma de los materiales reciclados por tu corporacion.">
            <i class="fas fa-info-circle"></i></span>
            <a href="{{ url('/historial') }}">
                <button type="submit" class="btn btn-success mb-2 mr-0 ml-2">Ver historico de emisiones
                </button>
            </a>

            <span class="btn btn-info mb-2 ml-0" data-toggle="tooltip" data-placement="top"
            title="Utiliza esta pestaña para ingresar una nueva medición.">
            <i class="fas fa-info-circle"></i></span>
            <a href="{{ url('/nuevamedicion') }}">
                <button type="submit" class="btn btn-success mb-2 mr-0 ml-2">Ingresar nueva medición
                </button>
            </a>

            <span class="btn btn-info mb-2 ml-0" data-toggle="tooltip" data-placement="top"
            title="Utiliza esta pestaña para ver los indicadores ambientales de tu corporación.">
            <i class="fas fa-info-circle"></i></span>
            <a href="#">
                <button type="submit" class="btn btn-outline-success mb-2 mr-0">Ver resumen de emisiones
                </button>
            </a>
        </div>
        <div class="row mb-3">
            <div class="col-4">   
                <h3>Histórico de emisiones evitadas por la corporación</h3>   
                <h5 id="historico">Cantidad</h5>
            </div>
            <div class="col-6">
                <p>Se han evitado que 2000 particulares emitan sus emisiones en el Valle de Aburrá.
                    Se han evitado que se se prenden 100 bombillos eléctricos por 1 hora innecesariamente.
                    Se han evitado 40 toneladas de residuos en el relleno sanitario.
                </p>
            </div> 
        </div>
        <div class="row">
            <div class="col-4">   
                <h3>Emisiones evitadas dentro de la fecha de corte</h3>     
                <h5 id="emisiones">Cantidad</h5>
            </div>
            <div class="col-6">
                <p>Se evitaron que 10 particulares emitan sus emisiones en el Valle de Aburrá entre el 01/01/2020 y el 07/01/2020.
                    Se evitaron que se se prendan 5 bombillos eléctricos por 1 hora innecesariamente entre el 01/01/2020 y el 07/01/2020.
                    Se han evitado 0,1 toneladas de residuos en el relleno sanitario.
                </p> 
            </div>
        </div>
    </div>
    <div class="card-footer">

    </div>
</div>



        
@endsection
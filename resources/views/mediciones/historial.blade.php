@extends('layouts.app')
@section('navbar-left')
<input type="text" class="form-control ml-2" placeholder="Buscar reciclador" aria-label="Buscador de recicladores" aria-describedby="filtrar">
            <div class="input-group-append">
                <button class="btn btn-outline-success" type="button" id="filtrar" onclick="buscar()">
                <i class="fas fa-search"></i></button>
            </div>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h1 class="py-3 text-center text-success">Desempeño Ambiental</h1>
        <h3 class="lead text-center">Aquí podrás visualizar la información histórica del material reciclable aprovechado
            por la corporación. Además, se presenta el impacto ambiental positivo logrado por su recuperación</h3>

    </div>
    <div class="border-bottom border-solid">
        <div class="d-flex flex-row pl-2 pt-1">
            <a href="#">
                <button type="submit" class="btn btn-outline-success mb-2 mr-0 ml-2">Información Histórica
                </button>
            </a>
            <span class="btn btn-info mb-2 ml-0" data-toggle="tooltip" data-placement="top"
                title="Utiliza esta pestaña para ver el histograma de los materiales reciclados por tu corporacion.">
                <i class="fas fa-info-circle"></i></span>
                
                <a href="{{ url('/nuevamedicion') }}">
                    <button type="submit" class="btn btn-success mb-2 mr-0 ml-2">Nueva medición
                    </button>
                </a>
                <span class="btn btn-info mb-2 ml-0" data-toggle="tooltip" data-placement="top"
                    title="Utiliza este botón para ingresar una nueva medición del material reciclable recuperado desde la última fecha de corte">
                    <i class="fas fa-info-circle"></i></span>

        </div>
    </div>
    <div class="card-body">
        <div class="input-group inline w-100 mb-2">
            <select class="form-control mr-1" name="type" id="lista_busqueda" style="display: inline">
                <option value="Materiales">Ver según materiales</option>
                <option value="Fecha de corte">Ver según fecha de corte</option>
            </select>
            <select class="form-control mr-1" name="type" id="lista_materiales" style="display: inline">
                <option>Metal</option>
                <option>Plástico</option>
                <option>Vidrio</option>
                <option>Papel</option>
                <option>Cartón</option>
                <option>Todos</option>
            </select>
            <label for="">Desde: </label>
            <input class="form-control ml-1" type="date" id="fechacorte" name="fechacorte"
                            value="1 Enero 2020" />
            <label for="">Hasta:</label>
            <input class="form-control ml-1" type="date" id="fechacorte" name="fechacorte"
                            value="1 Enero 2020" />
            <button type="submit" class="btn btn-primary mr-1 ml-2" onclick="mostrarGraficaDistinta()">Aplicar</button>
        </div>

        <div id="map" class="h-100 w-100" style="border:2px solid; ">
            <img src="{{url("/grafica.png")}}" alt="Mapa" style="z-index: 0; max-height: 100%; max-width: 100%"
                id="Grafica">
        </div>

    </div>
    <div class="card-footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-sm-12">
                    <h2>Emisiones evitadas - última fecha de corte</h2>
                    <p>Jul 21, 2020 - Ago 07,2020</p>
                    <h1 id="emisiones"><strong>28 ton C02</strong></h1>
                </div>
                <div class="col-xl-6 col-sm-12">
                    <small>La fecha de corte ingresada fue del 1 de enero del 2017 al 31 de julio del 2017</small>
                    <h5 class="lead">
                        Datos de equivalencia para el periodo registrado:
                    </h5>
                    <ol class="text-success bg-white">
                        <li>
                            Lo equivalente a retirar X vehículos particulares en 1 año en el Área Metropolitana del Valle de Aburrá.
                        </li>
                        <li>
                            Para compensar esta cantidad de CO2 se requieren de 2X árboles
                        </li>
                        <li>
                            Dato numero 3
                        </li>
                    </ol>

                </div>
            </div>
            <div class="row mt-3">
                <div class="col-xl-4 col-sm-12">
                    <h2>Histórico de emisiones</h2>
                    <p>Desde 2017</p>
                    <h1 id="historico"><strong>128 ton CO2</strong></h1>
                </div>
                <div class="col-xl-6 col-sm-12">
                    <small>Emisiones de CO2 evitadas desde el ingreso de la organización</small>
                    <h5 class="lead">
                        Datos de equivalencia para el historico de la corporación:
                    </h5>
                    <ol class="text-success bg-white">
                        <li>
                            Lo equivalente a retirar X vehículos particulares en 1 año en el Área Metropolitana del Valle de Aburrá.
                        </li>
                        <li>
                            Para compensar esta cantidad de CO2 se requieren de 2X árboles
                        </li>
                        <li>
                            Dato numero 3
                        </li>
                    </ol>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    function mostrarGraficaDistinta() {
        var lista_busqueda = document.getElementById("lista_materiales")
        var objeto_busqueda = lista_busqueda.selectedIndex;
        var grafica = document.getElementById("Grafica");
        console.log(objeto_busqueda);
        switch (objeto_busqueda) {
            case 0:
                grafica.setAttribute("src", "{{url("/graficaMetal.png")}}");
                break;
            case 1:
                grafica.setAttribute("src", "{{url("/graficaPlastico.png")}}");
                break;
            case 2:
                grafica.setAttribute("src", "{{url("/graficaVidrio.png")}}");
                break;
            case 3:
                grafica.setAttribute("src", "{{url("/graficaPapel.png")}}");
                break;
            case 4:
                grafica.setAttribute("src", "{{url("/graficaCarton.png")}}");
                break;
            case 5:
                grafica.setAttribute("src", "{{url("/grafica.png")}}");
            default:
                grafica.setAttribute("src", "{{url("/grafica.png")}}");
        }
        return 0;
    }

</script>

@endsection

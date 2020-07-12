@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h1 class="py-3 text-center text-success">Desempeño Ambiental</h1>
        <h3 class="lead text-center">Aquí podrás visualizar el historial de la cantidad de materiales reciclados por tus
            recicladores. También
            podrás enviar comunicaciones a tus usuarios acerca de los logros obtenidos en ese sentido.</h3>

    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-xl-12">
                <div class="d-flex flex-row-reverse">
                    <span class="btn btn-info mb-2 ml-0" data-toggle="tooltip" data-placement="top"
                        title="Utiliza esta pestaña para ingresar una nueva medición.">
                        <i class="fas fa-info-circle"></i></span>
                    <a href="{{ url('/nuevamedicion') }}">
                        <button type="submit" class="btn btn-success mb-2 mr-0 ml-2">Ingresar nueva medición
                        </button>
                    </a>
                    <span class="btn btn-info mb-2 ml-0" data-toggle="tooltip" data-placement="top"
                        title="Utiliza esta pestaña para ver el histograma de los materiales reciclados por tu corporacion.">
                        <i class="fas fa-info-circle"></i></span>
                    <a href="#">
                        <button type="submit" class="btn btn-outline-success mb-2 mr-0 ml-2">Ver historico de emisiones
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="input-group inline w-100 mb-2">
            <label for="" class="lead mr-2">Opciones de vista:</label>
            <select class="form-control mr-1" name="type" id="lista_busqueda" style="display: inline">
                <option>Material: Metal</option>
                <option>Material: Plástico</option>
                <option>Material: Vidrio</option>
                <option>Material: Papel</option>
                <option>Material: Cartón</option>
                <option>General</option>
            </select>
            <div class="input-group-append">
                <span class="btn btn-info" data-toggle="tooltip" data-placement="top"
                    title="Utiliza esta opción de búsqueda para seleccionar el material especifico a ver en la grafica">
                    <i class="fas fa-info-circle"></i></span>
            </div>
            <button type="submit" class="btn btn-primary mr-1 ml-2" onclick="mostrarGraficaDistinta()">Ver en
                grafica</button>
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
                    <h4>Emisiones evitadas dentro de la fecha de corte ingresada:</h4>
                    <h1 id="emisiones"><strong>28 ton C02</strong></h1>
                </div>
                <div class="col-xl-6 col-sm-12">
                    <small>La fecha de corte ingresada fue del 1 de enero del 2017 al 31 de julio del 2017</small>
                    <h5 class="lead">
                        Datos de equivalencia para el periodo registrado: 
                    </h5>
                    <ol class="text-success">
                        <li>
                            Dato numero 1
                        </li>
                        <li>
                            Dato numero 2
                        </li>
                        <li>
                            Dato numero 3
                        </li>
                    </ol>
                    
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-xl-4 col-sm-12">
                    <h4>Histórico de emisiones evitadas por la corporación desde el 2017:</h4>
                    <h1 id="historico"><strong>128 ton CO2</strong></h1>
                </div>
                <div class="col-xl-6 col-sm-12">
                    <small>Emisiones de CO2 evitadas desde el ingreso de la organización</small>
                    <h5 class="lead">
                        Datos de equivalencia para el historico de la corporación:
                    </h5>
                    <ol class="text-success">
                        <li>
                            Dato numero 1
                        </li>
                        <li>
                            Dato numero 2
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
        var objeto_busqueda = lista_busqueda.selectedIndex;
        var grafica = document.getElementById("Grafica");
        console.log(objeto_busqueda);
        switch (objeto_busqueda) {
            case 0:
                grafica.setAttribute("src", "{{url("/graficaMetal.png ")}}");
                break;
            case 1:
                grafica.setAttribute("src", "{{url("/graficaPlastico.png ")}}");
                break;
            case 2:
                grafica.setAttribute("src", "{{url("/graficaVidrio.png ")}}");
                break;
            case 3:
                grafica.setAttribute("src", "{{url("/graficaPapel.png ")}}");
                break;
            case 4:
                grafica.setAttribute("src", "{{url("/graficaCarton.png ")}}");
                break;
            case 5:
                grafica.setAttribute("src", "{{url("/grafica.png ")}}");
            default:
                grafica.setAttribute("src", "{{url("/grafica.png ")}}");
        }
    }

</script>

@endsection

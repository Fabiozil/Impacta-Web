@extends('layouts.app')

@section('content')


<div class="container">
    <div class="card border shadow">
        <div class="card-header">
            <h1 class="py-2 text-center text-success">
                Materiales Aprovechados
            </h1>
            <h3 class="lead text-center">Aquí podrás ingresar los datos de una nueva recoleccion, llena los campos segun
                la cantidad de material recolectado en su campo correspondiente para registrar la recoleccion</h3>
        </div>
        <div class="card-body">
            <div class="d-flex flex-row-reverse">
                <span class="btn btn-info mb-2 ml-0" data-toggle="tooltip" data-placement="top"
                    title="Utiliza esta pestaña para ingresar una nueva medición.">
                    <i class="fas fa-info-circle"></i></span>
                <a href="#">
                    <button type="submit" class="btn btn-outline-success mb-2 mr-0 ml-2">Ingresar nueva medición
                    </button>
                </a>
                <span class="btn btn-info mb-2 ml-0" data-toggle="tooltip" data-placement="top"
                    title="Utiliza esta pestaña para ver el histograma de los materiales reciclados por tu corporacion.">
                    <i class="fas fa-info-circle"></i></span>
                <a href="{{ url('/historial') }}">
                    <button type="submit" class="btn btn-success mb-2 mr-0 ml-2">Ver historico de emisiones
                    </button>
                </a>


            </div>
            <form action="/indicadores">
                <label for="fechacorte">Fecha de Corte: </label>
                <div class="input-group inline w-100 mb-2">
                    <div class="col-xl-6 col-sm-12 pl-0">
                        <label class="mr-2">Inicio:</label>
                        <input class="form-control mb-3" type="date" id="fechacorte" name="fechacorte"
                            value="1 Enero 2020" />
                    </div>
                    <div class="col-xl-6 col-sm-12 pl-0 pr-0">
                        <label class="ml-2 mr-2">Fin:</label>
                        <input class="form-control mb-3" type="date" id="fechacorte" name="fechacorte"
                            value="1 Enero 2020" />

                    </div>
                </div>
                <div class="form-row">
                    <div class="col-xl-6 col-sm-12">
                        <label for="organico">Metales (kg):</label>
                        <div class="input-group mb-2">
                            <input class="form-control" type="number" id="organico" name="organico" value="0" />
                            <div class="input-group-append">
                                <span class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Registra el
                            primer y segundo nombre (si aplica) de tu reciclador como en
                            el ejemplo.">
                                    <i class="fas fa-info-circle"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-sm-12">
                        <label for="vidrio">KG Cartón (kg):</label><br />
                        <div class="input-group mb-2">
                            <input class="form-control" type="number" id="organico" name="organico" value="0" />
                            <div class="input-group-append">
                                <span class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Registra el
                            primer y segundo nombre (si aplica) de tu reciclador como en
                            el ejemplo.">
                                    <i class="fas fa-info-circle"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-xl-6 col-sm-12">
                        <label for="latas">Vidrio (kg):</label><br />
                        <div class="input-group mb-2">
                            <input class="form-control" type="number" id="organico" name="organico" value="0" />
                            <div class="input-group-append">
                                <span class="btn btn-info" data-toggle="tooltip" data-placement="left" data-html="true"
                                    title="
                                    <ol>
                                        <li>
                                            <p><strong>Vidrio reciclable:</strong> Materiales de vidrio que serán reciclados
                                            para generar nueva materia prima, también conocido como vidrio quebrado. P. ej.
                                            Vidrio casco transparente, vidrio casco verde y vidrio casco ambar.</p>
                                        </li>
                                        <li>
                                            <p><strong>Vidrio reutilizable:</strong> Materiales de vidrio que serán reutilizados
                                                dentro de una cadena de producción, también llamado frasco bocón P. ej. Vidrio
                                                casco transparente, vidrio casco verde y vidrio casco ambar. En el caso de no
                                                contar con esta clasificación, por favor ingresar el material de vidrio en la
                                                subcategoría de vidrios a reciclar</p>
                                        </li>
                                    </ol>
                                    ">

                                    <i class="fas fa-info-circle"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-sm-12">
                        <label for="plastico">Plástico (kg):</label><br />
                        <div class="input-group mb-2">
                            <input class="form-control" type="number" id="organico" name="organico" value="0" />
                            <div class="input-group-append">
                                <span class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Registra el
                            primer y segundo nombre (si aplica) de tu reciclador como en
                            el ejemplo.">
                                    <i class="fas fa-info-circle"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-xl-6 col-sm-12">
                        <label for="papel">Papel (kg):</label><br />
                        <div class="input-group mb-2">
                            <input class="form-control" type="number" id="organico" name="organico" value="0" />
                            <div class="input-group-append">
                                <span class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Registra el
                            primer y segundo nombre (si aplica) de tu reciclador como en
                            el ejemplo.">
                                    <i class="fas fa-info-circle"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-footer">
            <div class="d-flex flex-row-reverse">
                <a data-toggle="modal" data-target="#detallesModal">
                    <button type="submit" class="btn btn-success mb-2 mr-0 ml-2">Ingresar nueva medición
                    </button>
                </a>
                <a href="{{ url('/emisiones') }}">
                    <button type="submit" class="btn btn-danger mb-2 mr-0 ml-2">Salir
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="detallesModal" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-success" id="favoritesModalLabel">Resumen del nuevo ingreso</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="row">
                                <div class="col-xl-4 col-md-12">
                                    <div class="row">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="container">
                                                        <div class="py-5 text-center inline align-middle">
                                                            Fecha de corte: 3 de Mayo del 2020 al 5 de junio del 2020
                                                        </div>
                                                        <div class="py-4 text-center inline align-middle">
                                                            <h3>Emisiones de CO2 evitadas:</h3>
                                                            <h1><strong>5 ton CO2</strong></h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-md-12">
                                    <div class="row h-100">
                                        <div class="container p-3 border-left">
                                            <div class="row">
                                                <div class="col-xl-10">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="row mb-2">
                                                                <div class="col-12">
                                                                    <h4>Metal: </h4>
                                                                </div>
                                                                <div class="col-12">
                                                                    <h5>Recolectado: 2 (kg)</h5>
                                                                    <h5>Equivalencia: 0.2 ton CO2</h5>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-2">
                                                                <div class="col-12">
                                                                    <h4>Cartón: </h4>
                                                                </div>
                                                                <div class="col-12">
                                                                    <h5>Vidrio: 2 (kg)</h5>
                                                                    <h5>Equivalencia: 0.2 ton CO2</h5>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-2">
                                                                <div class="col-12">
                                                                    <h4>Vidrio: </h4>
                                                                </div>
                                                                <div class="col-12">
                                                                    <h5>Recolectado: 2 (kg)</h5>
                                                                    <h5>Equivalencia: 0.2 ton CO2</h5>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-2">
                                                                <div class="col-12">
                                                                    <h4>Plástico: </h4>
                                                                </div>
                                                                <div class="col-12">
                                                                    <h5>Recolectado: 2 (kg)</h5>
                                                                    <h5>Equivalencia: 0.2 ton CO2</h5>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <h4>Papel: </h4>
                                                                </div>
                                                                <div class="col-12">
                                                                    <h5>Recolectado: 2 (kg)</h5>
                                                                    <h5>Equivalencia: 0.2 ton CO2</h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <span class="pull-right"><button type="button" class="btn btn-danger"
                        data-dismiss="modal">Atras</button></span>
                <a href="{{url("/historial")}}">
                    <button type="button" class="btn btn-success">Confirmar nueva medición</button></span>
                </a>


            </div>
        </div>
    </div>
</div>

@endsection

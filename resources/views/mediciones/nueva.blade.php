@extends('layouts.app')
@section('navbar-left')
<input type="text" class="form-control ml-2" placeholder="Buscar reciclador" aria-label="Buscador de recicladores" aria-describedby="filtrar">
            <div class="input-group-append">
                <button class="btn btn-outline-success" type="button" id="filtrar" onclick="buscar()">
                <i class="fas fa-search"></i></button>
            </div>
@endsection
@section('content')


<div class="container">
    <div class="card border shadow">
        <div class="card-header">
            <h1 class="py-2 text-center text-success">
                Nueva medición
            </h1>
            <h3 class="lead text-center">Aquí podrás la cantidad de material reciclable recolectada para una nueva
                medición. Llena los campos según el tipo de material correspondiente a cada uno de ellos.</h3>
        </div>
        <div class="border-bottom border-solid">
            <div class="d-flex flex-row pl-2 pt-1">
                <a href="{{ url('/historial') }}">
                    <button type="submit" class="btn btn-success mb-2 mr-0 ml-2">Información Histórica
                    </button>
                </a>
                <span class="btn btn-info mb-2 ml-0" data-toggle="tooltip" data-placement="top"
                    title="Utiliza esta pestaña para ver el histograma de los materiales reciclados por tu corporacion.">
                    <i class="fas fa-info-circle"></i></span>

                <a href="#">
                    <button type="submit" class="btn btn-outline-success mb-2 mr-0 ml-2">Nueva medición
                    </button>
                </a>
                <span class="btn btn-info mb-2 ml-0" data-toggle="tooltip" data-placement="top"
                    title="Utiliza este botón para ingresar una nueva medición del material reciclable recuperado desde la última fecha de corte">
                    <i class="fas fa-info-circle"></i></span>

            </div>
        </div>
        <div class="card-body">
            <form action="/indicadores">
                <div class="border-bottom border-solid mb-2">
                    <h2 for="fechacorte" class="text-success">Fecha de Corte: </h2>
                    <div class="input-group inline w-100">
                        <div class="col-xl-6 col-sm-12 pl-0">
                            <label class="mr-2">Desde:</label>
                            <input class="form-control mb-3" type="date" id="fechacorte" name="fechacorte"
                                value="1 Enero 2020" />
                        </div>
                        <div class="col-xl-6 col-sm-12 pl-0 pr-0">
                            <label class="ml-2 mr-2">Hasta:</label>
                            <input class="form-control mb-3" type="date" id="fechacorte" name="fechacorte"
                                value="1 Enero 2020" />

                        </div>
                    </div>

                </div>
                <h2 class="text-success">Categorias de material</h2>
                <div class="form-row">
                    <div class="col-xl-6 col-sm-12">
                        <label for="organico">Cartón (kg):</label>
                        <div class="input-group mb-2">
                            <input class="form-control" type="number" id="organico" name="organico" value="0" />
                            <div class="input-group-append">
                                <span class="btn btn-info" data-toggle="tooltip" data-html="true" data-placement="top"
                                    title="<ol>
                                            <li>
                                                <p><strong>Cartón:</strong> cartón corrugado y plegadiza. P. ej. cajas de cartón.</p>
                                            </li>
                                            <li>
                                                <p><strong>Tetrapak:</strong> cajas de tetrapak. P. ej. cajas tetrapak de leche..</p>
                                            </li>
                                        </ol>
                                ">
                                    <i class="fas fa-info-circle"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-sm-12">
                        <label for="vidrio">Metales (kg):</label><br />
                        <div class="input-group mb-2">
                            <input class="form-control" type="number" id="organico" name="organico" value="0" />
                            <div class="input-group-append">
                                <span class="btn btn-info" data-html="true" data-toggle="tooltip" data-placement="top"
                                    title="
                                <ol>
                                    <li>
                                        <p><strong>Aluminio:</strong>aluminio grueso, aluminio Karla, aluminio perfil y aluminio persiana. P.ej. latas de cerveza</p>
                                    </li>
                                    <li>
                                        <p><strong>Cobre:</strong> cobre amarillo, cobre rojo y cobre rojo brillante. P. ej. tubería de cobre.</p>
                                    </li>
                                    <li>
                                        <p><strong>Cobre: </strong> Materiales hechos de hierro, cobre y/o zinc. P. ej. varillas de acero.</p>
                                    </li>
                                </ol>
                                ">
                                    <i class="fas fa-info-circle"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-xl-6 col-sm-12">
                        <label for="latas">Papel:</label><br />
                        <div class="input-group mb-2">
                            <input class="form-control" type="number" id="organico" name="organico" value="0" />
                            <div class="input-group-append">
                                <span class="btn btn-info" data-toggle="tooltip" data-placement="left" data-html="true"
                                    title="Materiales reciclables a partir del papel. P.ej. papel de archivo, papel bond y/o papel periódico plano">

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
                                <span class="btn btn-info" data-toggle="tooltip" data-html="true" data-placement="top" 
                                title="
                                <ol>
                                    <li>
                                        <p><strong>Pasta:</strong> plástico definidos 'pasta' por el sector. P. ej. recipientes de detergentes.</p>
                                    </li>
                                    <li>
                                        <p><strong>PET:</strong> plástico hecho de polietileno tereftalato (PET). P. ej. envases de bebidas.</p>
                                    </li>
                                    <li>
                                        <p><strong>Plástico flexible:</strong> plástico definidos 'flexibles' por el sector. P. ej. bolsas plásticas de supermercado.</p>
                                    </li>
                                </ol>
                            ">
                                    <i class="fas fa-info-circle"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-xl-6 col-sm-12">
                        <label for="papel">Vidrio (kg):</label><br />
                        <div class="input-group mb-2">
                            <input class="form-control" type="number" id="organico" name="organico" value="0" />
                            <div class="input-group-append">
                                <span class="btn btn-info" data-toggle="tooltip" data-html="true" data-placement="top"
                                    title="
                                <ol>
                                    <li>
                                        <p><strong>Vidrio reciclable:</strong> vidrio para nueva materia prima o vidrio quebrado. P. ej. vidrio transparente, verde y/o ambar. </p>
                                    </li>
                                    <li>
                                        <p><strong>Vidrio reutilizable:</strong> vidrio a reutilizar dentro de una cadena de producción o frasco bocón P. ej. vidrio transparente, verde y/o ambar.</p>
                                    </li>
                                </ol>
                            ">
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
                    <button type="submit" class="btn btn-success mb-2 mr-0 ml-2">Ingresar medición
                    </button>
                </a>
                <a href="{{ url('/historial') }}">
                    <button type="submit" class="btn btn-danger mb-2 mr-0 ml-2">Regresar
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
                                <div class="col-xl-12 col-md-12">
                                    <div class="text-center inline align-middle">
                                        <strong>Fecha de corte:</strong> 3 de Mayo del 2020 al 5 de junio del 2020
                                    </div>
                                    <div class="mt-2 text-center inline align-middle">
                                        <h3>Emisiones de CO2 evitadas:</h3>
                                        <h1><strong>5</strong> ton CO2e</h1>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-md-12">
                                    <table class="border border-solid w-100 text-center">
                                        <thead>
                                            <th class="col-4 p-1">Material</th>
                                            <th class="col-4 p-1">Ingresado (kg)</th>
                                            <th class="col-4 p-1">Emisiones evitadas (ton CO2e)</th>
                                        </thead>
                                        <tbody class="lead text-center">
                                            <tr>
                                                <td>
                                                    Cartón
                                                </td>
                                                <td>
                                                    2
                                                </td>
                                                <td>
                                                    0.2
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Metales
                                                </td>
                                                <td>
                                                    2
                                                </td>
                                                <td>
                                                    0.2
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Papel
                                                </td>
                                                <td>
                                                    2
                                                </td>
                                                <td>
                                                    0.2
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Plástico
                                                </td>
                                                <td>
                                                    2
                                                </td>
                                                <td>
                                                    0.2
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Vidrio
                                                </td>
                                                <td>
                                                    2
                                                </td>
                                                <td>
                                                    0.2
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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
                    <button type="button" class="btn btn-success">Confirmar medición</button></span>
                </a>


            </div>
        </div>
    </div>
</div>

@endsection

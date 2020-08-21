@extends('layouts.app')
@section('navbar-left')
<input type="text" class="form-control ml-2" placeholder="Buscar reciclador" aria-label="Buscador de recicladores" aria-describedby="filtrar">
            <div class="input-group-append">
                <button class="btn btn-outline-success" type="button" id="filtrar" onclick="buscar()">
                <i class="fas fa-search"></i></button>
            </div>
@endsection
@section('content')
<div class="card shadow w-100">
    <div class="card-header">
        <div class="row ">
            <div class="col-md-12">
                <div class="py-5 text-center titulo">
                    <h1 class="text-success">Mis recicladores</h1>
                    <p class="lead">Aquí podrás encontrar los perfiles de todos los recicladores(as) que hacen parte de la organización.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="border-solid border-bottom p-2">
        <a class="btn btn-success mr-3" href="{{url('/recicladores/crear')}}"  data-toggle="tooltip" data-placement="bottom" title="Añadir un nuevo reciclador">
        <i class="fas fa-user-plus"> </i> {{__('Añadir')}} reciclador</a>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-xl-4 col-md-6 col-sm-12 p-1">
                <ul class="list-group list-group-flush" id="col-1">
                    <li class="list-group-item border-solid border mb-1">
                        <div class="row">
                            <div class="col-xl-5 col-sm-12 p-0">
                                <img src="{{ url('/Alejita_Uribe.png') }}" class="border border-success rounded-circle imgp" alt="Avimilé" style="display: block; margin-right: auto; margin-left: auto">
                                <p class="text-center mt-1">Miembro hace 2 años</p>
                            </div>
                            <div class="col-xl-7 col-sm-12 p-0">
                                <h4 class="text-center border-bottom"><strong>Alejandra Uribe</strong></h4>
                                <p class="pl-3 pt-2"><strong>Apodo:</strong> Alejita</p>
                                <p class="pl-3"><strong>Celular:</strong> 310 202 0001</p>
                                <p class="pl-3"><strong>Usuarios asignados:</strong> 6</p>
                            </div>
                        </div>
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <a href="{{ url('/editar') }}">
                                <button type="submit" class="btn btn-success w-100 ml-2">Ver Perfil</button>
                            </a>
                            <a data-toggle="modal" data-target="#detallesModal">
                                <button type="submit" class="btn btn-danger w-100 ">Eliminar</button>
                            </a>
                        </div>
                    </li>
                    <li class="list-group-item border-solid border">
                        <div class="row">
                            <div class="col-xl-5 col-sm-12 p-0">
                                <img src="{{ url('/Rodrigo_hincapie.png') }}" class="border border-success rounded-circle imgp" alt="Avimilé" style="display: block; margin-right: auto; margin-left: auto">
                                <p class="text-center mt-1">Miembro hace 1 mes</p>
                            </div>
                            <div class="col-xl-7 col-sm-12 p-0">
                                <h4 class="text-center border-bottom"><strong>Rodrigo Hincapie</strong></h4>
                                <p class="pl-3 pt-2"><strong>Apodo:</strong> El Rodri</p>
                                <p class="pl-3"><strong>Celular:</strong> 310 330 2119</p>
                                <p class="pl-3"><strong>Usuarios asignados:</strong> 1</p>
                            </div>
                            
                        </div>
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <a href="{{ url('/editar') }}">
                                <button type="submit" class="btn btn-success w-100 ml-2">Ver Perfil</button>
                            </a>
                            <a data-toggle="modal" data-target="#detallesModal">
                                <button type="submit" class="btn btn-danger w-100 ">Eliminar</button>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12 p-1">
                <ul class="list-group list-group-flush" id="col-2">
                    <li class="list-group-item border border-solid mb-1">
                        <div class="row">
                            <div class="col-xl-5 col-sm-12 p-0">
                                <img src="{{ url('/Reinaldo_Ochoa.png') }}" class="border border-success rounded-circle imgp" alt="Avimilé" style="display: block; margin-right: auto; margin-left: auto;">
                                <p class="text-center mt-1">Miembro hace 3 meses</p>
                            </div>
                            <div class="col-xl-7 col-sm-12 p-0">
                                <h4 class="text-center border-bottom"><strong>Reinaldo Ochoa</strong></h4>
                                <p class="pl-3 pt-2"><strong>Apodo:</strong> Rey</p>
                                <p class="pl-3"><strong>Celular:</strong> 310 333 3142</p>
                                <p class="pl-3"><strong>Usuarios asignados:</strong> 12</p>
                            </div>
                        </div>
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <a href="{{ url('/editar') }}">
                                <button type="submit" class="btn btn-success w-100 ml-2">Ver Perfil</button>
                            </a>
                            <a data-toggle="modal" data-target="#detallesModal">
                                <button type="submit" class="btn btn-danger w-100 ">Eliminar</button>
                            </a>
                        </div>
                    </li>
                    <li class="list-group-item border-solid border">
                        <div class="row">
                            <div class="col-xl-5 col-sm-12 p-0">
                                <img src="{{ url('/Armando_lopez.png') }}" class="border border-success rounded-circle imgp" alt="Avimilé" style="display: block; margin-right: auto; margin-left: auto">
                                <p class="text-center mt-1">Miembro hace 6 meses</p>
                            </div>
                            <div class="col-xl-7 col-sm-12 p-0">
                                <h4 class="text-center border-bottom"><strong>Armando López</strong></h4>
                                <p class="pl-3 pt-2"><strong>Apodo:</strong> Armando</p>
                                <p class="pl-3"><strong>Celular:</strong> 310 313 1323</p>
                                <p class="pl-3"><strong>Usuarios asignados:</strong> 4</p>
                            </div>
                            
                        </div>
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <a href="{{ url('/editar') }}">
                                <button type="submit" class="btn btn-success w-100 ml-2">Ver Perfil</button>
                            </a>
                            <a data-toggle="modal" data-target="#detallesModal">
                                <button type="submit" class="btn btn-danger w-100 ">Eliminar</button>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12 p-1">
                <ul class="list-group list-group-flush" id="col-3">
                    <li class="list-group-item border border-solid">
                        <div class="row">
                            <div class="col-xl-5 col-sm-12 p-0">
                                <img src="{{ url('/Claudia_Marin.png') }}" class="border border-success rounded-circle imgp" style="display: block; margin-right: auto; margin-left: auto;">
                                <p class="text-center mt-1">Miembro hace 4 años</p>
                            </div>
                            <div class="col-xl-7 col-sm-12 p-0">
                                <h4 class="text-center border-bottom"><strong>Claudia Marín</strong></h4>
                                <p class="pl-3 pt-2"><strong>Apodo:</strong> Clau</p>
                                <p class="pl-3"><strong>Celular:</strong> 310 253 1972</p>
                                <p class="pl-3"><strong>Usuarios asignados:</strong> 12</p>

                            </div>
                        </div>
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <a href="{{ url('/editar') }}">
                                <button type="submit" class="btn btn-success w-100 ml-2">Ver Perfil</button>
                            </a>
                            <a data-toggle="modal" data-target="#detallesModal">
                                <button type="submit" class="btn btn-danger w-100 ">Eliminar</button>
                            </a>
                        </div>
                    </li>
                    <li class="list-group-item border border-solid mt-1">
                        <div class="row">
                            <div class="col-xl-5 col-sm-12 p-0">
                                <img src="{{ url('/Monica_Garcia.png') }}" class="border border-success rounded-circle imgp" style="display: block; margin-right: auto; margin-left: auto;">
                                <p class="text-center mt-1">Miembro hace 4 años</p>
                            </div>
                            <div class="col-xl-7 col-sm-12 p-0">
                                <h4 class="text-center border-bottom"><strong>Mónica García</strong></h4>
                                <p class="pl-3 pt-2"><strong>Apodo:</strong> La Negra</p>
                                <p class="pl-3"><strong>Celular:</strong> 310 253 1972</p>
                                <p class="pl-3"><strong>Usuarios asignados:</strong> 11</p>

                            </div>
                        </div>
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <a href="{{ url('/editar') }}">
                                <button type="submit" class="btn btn-success w-100 ml-2">Ver Perfil</button>
                            </a>
                            <a data-toggle="modal" data-target="#detallesModal">
                                <button type="submit" class="btn btn-danger w-100 ">Eliminar</button>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="detallesModal" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="text-success">Eliminar reciclador(a)</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="d-flex justify-content-center mt-2 mb-2">
                                <img src="/alerta.png" alt="">
                            </div>
                            <h2 class="py-2 text-center text-success">¿Deseas eliminar este reciclador(a)?</h2>
                            <h5 class="lead text-center border border-solid mb-3 p-2">El reciclador(a) <strong>Alejandra Uribe</strong> se eliminará de su lista de "Mis recicladores" de forma permanente.</h5>
                            <h5 class="lead text-center mt-2">Una vez eliminado el reciclador(a), los usuarios asignados al perfil pasarán a estar pendientes de asignar. Ver mapa Mi comunidad.</h5>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <span class="pull-right"><button type="button" class="btn btn-danger"
                        data-dismiss="modal">Regresar</button></span>
                <a data-dismiss="modal" data-toggle="modal" data-target="#detallesModal1">
                    <button type="button" class="btn btn-success">Eliminar</button></span>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="detallesModal1" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-success" id="favoritesModalLabel">Éxito</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="d-flex justify-content-center">
                                <img src="Exito.png" alt="">
                            </div>
                            <h1 class="py-2 text-center">¡Éxito!</h1>
                            <h5 class="lead text-center">Cambios realizados correctamente.</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <span class="pull-right"><button type="button" class="btn btn-success"
                        data-dismiss="modal">Continuar</button></span>
            </div>
        </div>
    </div>
</div>

<script>
    function buscar() {
        var columna_1 = document.getElementById("col-1");
        var columna_2 = document.getElementById("col-2");
        var columna_3 = document.getElementById("col-3");
        var limit = columna_1.childNodes.length-2;
        for (let i = 0; i < limit; i++) {
            columna_1.removeChild(columna_1.childNodes[columna_1.childNodes.length-3]);
        }
        limit = columna_2.childNodes.length-2;
        for (let i = 0; i < limit; i++) {
            columna_2.removeChild(columna_2.childNodes[columna_2.childNodes.length-3]);
        }
        limit = columna_3.childNodes.length;
        for (let i = 0; i < limit; i++) {
            columna_3.removeChild(columna_3.childNodes[columna_3.childNodes.length-1]);
        }
        console.log(columna_1);
    }
</script>

@endsection

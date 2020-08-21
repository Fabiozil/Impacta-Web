@extends('layouts.app')
@section('navbar-left')
<input type="text" class="form-control ml-2" placeholder="Buscar en mapa" aria-label="Buscador de recicladores" aria-describedby="filtrar">
            <div class="input-group-append">
                <button class="btn btn-outline-success" type="button" id="filtrar" onclick="buscar()">
                <i class="fas fa-search"></i></button>
            </div>
@endsection
@section('content')
<div class="card shadow">
    <div class="card-header">
        <h1 class="py-3 text-center text-success">Otras comunidades</h1>
        <h3 class="lead text-center">Aquí podrás encontrar información acerca de los usuarios que hacen parte de otras corporaciones de recicladores.</h3>
    </div>
    <div class="border-bottom border-solid">
        <div class="d-flex flex-row pl-2 pt-1">
        <a href="{{url("/comunidad")}}">
                <button type="submit" class="btn btn-success mb-2 mr-0"><i class="fas fa-users mr-1"></i>Mi comunidad
                </button>
            </a>
            <span class="btn btn-info mb-2 ml-0 mr-2" data-toggle="tooltip" data-placement="top"
                title="Utiliza este botón para visualizar los usuarios asignados y pendientes por asignación que hacen parte de su comunidad.">
                <i class="fas fa-info-circle"></i></span>
                
            <a href="#">
                <button type="submit" class="btn btn-outline-success mb-2 mr-0 ml-2">Otras comunidades
                </button>
            </a>
            <span class="btn btn-info mb-2 ml-0" data-toggle="tooltip" data-placement="top"
                title="Utiliza este botón para visualizar los usuarios que hacen parte de otras corporaciones de recicladores.">
                <i class="fas fa-info-circle"></i></span>

        </div>
    </div>
    <div class="card-body">
        <div class="row main-r w-100 h-100">
            <div class="container h-100 main-cr mr-0">
                <div class="row h-75 overflow-auto">
                    <div class="col-xl-4 col-lg-6 col-md-12 p-1 h-100">
                        <ul class="list-group list-group-flush" id="lista_usuarios">
                            <li class="list-group-item border border-solid" id="item-lista-usuarios">
                                        <div class="row">
                                            <div class="col-xl-5 col-sm-12 p-0">
                                                <img src="{{ url('/corp_logo2.jpg') }}" class="border border-success rounded-circle imgp" alt="Avimilé" style="display: block; margin-right: auto; margin-left: auto;">
                                                <p class="text-center mt-1">Miembro hace 3 años</p>
                                            </div>
                                            <div class="col-xl-7 col-sm-12 p-0">
                                                <h4 class="text-center border-bottom"><strong>Corpooccidente</strong></h4>
                                                <p class="pl-3 pt-2"><strong>Recicladores agremiados: </strong><br>12</p>
                                                <p class="pl-3"><strong>Usuarios afiliados: </strong><br>45</p>
                                                <p class="pl-3"><strong>Emisiones evitadas: </strong><br>544 ton CO2e</p>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <button type="submit" class="btn btn-success w-50 mr-2" data-toggle="modal"
                                                        data-target="#detallesModal">Ver perfil</button>
                                        </div>
                            </li>
                        </ul>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-12 p-1 h-100">
                        <ul class="list-group list-group-flush" id="lista_usuarios">
                            <li class="list-group-item border border-solid" id="item-lista-usuarios">
                                <div class="row">
                                    <div class="col-xl-5 col-sm-12 p-0">
                                        <img src="{{ url('/corp_logo3.png') }}" class="border border-success rounded-circle imgp" alt="Avimilé" style="display: block; margin-right: auto; margin-left: auto;">
                                        <p class="text-center mt-1">Miembro hace 2 años</p>
                                    </div>
                                    <div class="col-xl-7 col-sm-12 p-0">
                                        <h4 class="text-center border-bottom"><strong>Corporación campo santo</strong></h4>
                                        <p class="pl-3 pt-2"><strong>Recicladores agremiados: </strong><br>9</p>
                                        <p class="pl-3"><strong>Usuarios afiliados: </strong><br>37</p>
                                        <p class="pl-3"><strong>Emisiones evitadas: </strong><br>274 ton CO2e</p>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-success w-50 mr-2" data-toggle="modal"
                                                data-target="#detallesModal1">Ver perfil</button>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-12 p-1">
                        <ul class="list-group list-group-flush" id="usuarios">
                            <li class="list-group-item border border-solid" id="item-lista-usuarios">
                                <div class="row">
                                    <div class="col-xl-5 col-sm-12 p-0">
                                        <img src="{{ url('/corp_logo1.png') }}" class="border border-success rounded-circle imgp" alt="Avimilé" style="display: block; margin-right: auto; margin-left: auto;">
                                        <p class="text-center mt-1">Miembro hace 1 año</p>
                                    </div>
                                    <div class="col-xl-7 col-sm-12 p-0">
                                        <h4 class="text-center border-bottom"><strong>COPRESAP</strong></h4>
                                        <p class="pl-3 pt-2"><strong>Recicladores agremiados: </strong><br>4</p>
                                        <p class="pl-3"><strong>Usuarios afiliados: </strong><br>19</p>
                                        <p class="pl-3"><strong>Emisiones evitadas: </strong><br>77 ton CO2e</p>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-success w-50 mr-2" data-toggle="modal"
                                                data-target="#detallesModal2">Ver perfil</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <a href="{{ url('/comunidad/corporaciones') }}">
            <div class="d-flex flex-row-reverse bd-highlight">
                <button type="submit" class="btn btn-primary">Ver en mapa</button>
            </div>
        </a>
    </div>
</div>

<div class="modal fade" id="detallesModal" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title text-success" id="favoritesModalLabel">Información de la corporación</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-12 borde-derecha h-100">
                            <div class="row h-100">
                                <div class="container border-right">
                                    <div class="row">
                                        <div class="col-xl-12 h-100">
                                            <div class="container">
                                                <img src="{{url("/corp_logo2.jpg")}}"
                                                    class="imgpg border border-success rounded-circle"
                                                    alt="">
                                                <div class="mt-2 ml-1 mr-1 text-center">
                                                    <h3><strong>Corpooccidente</strong></h3>
                                                    <p>Se unió hace 3 años</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-12 h-100">
                            <div class="row h-100">
                                <div class="col-xl-12 h-100">
                                    <div class="container pt-4">
                                        <div class="row mb-1">
                                            <div class="col-12 pl-0 border-bottom border-solid">
                                                <label class="lead pl-0 mb-3"><strong>Municipio: </strong>Medellín</label> <br>
                                                <label class="lead pl-0 mb-3"><strong>Dirección: </strong>Carrera 109a #63b - 420</label> <br>
                                                <label class="lead pl-0"><strong>Telefóno: </strong>(4) 2322668</label>
                                            </div>
                                            <div class="col-4 pr-0">
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <label class="lead"><strong>Recicladores agremiados:  </strong></label>
                                            <p class="pl-1 lead">12</p>
                                        </div>
                                        <div class="row">
                                            <label class="lead"><strong>Viviendas:  </strong></label>
                                            <p class="pl-1 lead">23</p>
                                        </div>
                                        <div class="row">
                                            <label class="lead"><strong>Administradores residenciales:  </strong></label>
                                            <p class="pl-1 lead">22</p>
                                        </div>
                                        <div class="row">
                                            <label class="lead"><strong>Emisiones evitadas:  </strong></label>
                                            <p class="pl-1 lead">544 ton CO2e</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer pb-0 pt-2 mb-0">
                <span class="pull-right"><button type="button" class="btn btn-danger"
                        data-dismiss="modal">Regresar</button></span>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="detallesModal1" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title text-success" id="favoritesModalLabel">Información de la corporación</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-12 borde-derecha h-100">
                            <div class="row h-100">
                                <div class="container border-right">
                                    <div class="row">
                                        <div class="col-xl-12 h-100">
                                            <div class="container">
                                                <img src="{{url("/corp_logo3.png")}}"
                                                    class="imgpg border border-success rounded-circle"
                                                    alt="">
                                                <div class="mt-2 ml-1 mr-1 text-center">
                                                    <h3><strong>Corporación campo santo</strong></h3>
                                                    <p>Se unió hace 2 años</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-12 h-100">
                            <div class="row h-100">
                                <div class="col-xl-12 h-100">
                                    <div class="container pt-4">
                                        <div class="row mb-1">
                                            <div class="col-12 pl-0 border-bottom border-solid">
                                                <label class="lead pl-0 mb-3"><strong>Municipio: </strong>Medellín</label> <br>
                                                <label class="lead pl-0 mb-3"><strong>Dirección: </strong>Calle 53 #10c - 63</label> <br>
                                                <label class="lead pl-0"><strong>Telefóno: </strong>(4) 2260243</label>
                                            </div>
                                            <div class="col-4 pr-0">
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <label class="lead"><strong>Recicladores agremiados:  </strong></label>
                                            <p class="pl-1 lead">9</p>
                                        </div>
                                        <div class="row">
                                            <label class="lead"><strong>Viviendas:  </strong></label>
                                            <p class="pl-1 lead">30</p>
                                        </div>
                                        <div class="row">
                                            <label class="lead"><strong>Administradores residenciales:  </strong></label>
                                            <p class="pl-1 lead">7</p>
                                        </div>
                                        <div class="row">
                                            <label class="lead"><strong>Emisiones evitadas:  </strong></label>
                                            <p class="pl-1 lead">274 ton CO2e</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer pb-0 pt-2 mb-0">
                <span class="pull-right"><button type="button" class="btn btn-danger"
                        data-dismiss="modal">Regresar</button></span>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="detallesModal4" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title text-success" id="favoritesModalLabel">Información de la corporación</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-12 borde-derecha h-100">
                            <div class="row h-100">
                                <div class="container border-right">
                                    <div class="row">
                                        <div class="col-xl-12 h-100">
                                            <div class="container">
                                                <img src="{{url("/corp_logo.png")}}"
                                                    class="imgpg border border-success rounded-circle"
                                                    alt="">
                                                <div class="mt-2 ml-1 mr-1 text-center">
                                                    <h3><strong>Reciclando ando</strong></h3>
                                                    <p>Se unió hace 2 años</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-12 h-100">
                            <div class="row h-100">
                                <div class="col-xl-12 h-100">
                                    <div class="container pt-4">
                                        <div class="row border-solid border-bottom mb-1">
                                            <div class="col-12 pl-0 border-bottom border-solid">
                                                <label class="lead pl-0 mb-3"><strong>Dirección: </strong> # 42 #22 sur 43C</label>
                                                <label class="lead pl-0"><strong>Telefóno: </strong>(4) 312 25 67</label>
                                            </div>
                                            <div class="col-4 pr-0">
                                                <div class="d-flex justify-content-end pl-0">
                                                    <a href="{{url("/configuracion")}}">
                                                    <button class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#editarHistoria"
                                                        data-backdrop="static">
                                                        <i class="fas fa-edit fa-lg"></i>
                                                    </button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <label class="lead"><strong>Recicladores agremiados:  </strong></label>
                                            <p class="pl-1 lead">3</p>
                                        </div>
                                        <div class="row">
                                            <label class="lead"><strong>Usuarios afiliados:  </strong></label>
                                            <p class="pl-1 lead">23</p>
                                        </div>
                                        <div class="row">
                                            <label class="lead"><strong>Emisiones evitadas:  </strong></label>
                                            <p class="pl-1 lead">200 ton CO2e</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer pb-0 pt-2 mb-0">
                <span class="pull-right"><button type="button" class="btn btn-danger"
                        data-dismiss="modal">Regresar</button></span>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="detallesModal2" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title text-success" id="favoritesModalLabel">Información de la corporación</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-12 borde-derecha h-100">
                            <div class="row h-100">
                                <div class="container border-right">
                                    <div class="row">
                                        <div class="col-xl-12 h-100">
                                            <div class="container">
                                                <img src="{{url("/corp_logo1.png")}}"
                                                    class="imgpg border border-success rounded-circle"
                                                    alt="">
                                                <div class="mt-2 ml-1 mr-1 text-center">
                                                    <h3><strong>COPRESAP</strong></h3>
                                                    <p>Se unió hace 1 año</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-12 h-100">
                            <div class="row h-100">
                                <div class="col-xl-12 h-100">
                                    <div class="container pt-4">
                                        <div class="row mb-1">
                                            <div class="col-12 pl-0 border-bottom border-solid">
                                                <label class="lead pl-0 mb-3"><strong>Municipio: </strong>Medellín</label> <br>
                                                <label class="lead pl-0 mb-3"><strong>Dirección: </strong>Carrera 32a #102b - 53</label> <br>
                                                <label class="lead pl-0"><strong>Telefóno: </strong>(4) 5295490</label>
                                            </div>
                                            <div class="col-4 pr-0">
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <label class="lead"><strong>Recicladores agremiados:  </strong></label>
                                            <p class="pl-1 lead">4</p>
                                        </div>
                                        <div class="row">
                                            <label class="lead"><strong>Viviendas:  </strong></label>
                                            <p class="pl-1 lead">17</p>
                                        </div>
                                        <div class="row">
                                            <label class="lead"><strong>Administradores residenciales:  </strong></label>
                                            <p class="pl-1 lead">2</p>
                                        </div>
                                        <div class="row">
                                            <label class="lead"><strong>Emisiones evitadas:  </strong></label>
                                            <p class="pl-1 lead">77 ton CO2e</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer pb-0 pt-2 mb-0">
                <span class="pull-right"><button type="button" class="btn btn-danger"
                        data-dismiss="modal">Regresar</button></span>
            </div>
        </div>
    </div>
</div>


@endsection

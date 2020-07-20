@extends('layouts.app')
@section('navbar-left')
<li class="nav-item ml-2">
    <form class="my-2 my-lg-0">
        <div class="input-group">
            <input type="text" class="form-control " placeholder="Buscar reciclador"
                aria-label="Buscador de recicladores" aria-describedby="filtrar">
            <div class="input-group-append">
                <button class="btn btn-outline-success" type="button" id="filtrar">
                    <i class="fas fa-search"></i>
                    {{__('Buscar')}}</button>
            </div>
        </div>
    </form>
</li>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row bg-light">
        <div class="col-md-12  mt-3">
            <div class="card">
                <div class="row no-gutters">
                    <div class="col-md-3 p-3 p-sm-4 p-lg-1">
                        <div class="d-flex justify-content-center">
                            <img class="border border-success rounded-circle mx-1 mx-md-1 mx-lg-2 my-3 imgpg"
                                src="{{ url('/Avimile.jpg') }}" class="card-img" alt="Foto de Avimilé">
                        </div>
                    </div>
                    <div class="col-md-9 align-self-center">
                        <div class="card-body ml-2" id="info_personal">
                            <h5 class="card-title text-success">{{__('Información Personal')}}</h5>
                            <div class="row">
                                <div class="col-md-4">
                                    <strong>{{__('Nombres').': '}}</strong><span>Avimilé</span><br>
                                    <strong>{{__('Apellidos').': '}}</strong><span>Ribas</span><br>
                                    <strong>{{__('Apodo').': '}}</strong><span>Avi</span>
                                </div>
                                <div class="col-md-4 mb-2">
                                    <strong>{{__('Celular').': '}}</strong><span>333 31 42</span><br>
                                    <strong>{{__('Fecha de Nacimiento').': '}}</strong><span>23/10/1984</span><br>
                                    <strong>{{__('Usuarios asignados').': '}}</strong><span> 4 </span>
                                </div>
                                <div class="col-md-4">
                                    <button type="button" class="btn btn-primary btn-block" data-toggle="modal"
                                        data-target="#editarInfoPerson" data-backdrop="static">
                                        <i class="fas fa-edit fa-lg"></i> {{__('Editar')}}</button>
                                </div>
                                <div class="col-12">

                                    <p class="card-text"><small class="text-muted">Última edición: 22/06/2020</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row bg-light">
        <div class="col-md-4 my-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-2 text-success">{{__('Mi Historia')}}
                        <button class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#editarHistoria"
                            data-backdrop="static">
                            <i class="fas fa-edit fa-lg"></i>
                        </button>
                    </h5>
                    <p class="card-text">Soy una persona alegra a la cual le gusta reciclar</p>
                    <p class="card-text"><small class="text-muted">Última edición: 22/06/2020</small></p>
                </div>
            </div>
        </div>
        <div class="col-md-8 my-3">
            <div class="card ">
                <div class="card-body table-responsive">
                    <h5 class="card-title text-success">{{__('Zonas de recolección')}}
                        <button class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#editarZona"
                            data-backdrop="static">
                            <i class="fas fa-edit fa-lg"></i>
                        </button>
                    </h5>
                    <table class="table table-borderless table-hover table-light mt-2 " id="datosZona">
                        <thead>
                            <tr>
                                <th class="col-sm-2 col-md-2" scope="col">Municipio</th>
                                <th class="col-sm-2 col-md-2" scope="col">Comuna</th>
                                <th class="col-sm-3 col-md-3" scope="col">Sector</th>
                                <th class="col-sm-2 col-md-2" scope="col">Dias</th>
                                <th class="col-sm-3 col-md-3" scope="col">Horario</th>
                            </tr>
                        </thead>
                        <tbody id="lista">
                            <tr>
                                <td>Envigado</td>
                                <td>La Magnolia</td>
                                <td>La Magnolia</td>
                                <td>L-X-V</td>
                                <td>8:00AM - 10:00AM</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="card-text"><small class="text-muted">Última edición: 22/06/2020</small></p>
                </div>
            </div>
            <div class="card mt-3 ">
                <div class="card-body table-responsive">
                    <h5 class="card-title text-success">{{__('Material de recolección')}}
                        <button class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#editarMateriales">
                            <i class="fas fa-edit fa-lg"></i>
                        </button>
                    </h5>
                    <table class="table table-borderless table-hover table-light mt-2 " id="datosZona">
                        <thead>
                            <tr>
                                <th class="col-sm-3 col-md-3" scope="col">Material</th>
                                <th class="col-sm-2 col-md-2" scope="col"></th>
                            </tr>
                        </thead>
                        <tbody id="lista">
                            <tr>
                                <td>Plastico</td>
                            </tr>
                            <tr>
                            </tr>
                        </tbody>
                        
                    </table>
                    <p class="card-text"><small class="text-muted">Última edición: 22/06/2020</small></p>
                    <div class="d-flex justify-content-end">

                        <a data-toggle="modal" data-target="#detallesModal" class="btn btn-danger">
                                <i class="fas fa-user-minus"></i> {{__('Eliminar')}}</a>
                        <a href="{{url("/recicladores")}}" class="btn btn-success ml-2">
                                     {{__('Regresar')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal editar Historia-->
<div class="modal fade" id="editarHistoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog  modal-lg modal-dialog-centered" role="document">
        <div class="modal-content ">
            <form>
                <div class="modal-header ">
                    <h5 class="modal-title text-success" id="tituloHistoria">
                        <i class="fas fa-user-edit"></i>Mi Historia</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body bg-light">
                    <div class="container">
                        <div class="row  justify-content-center ">
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label for="historia">Historia</label>
                                    <textarea class="form-control" name="historia" id="historia" cols="20" rows="8"
                                        maxlength="500">Soy una persona alegra a la cual le gusta reciclar</textarea>
                                    <small id="infoCounter" class="float-right text-muted">N&uacute;mero de
                                        caracteres restantes <span id="contador">500</span></small>
                                </div>
                                <small id="historiaHelp" class="form-text text-muted">
                                    Actualizar texto informativo: Aquí te damos cuatro consejos para que crees la historia del nuevo reciclador(a):
                                    <ol>
                                        <li>
                                            Describe características demográficas como su lugar de procedencia. 
                                        </li>
                                        <li>
                                            Menciona el tiempo que lleva dedicado a su profesión. 
                                        </li>
                                        <li>
                                            Menciona una razón de trasfondo diferente a obtener un ingreso económico por la cual el reciclador(a) realiza su labor.
                                        </li>
                                        <li>
                                            Transmitir el impacto que tiene la ayuda de la comunidad en la vida del reciclador(a).
                                        </li>
                                    </ol>
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Regresar</button>
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-save fa-lg"></i> Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--End Modal editar Historia-->
<!-- Modal editar Información Personal-->
<div class="modal fade" id="editarInfoPerson" tabindex="-1" role="dialog" aria-labelledby="info_personal"
    aria-hidden="true">
    <div class="modal-dialog  modal-lg modal-dialog-centered" role="document">
        <div class="modal-content ">
            <form>
                <div class="modal-header ">
                    <h4 class="modal-title text-success" id="tituloHistoria">
                        <i class="fas fa-user-edit"></i> Información Personal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body bg-light">
                    <div class="container">
                        <div class="row  justify-content-center ">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="nombres" class="col-form-label">Nombre</label>
                                    <div class="input-group mb-2">
                                        <input type="text" name="nombres"
                                            class="form-control @error('nombres') is-invalid @enderror" id="nombres"
                                            placeholder="James David" value="">
                                        <div class="input-group-append">
                                            <span class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Digita el primer y segundo nombre (si aplica) manteniendo la configuración de primera letra en mayúscula para cada uno de los nombres. Ten en cuenta una buena ortografía.">
                                                <i class="fas fa-info-circle"></i></span>
                                        </div>
                                        @error('nombres')
                                        <div class="invalid-tooltip">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="apellidos" class="col-form-label">Apellido</label>
                                    <div class="input-group mb-2">
                                        <input type="text" name="apellidos"
                                            class="form-control @error('apellidos') is-invalid @enderror" id="apellidos"
                                            placeholder="Rodriguez Rubio" value="">
                                        <div class="input-group-append">
                                            <span class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Digita el apellido manteniendo la configuración de primera letra en mayúscula. Ten en cuenta una buena ortografía.">
                                                <i class="fas fa-info-circle"></i></span>
                                        </div>
                                        @error('apellidos')
                                        <div class="invalid-tooltip">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="apodo" class="col-form-label">Apodo</label>
                                    <div class="input-group mb-2">
                                        <input type="text" name="apodo"
                                            class="form-control @error('apodo') is-invalid @enderror" id="apodo"
                                            placeholder="James" value="">
                                        <div class="input-group-append">
                                            <span class="btn btn-info" data-toggle="tooltip" data-placement="top"
                                                title="Digita este campo si tu reciclador o recicladora prefiere ser llamado por su apodo. Ten en cuenta una buena ortografía.">
                                                <i class="fas fa-info-circle"></i></span>
                                        </div>
                                        @error('apodo')
                                        <div class="invalid-tooltip">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="fecha_nacimiento" class=" col-form-label">Fecha de Nacimiento</label>
                                    <input type="date" name="fecha_nacimiento"
                                        class="form-control @error('fecha_nacimiento') is-invalid @enderror"
                                        id="fecha_nacimiento" placeholder="28" min="1900-01-01" max="2000-01-01"
                                        value="">
                                    @error('fecha_nacimiento')
                                    <div class="invalid-tooltip">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group ">
                                    <label for="edad" class="col-form-label">Edad</label>
                                    <input type="number" name="edad"
                                        class="form-control @error('edad') is-invalid @enderror" id="edad"
                                        placeholder="28" min="20" max="100" value="">
                                    @error('edad')
                                    <div class="invalid-tooltip">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="celular" class="col-form-label">Celular</label>
                                    <div class="input-group mb-2">
                                        <input type="text" name="celular"
                                            class="form-control  @error('celular') is-invalid @enderror" id="celular"
                                            placeholder="3102020540" value="">
                                        <div class="input-group-append">
                                            <span class="btn btn-info" data-toggle="tooltip" data-placement="top"
                                                title="Digita este campo si tu reciclador o recicladora desea ser contactado por la corporación o por uno de los usuarios asignados. ">
                                                <i class="fas fa-info-circle"></i></span>
                                        </div>
                                        @error('celular')
                                        <div class="invalid-tooltip">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Regresar</button>
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-save fa-lg"></i> Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--End Modal editar Información Personal-->
<!-- Modal editar Zona de recolección-->
<div class="modal fade" id="editarZona" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog  modal-lg modal-dialog-centered" role="document">
        <div class="modal-content ">
            <div class="modal-header ">
                <h4 class="modal-title text-success" id="tituloHistoria">
                    <i class="fas fa-edit"></i>Zonas de recolecci&oacute;n</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body bg-light">
                <div class="container">
                    <div class="row  justify-content-center ">
                        <div class="col-md-11">
                            <table class="table table-borderless table-hover table-light mt-2 " id="datosZona">
                                <thead>
                                    <tr>
                                        <th class="col-sm-1 col-md-1" scope="col">Municipio</th>
                                        <th class="col-sm-3 col-md-2" scope="col">Comuna</th>
                                        <th class="col-sm-4 col-md-2" scope="col">Sector</th>
                                        <th class="col-sm-2 col-md-2" scope="col">Dias</th>
                                        <th class="col-sm-2 col-md-3" scope="col">Horario</th>
                                        <th class="col-sm-2 col-md-1" scope="col"></th>
                                        <th class="col-sm-2 col-md-1" scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody id="lista">
                                    <form>
                                        <tr>
                                            <td>Envigado</td>
                                            <td>La Magnolia</td>
                                            <td>La magnolia</td>
                                            <td>L-X-V</td>
                                            <td>8:00AM - 10:00AM</td>
                                            <td>
                                                <button type="button" class="btn btn-danger">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </td>
                                            <td>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="fas fa-edit fa-lg"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </form>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Regresar</button>
                <a href="{{url("/recicladores")}}">
                    <button class="btn btn-success">
                        <i class="fas fa-save fa-lg"></i> Guardar</button>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="editarMateriales" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog  modal-lg modal-dialog-centered" role="document">
        <div class="modal-content ">
            <div class="modal-header ">
                <h4 class="modal-title text-success" id="tituloHistoria">
                    <i class="fas fa-edit"></i>Materiales de recolección</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body bg-light">
                <div class="container">
                    <div class="row  justify-content-center ">
                        <div class="col-md-11">
                            <div class="input-group">
                                <select class="custom-select"
                                    id="residuo" aria-label="Example select with button addon">
                                    <option value="Cartón">Cartón</option>
                                    <option value="">Metales</option>
                                    <option value="">Papel</option>
                                    <option value="">Plástico</option>
                                    <option value="">Tetra pak</option>
                                    <option value="">Vidrio</option>
                                </select>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-primary" type="button"
                                        id="boton_agregar_residuo">Adicionar
                                    </button>
                                </div>
                            </div>
                            <table class="table table-borderless table-hover table-light mt-2 " id="datosZona">
                                <thead>
                                    <tr>
                                        <th class="col-sm-3 col-md-3" scope="col">Material</th>
                                    </tr>
                                </thead>
                                <tbody id="lista">
                                    <tr>
                                        <td>Plastico</td>
                                        <td>
                                            <button type="button" class="btn btn-danger">
                                            <i class="fas fa-trash-alt"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                                
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Regresar</button>
                <a href="{{url("/recicladores")}}">
                    <button class="btn btn-success">
                        <i class="fas fa-save fa-lg"></i> Guardar</button>
                </a>
            </div>
        </div>
    </div>
</div>
<!--End Modal editar Zona de recolección-->
<div class="modal fade" id="detallesModal" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <h1 class="py-2 text-center">¿Deseas eliminar este reciclador(a)?</h1>
                            <div class="d-flex justify-content-center mt-2 mb-2">
                                <i class="fas fa-question" style="width: 10% !important; height: 10% !important;"></i>
                            </div>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-xl-5 col-sm-12 p-0">
                                        <img src="{{ url('/Avimile.jpg') }}" class="border border-success rounded-circle imgpg" alt="Avimilé" style="display: block; margin-right: auto; margin-left: auto;">
                                        <p class="text-center mt-1">Miembro hace 3 meses</p>
                                    </div>
                                    <div class="col-xl-7 col-sm-12 p-0">
                                        <p class="lead text-center border-bottom"><strong>Avimilé Ribas</strong></p>
                                        <p>Apodo: Avi</p>
                                        <p>Teléfono: 333 31 42</p>
                                        <p>Usuarios asignados: 4</p>
        
                                    </div>
                                </div>
                            </li>
                            <h5 class="lead text-center mt-2">Una vez eliminado el reciclador(a), todos los usuarios asignados pasarán a estar pendientes de asignar. Ver mapa "Mi Comunidad"</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <span class="pull-right"><button type="button" class="btn btn-danger"
                        data-dismiss="modal">Regresar</button></span>
                <a data-dismiss="modal" data-toggle="modal" data-target="#detallesModal1">
                    <button type="button" class="btn btn-success">Confirmar</button></span>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="detallesModal1" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-success" id="favoritesModalLabel">Exito</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <h1 class="py-2 text-center">Exito!</h1>
                            <h5 class="lead text-center">Cambios realizados correctamente.</h5>
                            <div class="d-flex justify-content-center">
                                <i class="fas fa-check-circle" style="width: 10% !important; height: 10% !important;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <span class="pull-right">
                <a href="{{url("/recicladores")}}">
                        <button type="button" class="btn btn-success">Continuar</button>
                </a></span>
            </div>
        </div>
    </div>
</div>

@endsection

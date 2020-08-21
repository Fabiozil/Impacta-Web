@extends('layouts.app')
@section('navbar-left')
<li class="nav-item ml-2">
    <form class="my-2 my-lg-0">
        <div class="input-group">
            <input type="text" class="form-control " placeholder="Buscar reciclador"
                aria-label="Buscador de recicladores" aria-describedby="filtrar">
            <div class="input-group-append">
                <button class="btn btn-outline-success" type="button" id="filtrar">
                    <i class="fas fa-search"></i></button>
            </div>
        </div>
    </form>
</li>
@endsection
@section('content')
<div class="card">
    <div class="card-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12  mt-3">
                    <div class="card">
                        <div class="row no-gutters bg-light">
                            <div class="col-md-3 p-3 p-sm-4 p-lg-1">
                                <div class="d-flex justify-content-center">
                                    <img class="border border-success rounded-circle mx-1 mx-md-1 mx-lg-2 my-3 imgpg"
                                        src="{{ url('/Alejita_Uribe.png') }}" class="card-img" alt="Foto de Avimilé">
                                </div>
                            </div>
                            <div class="col-md-9 align-self-center">
                                <div class="card-body ml-2" id="info_personal">
                                    <div class="d-flex justify-content-between">
                                        <h2 class="card-title text-success d-inline">{{__('Información Personal')}}</h2>
                                        <button type="button" class="btn btn-outline-success btn-sm" data-toggle="modal"
                                            data-target="#editarInfoPerson" data-backdrop="static">
                                            <i class="fas fa-edit fa-lg"></i></button>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <strong>{{__('Nombres').': '}}</strong><span>Alejandra</span><br>
                                            <strong>{{__('Apellidos').': '}}</strong><span>Uribe</span><br>
                                            <strong>{{__('Apodo').': '}}</strong><span>Alejita</span><br>
                                            <strong>{{__('Celular').': '}}</strong><span>310 202 0001</span><br>
                                        </div>
                                        <div class="col-md-8 mb-2">
                                            <strong>{{__('Fecha de Nacimiento').': '}}</strong><span>7/22/1965
                                            </span><br>
                                            <strong>Edad: </strong><span>55
                                            </span><br>
                                            <strong>{{__('Usuarios asignados').': '}}</strong><span> 6 </span>
                                        </div>
                                        <div class="col-12">
                                            <p class="card-text"><small class="text-muted">Última edición:
                                                    22/06/2020</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 my-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3">
                                <h2 class="card-title mb-2 text-success">{{__('Mi Historia')}}</h2>
                                <button class="btn btn-outline-success btn-sm" data-toggle="modal"
                                    data-target="#editarHistoria" data-backdrop="static">
                                    <i class="fas fa-edit fa-lg"></i>
                                </button>
                            </div>

                            <p class="card-text">He caminado por las calles de la ciudad durante más de 30 años recuperando material reciclaje para sustentar a mi familia y cuidar este mundo que nos ha regalado tanto. Soy abuela, madre y una super héroe para mis nietos y tengo como misión al igual que mis compañeros darles la posibilidad de construir un futuro y hacer realidad sus sueños. Es así como te agradecería si me ayudas en esta misión, separando este material y dándome la oportunidad de llegar con mi familia con excelentes noticias y una oportunidad para sonreír.
                                </p>
                            <p class="card-text"><small class="text-muted">Última edición: 22/06/2020</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 my-3">
                    <div class="card ">
                        <div class="card-body table-responsive">
                            <div class="d-flex justify-content-between">
                                <h2 class="card-title text-success">{{__('Zonas de recolección')}}</h2>
                                <button class="btn btn-outline-success btn-sm" data-toggle="modal"
                                    data-target="#editarZona" data-backdrop="static">
                                    <i class="fas fa-edit fa-lg"></i>
                                </button>

                            </div>
                            <table class="table table-borderless table-hover table-light mt-2 " id="datosZona">
                                <thead>
                                    <tr>
                                        <th class="col-md-3" scope="col">Barrio</th>
                                        <th class="col-md-2" scope="col">Comuna</th>
                                        <th class="col-md-2" scope="col">Municipio</th>
                                        <th class="col-md-2" scope="col">Día(s)</th>
                                        <th class="col-md-3" scope="col">Horario</th>
                                    </tr>
                                </thead>
                                <tbody id="listaZonas2">
                                    <tr>
                                        <td>Altos del poblado</td>
                                        <td>Comuna 14</td>
                                        <td>Medellín</td>
                                        <td>L-X</td>
                                        <td>5:00AM-10:00AM</td>
                                    </tr>
                                    <tr>
                                        <td>El tesoro</td>
                                        <td>Comuna 14</td>
                                        <td>Medellín</td>
                                        <td>M-J</td>
                                        <td>5:00AM-10:00AM</td>
                                    </tr>
                                </tbody>
                            </table>
                            <p class="card-text"><small class="text-muted">Última edición: 22/06/2020</small></p>
                        </div>
                    </div>
                    <div class="card mt-3 ">
                        <div class="card-body table-responsive">
                            <div class="d-flex justify-content-between">
                                <h2 class="card-title text-success">{{__('Material de recolección')}}</h2>
                                <button class="btn btn-outline-success btn-sm" data-toggle="modal"
                                    data-target="#editarMateriales">
                                    <i class="fas fa-edit fa-lg"></i>
                                </button>
                            </div>
                            <table class="table table-borderless table-hover table-light mt-2 " id="datosZona">
                                <thead>
                                    <tr>
                                        <th class="col-sm-3 col-md-3" scope="col">Material</th>
                                        <th class="col-sm-2 col-md-2" scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody id="lista-residuos">
                                    <tr>
                                        <td>Cartón</td>
                                    </tr>
                                    <tr>
                                        <td>Metales</td>
                                    </tr>
                                    <tr>
                                        <td>Plástico</td>
                                    </tr>
                                    <tr>
                                        <td>Vidrio</td>
                                    </tr>
                                </tbody>

                            </table>
                            <p class="card-text"><small class="text-muted">Última edición: 22/06/2020</small></p>
                            <div class="d-flex justify-content-end">

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
                        <div class="modal-header">
                            <h2 class="modal-title text-success" id="tituloHistoria">Editar Mi Historia</h2>
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
                                            <textarea class="form-control" name="historia" id="historia" cols="20"
                                                rows="8" maxlength="500">He caminado por las calles de la ciudad durante más de 30 años recuperando material reciclaje para sustentar a mi familia y cuidar este mundo que nos ha regalado tanto. Soy abuela, madre y una super héroe para mis nietos y tengo como misión al igual que mis compañeros darles la posibilidad de construir un futuro y hacer realidad sus sueños. Es así como te agradecería si me ayudas en esta misión, separando este material y dándome la oportunidad de llegar con mi familia con excelentes noticias y una oportunidad para sonreír.
                                                </textarea>
                                            <small id="infoCounter" class="float-right text-muted">N&uacute;mero de
                                                caracteres restantes <span id="contador">500</span></small>
                                        </div>
                                        <small id="historiaHelp" class="form-text text-muted">
                                            Actualizar texto informativo: Aquí te damos cuatro consejos para que crees
                                            la historia del nuevo reciclador(a):
                                            <ol>
                                                <li>
                                                    Describe características demográficas como su lugar de procedencia.
                                                </li>
                                                <li>
                                                    Menciona el tiempo que lleva dedicado a su profesión.
                                                </li>
                                                <li>
                                                    Menciona una razón de trasfondo diferente a obtener un ingreso
                                                    económico por la cual el reciclador(a) realiza su labor.
                                                </li>
                                                <li>
                                                    Transmitir el impacto que tiene la ayuda de la comunidad en la vida
                                                    del reciclador(a).
                                                </li>
                                            </ol>
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Regresar</button>
                            <button type="submit" class="btn btn-success" data-dismiss="modal" data-toggle="modal" data-target="#detallesModal1">
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
                            <h2 class="modal-title-center text-success text-center"> Editar Información Personal</h2>
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
                                                    class="form-control @error('nombres') is-invalid @enderror"
                                                    id="nombres" placeholder="Avimilé" value="Alejandra">
                                                <div class="input-group-append">
                                                    <span class="btn btn-info" data-toggle="tooltip"
                                                        data-placement="top"
                                                        title="Digita el primer y segundo nombre (si aplica) manteniendo la configuración de primera letra en mayúscula para cada uno de los nombres. Ten en cuenta una buena ortografía.">
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
                                                    class="form-control @error('apellidos') is-invalid @enderror"
                                                    id="apellidos" placeholder="Ribas" value="Uribe">
                                                <div class="input-group-append">
                                                    <span class="btn btn-info" data-toggle="tooltip"
                                                        data-placement="top"
                                                        title="Digita el apellido manteniendo la configuración de primera letra en mayúscula. Ten en cuenta una buena ortografía.">
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
                                                    placeholder="Avi" value="Alejita">
                                                <div class="input-group-append">
                                                    <span class="btn btn-info" data-toggle="tooltip"
                                                        data-placement="top"
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
                                            <label for="fecha_nacimiento" class=" col-form-label">Fecha de
                                                Nacimiento</label>
                                            <input type="date" name="fecha_nacimiento"
                                                class="form-control @error('fecha_nacimiento') is-invalid @enderror"
                                                id="fecha_nacimiento" placeholder="28" min="1900-01-01" max="2000-01-01"
                                                value="1965-07-22">
                                            @error('fecha_nacimiento')
                                            <div class="invalid-tooltip">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="celular" class="col-form-label">Celular</label>
                                            <div class="input-group mb-2">
                                                <input type="text" name="celular"
                                                    class="form-control  @error('celular') is-invalid @enderror"
                                                    id="celular" placeholder="310 202 0001" value="310 202 0001">
                                                <div class="input-group-append">
                                                    <span class="btn btn-info" data-toggle="tooltip"
                                                        data-placement="top"
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
                            <a data-dismiss="modal" data-toggle="modal" data-target="#detallesModal1"><button type="submit" class="btn btn-success">
                                <i class="fas fa-save fa-lg"></i> Guardar</button></a>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <div class="card-footer">
        <div class="d-flex justify-content-end">
            <a data-toggle="modal" data-target="#detallesModal" ><button class="btn btn-danger">Eliminar</button> </a>
            <a href="{{url("/recicladores")}}" class="btn btn-success ml-2">
                {{__('Regresar')}}</a>
        </div>
    </div>
</div>
<!--End Modal editar Información Personal-->
<!-- Modal editar Zona de recolección-->
<div class="modal fade" id="editarZona" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog  modal-lg modal-dialog-centered" role="document">
        <div class="modal-content ">
            <div class="modal-header ">
                <h2 class="modal-title text-success" id="tituloHistoria"></i>Editar Zonas de recolecci&oacute;n</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body bg-light">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="row w-100">
                            <div class="col-6">
                                <div class="d-flex justify-content-start">
                                    <h5 class="mt-1">Nueva zona de recolección
                                        <button class="btn btn-info" type="button" data-toggle="tooltip"
                                            data-placement="right" title="Adiciona cada una de las localidades por donde labora el nuevo reciclador(a). Ingresa el municipio, comuna (si aplica) y el barrio, con el respectivo horario de trabajo.
                                        ">
                                            <i class="fas fa-info-circle"></i>
                                        </button>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-6">
                            </div>
                        </div>
                        <div class="row w-100">
                            <div class="col-xl-6 col-lg-6 col-md-12">
                                <div class="form-group mt-1">
                                    <label for="municipio">Municipio</label>
                                    <select class="custom-select  @error('sectors') is-invalid @enderror" id="municipio"
                                        aria-label="Example select with button addon">
                                        <option value="Medellín">Medellín</option>
                                        <option value="Envigado">Envigado</option>
                                        <option value="Sabaneta">Sabaneta</option>
                                        <option value="Itagui">Itagui</option>
                                        <option value="Bello">Bello</option>
                                        <option value="Caldas">Caldas</option>
                                        <option value="La estrella">La estrella</option>
                                        <option value="Copacabana">Copacabana</option>
                                        <option value="Girardota">Girardota</option>
                                        <option value="Barbosa">Barbosa</option>
                                    </select>
                                    @error('sectors')
                                    <div class="invalid-tooltip">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12">
                                <div class="form-group mt-1">
                                    <label for="comuna">Comuna</label>
                                    <select class="custom-select  @error('sectors') is-invalid @enderror" id="comuna"
                                        aria-label="Example select with button addon">
                                        <option value="Comuna 1">Comuna 1</option>
                                        <option value="Comuna 2">Comuna 2</option>
                                        <option value="Comuna 3">Comuna 3</option>
                                        <option value="Comuna 4">Comuna 4</option>
                                        <option value="No aplica">No aplica</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row w-100">
                            <div class="col-xl-6 col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label for="sector">Barrio</label>
                                    <select class="custom-select @error('sectors') is-invalid @enderror " id="sector"
                                        aria-label="Example select with button addon">
                                        <option value="El Poblado">El Poblado</option>
                                        <option value="Zuñiga">Zuñiga</option>
                                        <option value="San Marcos">San Marcos</option>
                                        <option value="El portal">El portal</option>
                                        <option value="El dorado">El dorado</option>
                                        <option value="Villagrande">Villagrande</option>
                                        <option value="La Magnolia">La Magnolia</option>
                                        <option value="San Mateo">San Mateo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-12">
                                <p>Día (s):</p>
                                <div class="row w-100">
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="lunes" value="L">
                                            <label class="custom-control-label" for="lunes">Lunes</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="martes" value="M">
                                            <label class="custom-control-label" for="martes">Martes</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="miercoles"
                                                value="X">
                                            <label class="custom-control-label" for="miercoles">Miercoles</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="jueves" value="J">
                                            <label class="custom-control-label" for="jueves">Jueves</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="viernes" value="V">
                                            <label class="custom-control-label" for="viernes">Viernes</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="sabado" value="S">
                                            <label class="custom-control-label" for="sabado">Sábado</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="domingo" value="D">
                                            <label class="custom-control-label" for="domingo">Domingo</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row w-100">
                            <div class="col-12">
                                <h5>Horario de trabajo</h5>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label for="Hinit">Desde</label>
                                    <input type="time" class="form-control" id="Hinit" value="07:00" min="07:00"
                                        max="20:00">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12">
                                <div class="form-group ">
                                    <label for="Hfinal">Hasta</label>
                                    <input type="time" class="form-control" id="Hfinal" value="20:00" min="07:00"
                                        max="20:00">
                                </div>
                            </div>
                        </div>
                        <div class="row table-responsive m-1">
                            <button id="addGeo" class="btn btn-outline-primary btn-block" type="button"
                                onclick="agregarZona()">Adicionar</button>
                            <div id="alerta_sector" class="alert alert-warning  d-nonei my-2">
                                <strong>Atenci&oacute;n!</strong>
                                Valide que est&eacute; ingresando al menos un d&iacute;a de la semana<br>
                                y que los campos de Hora inicio y Hora fin esten llenos
                            </div>
                            <table class="table table-borderless table-hover table-light mt-2 " id="datosZona">
                                <thead>
                                    <tr>
                                        <th class="col-md-3" scope="col">Barrio</th>
                                        <th class="col-md-2" scope="col">Comuna</th>
                                        <th class="col-md-2" scope="col">Municipio</th>
                                        <th class="col-md-2" scope="col">Día(s)</th>
                                        <th class="col-md-3" scope="col">Horario</th>
                                    </tr>
                                </thead>
                                <tbody id="listaZonas">
                                    <tr>
                                        <td>Altos del poblado</td>
                                        <td>Comuna 14</td>
                                        <td>Medellín</td>
                                        <td>L-X</td>
                                        <td>5:00AM-10:00AM</td>
                                        <td><button class="btn btn-danger" onclick="eliminarZona()">
                                            <i class="fas fa-trash-alt"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td>El tesoro</td>
                                        <td>Comuna 14</td>
                                        <td>Medellín</td>
                                        <td>M-J</td>
                                        <td>5:00AM-10:00AM</td>
                                        <td><button class="btn btn-danger" onclick="eliminarZona()">
                                            <i class="fas fa-trash-alt"></i></button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Regresar</button>
                <a data-dismiss="modal" data-toggle="modal" data-target="#detallesModal1">
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
                <h2 class="modal-title text-success" id="tituloHistoria">Editar Materiales de recolección</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body bg-light">
                <div class="container">
                    <div class="row  justify-content-center ">
                        <div class="col-md-11">
                            <div class="input-group">
                                <select class="custom-select" id="residuo"
                                    aria-label="Example select with button addon">
                                    <option value="Cartón">Cartón</option>
                                    <option value="Metales">Metales</option>
                                    <option value="Papel">Papel</option>
                                    <option value="Plástico">Plástico</option>
                                    <option value="Tetra pak">Tetra pak</option>
                                    <option value="Vidrio">Vidrio</option>
                                </select>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-primary" type="button" id="boton_agregar_residuo"
                                        onclick="agregar_residuo()">Adicionar
                                    </button>
                                </div>
                            </div>
                            <table class="table table-borderless table-hover table-light mt-2 w-100" id="datosZona">
                                <thead>
                                    <th class="col-11">Material</th>
                                    <th class="col-1"></th>
                                </thead>
                                <tbody id="Blista_residuos">
                                    <tr>
                                        <td>Cartón</td>
                                        <td><button class="btn btn-danger" onclick="eliminarResiduo()">
                                            <i class="fas fa-trash-alt"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td>Metales</td>
                                        <td><button class="btn btn-danger" onclick="eliminarResiduo()">
                                            <i class="fas fa-trash-alt"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td>Plástico</td>
                                        <td><button class="btn btn-danger" onclick="eliminarResiduo()">
                                            <i class="fas fa-trash-alt"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td>Vidrio</td>
                                        <td><button class="btn btn-danger" onclick="eliminarResiduo()">
                                            <i class="fas fa-trash-alt"></i></button></td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Regresar</button>
                <a data-dismiss="modal" data-toggle="modal" data-target="#detallesModal1">
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
                <h2 class="text-success">Eliminar reciclador(a)</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="d-flex justify-content-center mt-2 mb-2">
                            <img src="{{url("alerta.png")}}" alt="">
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
                <a href="{{url("/recicladores")}}">
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
                                <img src="{{url("Exito.png")}}" alt="">
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
    var contador_residuos = 4;
    var contador_zonas = 2;

    function agregar_residuo() {
        var lista_residuos = document.getElementById("Blista_residuos");
        var lista_residuos2 = document.getElementById("lista-residuos");
        if (contador_residuos == 0) {
            var limit = lista_residuos.childNodes.length;
            for (let index = 0; index < limit; index++) {
                lista_residuos.removeChild(lista_residuos.childNodes[lista_residuos.childNodes.length - 1]);
            }
            var limit = lista_residuos2.childNodes.length;
            for (let index = 0; index < limit; index++) {
                lista_residuos2.removeChild(lista_residuos2.childNodes[lista_residuos2.childNodes.length - 1]);
            }
        }
        var selected_item = document.getElementById("residuo");
        selected_item = selected_item.value;
        var nodo_lista = document.createElement("TR");
        var nodo_general = document.createElement("TR");
        var col1 = document.createElement("TD");
        var col2 = document.createElement("TD");
        var col3 = document.createElement("TD");
        var div = document.createElement("DIV");
        div.setAttribute("class", "d-flex justify-content-end");
        var boton_eliminar = document.createElement("BUTTON")
        var nodo_imagen = document.createElement("I")
        boton_eliminar.setAttribute("class", "btn btn-danger");
        boton_eliminar.setAttribute("onclick", "eliminarResiduo()");
        boton_eliminar.appendChild(nodo_imagen);
        div.appendChild(boton_eliminar);
        nodo_imagen.setAttribute("class", "fas fa-trash-alt");
        var residuo_lista = document.createTextNode(selected_item);
        var residuo_lista2 = document.createTextNode(selected_item);
        col1.appendChild(residuo_lista);
        col2.appendChild(div);
        col3.appendChild(residuo_lista2);
        nodo_lista.appendChild(col1);
        nodo_lista.appendChild(col2);
        console.log(nodo_lista.childNodes[0].childNodes)
        nodo_general.appendChild(col3);
        lista_residuos2.appendChild(nodo_general);
        lista_residuos.appendChild(nodo_lista);
        contador_residuos += 1;
    }

    function eliminarResiduo() {
        var lista_residuos = document.getElementById("Blista_residuos");
        var lista_residuos2 = document.getElementById("lista-residuos");
        if (contador_residuos == 1) {
            contador_residuos = 0;
            lista_residuos.removeChild(lista_residuos.childNodes[lista_residuos.childNodes.length - 1]);
            lista_residuos2.removeChild(lista_residuos2.childNodes[lista_residuos2.childNodes.length - 1]);
            var nodo_lista = document.createElement("TR");
            var nodo_lista2 = document.createElement("TH");
            var residuo_lista = document.createTextNode("No hay materiales seleccionados.");
            nodo_lista2.appendChild(residuo_lista);
            nodo_lista.appendChild(nodo_lista2);
            lista_residuos.appendChild(nodo_lista);
            var nodo_lista3 = document.createElement("TR");
            var nodo_lista4 = document.createElement("TH");
            var residuo_lista2 = document.createTextNode("No hay materiales seleccionados.");
            nodo_lista4.appendChild(residuo_lista2);
            nodo_lista3.appendChild(nodo_lista4);
            lista_residuos2.appendChild(nodo_lista3);

            return;
        }
        if (contador_residuos == 0) {
            lista_residuos.removeChild(lista_residuos.childNodes[lista_residuos.childNodes.length - 1]);
            lista_residuos2.removeChild(lista_residuos2.childNodes[lista_residuos2.childNodes.length - 1]);
        }
        lista_residuos.removeChild(lista_residuos.childNodes[lista_residuos.childNodes.length - 1]);
        lista_residuos2.removeChild(lista_residuos2.childNodes[lista_residuos2.childNodes.length - 1]);
        contador_residuos -= 1;
    }

    function eliminarZona() {
        var lista_zonas = document.getElementById("listaZonas");
        var lista_zonas2 = document.getElementById("listaZonas2");
        if (contador_zonas == 1) {
            contador_zonas = 0;
            lista_zonas.removeChild(lista_zonas.childNodes[lista_zonas.childNodes.length - 1]);
            lista_zonas2.removeChild(lista_zonas2.childNodes[lista_zonas2.childNodes.length - 1]);
            var nodo_lista = document.createElement("TR");
            var nodo_lista2 = document.createElement("TH");
            var residuo_lista = document.createTextNode("No hay zonas asignadas.");
            nodo_lista2.appendChild(residuo_lista);
            nodo_lista.appendChild(nodo_lista2);
            lista_zonas.appendChild(nodo_lista);
            var nodo_lista3 = document.createElement("TR");
            var nodo_lista4 = document.createElement("TH");
            var residuo_lista2 = document.createTextNode("No hay zonas asignadas.");
            nodo_lista4.appendChild(residuo_lista2);
            nodo_lista3.appendChild(nodo_lista4);
            lista_zonas2.appendChild(nodo_lista3);
            return;
        }
        if (contador_zonas == 0) {
            lista_zonas.removeChild(lista_zonas.childNodes[lista_zonas.childNodes.length - 1]);
            lista_zonas2.removeChild(lista_zonas2.childNodes[lista_zonas2.childNodes.length - 1]);
            return;
        }
        lista_zonas.removeChild(lista_zonas.childNodes[lista_zonas.childNodes.length - 1]);
        lista_zonas2.removeChild(lista_zonas2.childNodes[lista_zonas2.childNodes.length - 1]);
        contador_zonas -= 1;
        console.log(contador_zonas);
    }

    function agregarZona() {
        var tabla_sectores = document.getElementById("listaZonas");
        var tabla_sectores2 = document.getElementById("listaZonas2");
        if (contador_zonas == 0) {
            var limit = tabla_sectores.childNodes.length;
            for (let index = 0; index < limit; index++) {
                tabla_sectores.removeChild(tabla_sectores.childNodes[tabla_sectores.childNodes.length - 1]);
            }
            var limit = tabla_sectores2.childNodes.length;
            for (let index = 0; index < limit; index++) {
                tabla_sectores2.removeChild(tabla_sectores2.childNodes[tabla_sectores2.childNodes.length - 1]);
            }
        }
        var barrio = document.getElementById("sector").value;
        var municipio = document.getElementById("municipio").value;
        var comuna = document.getElementById("comuna").value;
        var horario = document.getElementById("Hinit").value + " - " + document.getElementById("Hfinal").value;
        var dias = "";
        var dia;
        dia = document.getElementById("lunes");
        if (dia.checked == true) {
            dias = dias + dia.value + " ";
        }
        dia = document.getElementById("martes");
        if (dia.checked == true) {
            dias = dias + dia.value + " ";
        }
        dia = document.getElementById("miercoles");
        if (dia.checked == true) {
            dias = dias + dia.value + " ";
        }
        dia = document.getElementById("jueves");
        if (dia.checked == true) {
            dias = dias + dia.value + " ";
        }
        dia = document.getElementById("viernes");
        if (dia.checked == true) {
            dias = dias + dia.value + " ";
        }
        dia = document.getElementById("sabado");
        if (dia.checked == true) {
            dias = dias + dia.value + " ";
        }
        dia = document.getElementById("domingo");
        if (dia.checked == true) {
            dias = dias + dia.value + " ";
        }
        var lista = document.getElementById("datosZona");
        var nodo_fila = document.createElement("TR");
        var nodo_fila2 = document.createElement("TR");
        var nodo_columna1 = document.createElement("TD");
        var nodo_columna2 = document.createElement("TD");
        var nodo_columna3 = document.createElement("TD");
        var nodo_columna4 = document.createElement("TD");
        var nodo_columna5 = document.createElement("TD");
        var nodo_columna6 = document.createElement("TD");
        var nodo_columna12 = document.createElement("TD");
        var nodo_columna22 = document.createElement("TD");
        var nodo_columna32 = document.createElement("TD");
        var nodo_columna52 = document.createElement("TD");
        var nodo_columna62 = document.createElement("TD");
        var boton_eliminar = document.createElement("BUTTON")
        var nodo_imagen = document.createElement("I")
        boton_eliminar.setAttribute("class", "btn btn-danger");
        boton_eliminar.setAttribute("onclick", "eliminarZona()");
        boton_eliminar.appendChild(nodo_imagen);
        nodo_imagen.setAttribute("class", "fas fa-trash-alt");
        var nodo_texto1 = document.createTextNode(barrio);
        var nodo_texto2 = document.createTextNode(horario);
        var nodo_texto3 = document.createTextNode(dias);
        var nodo_texto4 = document.createTextNode(comuna);
        var nodo_texto5 = document.createTextNode(municipio);
        var nodo_texto12 = document.createTextNode(barrio);
        var nodo_texto22 = document.createTextNode(horario);
        var nodo_texto32 = document.createTextNode(dias);
        var nodo_texto42 = document.createTextNode(comuna);
        var nodo_texto52 = document.createTextNode(municipio);
        nodo_columna1.appendChild(nodo_texto1);
        nodo_columna3.appendChild(nodo_texto3);
        nodo_columna5.appendChild(nodo_texto4);
        nodo_columna6.appendChild(nodo_texto5);
        nodo_columna2.appendChild(nodo_texto2);
        nodo_columna12.appendChild(nodo_texto12);
        nodo_columna32.appendChild(nodo_texto32);
        nodo_columna22.appendChild(nodo_texto22);
        nodo_columna52.appendChild(nodo_texto42);
        nodo_columna62.appendChild(nodo_texto52);
        nodo_columna4.appendChild(boton_eliminar);
        nodo_fila.appendChild(nodo_columna1);
        nodo_fila.appendChild(nodo_columna5);
        nodo_fila.appendChild(nodo_columna6);
        nodo_fila.appendChild(nodo_columna3);
        nodo_fila.appendChild(nodo_columna2);
        nodo_fila.appendChild(nodo_columna4);
        nodo_fila2.appendChild(nodo_columna12);
        nodo_fila2.appendChild(nodo_columna52);
        nodo_fila2.appendChild(nodo_columna62);
        nodo_fila2.appendChild(nodo_columna32);
        nodo_fila2.appendChild(nodo_columna22);
        tabla_sectores2.appendChild(nodo_fila2);
        tabla_sectores.appendChild(nodo_fila);
        contador_zonas += 1;
    }

</script>

@endsection

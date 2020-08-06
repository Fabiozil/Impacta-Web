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
        <div class="container">
            <div class="py-5 text-center titulo">
                <h1 class="text-success">Ingresar nuevo reciclador(a)</h1>
                <p class="lead">Utiliza los campos a continuación para ingresar la información necesaria de un nuevo reciclador(a) a la corporación.</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="row border border-solid">
                        <div class="col-xl-4 col-lg-4 col-md-12 h-100">
                            <div class="row h-100">
                                <div class="container h-100 cont-rec">
                                    <div class="row">
                                        <div class="col-xl-12 mb-3">
                                            <div class="container">
                                                <div class="py-5 subtitle text-center mt-2">
                                                    <h2 class="text-success">Mi perfil</h2>
                                                </div>
                                                <div class="text-center">
                                                    <div class="border rounded-circle overflow-hidden border-success"
                                                        style="height: 250px; width: 250px; margin-left: auto; margin-right: auto">
                                                        <i class="fas fa-user-tie"
                                                            style="width: 100% !important; height: 100% !important;"></i>
                                                    </div>
                                                    <label class="mt-2">Carga una foto de perfil.</label>
                                                </div>
                                                <div class="input-group ">
                                                    <div class="input-group-prepend">
                                                    </div>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="customFileLang" lang="es">
                                                        <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                                                      </div>
                                                </div>
                                                <label>Capacidad máxima 20 Mb</label><br>
                                                <small>
                                                    <ul>
                                                        <li>El formato de la foto debe ser .jpg o .png</li>
                                                    </ul>
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-12 borde-derecha">
                            <div class="container">
                                <div class="row mt-3">
                                    <div class="col-xl-12">
                                        <div class="py-5 subtitle">
                                            <h2 class="text-success">Mis datos personales</h2>
                                            <p class="lead">Ingresa la información referente a los datos personales del
                                                nuevo reciclador(a). Los campos señalados con <strong class="text-danger">*</strong> son
                                                obligatorios.</p>
                                            
                                        </div>
                                    </div>
        
                                </div>
                                <div class="row pl-4 pr-4 pt-0">
                                    <div class="col-xl-12 my-3">
                                        <div class="form-group w-100">
                                            <div class="form-group row">
                                                <label for="nombres" class="col-sm-2 col-form-label">Nombre <strong
                                                        class="text-danger">*</strong></label>
                                                <div class="col-sm-10">
                                                    <div class="input-group mb-2">
                                                        <input type="text" name="nombres"
                                                            class="form-control @error('nombres') is-invalid @enderror"
                                                            id="nombres" placeholder="James David"
                                                            value="Reinaldo">
                                                        <div class="input-group-append">
                                                            <span class="btn btn-info" data-toggle="tooltip"
                                                                data-placement="top"
                                                                title="Digita el 'Nombre' manteniendo la configuración de primera letra en mayúscula. Ten en cuenta una buena ortografía.">
                                                                <i class="fas fa-info-circle"></i></span>
                                                        </div>
                                                        @error('nombres')
                                                        <div class="invalid-tooltip">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="apellidos" class="col-sm-2 col-form-label">Apellido <strong
                                                        class="text-danger">*</strong></label>
                                                <div class="col-sm-10">
                                                    <div class="input-group mb-2">
                                                        <input type="text" name="apellidos"
                                                            class="form-control @error('apellidos') is-invalid @enderror"
                                                            id="apellidos" placeholder="Rodriguez Rubio"
                                                            value="Ochoa">
                                                        <div class="input-group-append">
                                                            <span class="btn btn-info" data-toggle="tooltip"
                                                                data-placement="top"
                                                                title="Digita el 'Apellido' manteniendo la configuración de primera letra en mayúscula. Ten en cuenta una buena ortografía.">
                                                                <i class="fas fa-info-circle"></i></span>
                                                        </div>
                                                        @error('apellidos')
                                                        <div class="invalid-tooltip">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="apodo" class="col-sm-2 col-form-label">Apodo</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group mb-2">
                                                        <input type="text" name="apodo"
                                                            class="form-control @error('apodo') is-invalid @enderror"
                                                            id="apodo" placeholder="James" value="Rey">
                                                        <div class="input-group-append">
                                                            <span class="btn btn-info" data-toggle="tooltip"
                                                                data-placement="top"
                                                                title="Digita este campo si tu reciclador(a) prefiere ser llamado por su apodo. Ten en cuenta una buena ortografía.">
                                                                <i class="fas fa-info-circle"></i></span>
                                                        </div>
                                                        @error('apodo')
                                                        <div class="invalid-tooltip">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="fecha_nacimiento" class="col-sm-2 pr-0 col-form-label">Nacimiento</label>
                                                <div class="col-sm-10">
        
                                                    <input type="date" name="fecha_nacimiento"
                                                        class="form-control @error('fecha_nacimiento') is-invalid @enderror"
                                                        id="fecha_nacimiento" placeholder="28" value="1985-07-22"
                                                        min="1900-01-01" max="2000-01-01"
                                                        value="1979-09-16">
                                                    @error('fecha_nacimiento')
                                                    <div class="invalid-tooltip">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="celular" class="col-sm-2 col-form-label">Celular</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group mb-2">
                                                        <input type="text" name="celular"
                                                            class="form-control  @error('celular') is-invalid @enderror"
                                                            id="celular" placeholder="3102020540"
                                                            value="333 31 42">
                                                        <div class="input-group-append">
                                                            <span class="btn btn-info" data-toggle="tooltip"
                                                                data-placement="top"
                                                                title="Digita este campo si tu reciclador(a) desea ser contactado por la corporación o por uno de los usuarios asignados. ">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-7 col-lg-12 col-md-12 mt-2">
                <div class="row h-100">
                    <div class="container cont-rec m-100 border border-solid">
                        <div class="col-xl-12">
                            <div class="py-5 subtitle">
                                <h2 class="text-success">Mi labor</h2>
                                <p class="lead">Ingresa la información referente a las condiciones laborales del nuevo
                                    reciclador(a).</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="container cont-rec-nf">
                                <div class="col-xl-12 h-100">
                                    <div class="row align-items-center">
                                        <div class="col-xl-12 border-solid border-bottom">
                                            <h5>Materiales de recolección <a class="text-danger"><strong> *</strong></a>
                                                <button class="btn btn-info" type="button" data-toggle="tooltip"
                                                    data-placement="right" title="Adiciona de las categorías de material reciclable que es recolectado por el nuevo reciclador(a). Ten en cuenta que este material debe ser aprovechado por la corporación.
                                                ">
                                                    <i class="fas fa-info-circle"></i>
                                                </button>
                                            </h5>
        
                                            <div class="input-group">
                                                <select class="custom-select  @error('residuos') is-invalid @enderror"
                                                    id="residuo" aria-label="Example select with button addon">
                                                    <option value="Cartón">Cartón</option>
                                                    <option value="Metales">Metales</option>
                                                    <option value="Papel">Papel</option>
                                                    <option value="Plástico">Plástico</option>
                                                    <option value="Tetra pak">Tetra pak</option>
                                                    <option value="Vidrio">Vidrio</option>
                                                </select>
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-primary" type="button"
                                                        id="boton_agregar_residuo" onclick="agregar_residuo()">Adicionar
                                                    </button>
                                                </div>
                                                @error('residuos')
                                                <div class="invalid-tooltip">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <table class="table table-borderless table-hover table-light mt-2"
                                                id="Tlista_residuos">
                                                <thead>
                                                    <tr>
                                                        <th class="col-md-11" scope="col">Materiales</th>
                                                        <th class="col-md-1" scope="col"></th>
                                                    </tr>
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
                                    <h5 class="mt-3">Zonas de recolección <a class="text-danger"><strong> *</strong></a>
                                        <button class="btn btn-info" type="button" data-toggle="tooltip"
                                            data-placement="right" title="Adiciona las localidades por donde labora el nuevo reciclador(a). Ingresa el municipio, comuna (si aplica) y el barrio, con el respectivo horario de trabajo.
                                        ">
                                            <i class="fas fa-info-circle"></i>
                                        </button>
                                    </h5>
                                    <div class="row">
                                        <div class="col-xl-12 mb-1">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-6 col-md-12">
                                                    <div class="form-group mt-1">
                                                        <label for="municipio">Municipio</label>
                                                        <select
                                                            class="custom-select  @error('sectors') is-invalid @enderror"
                                                            id="municipio" aria-label="Example select with button addon">
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
                                                        <select
                                                            class="custom-select  @error('sectors') is-invalid @enderror"
                                                            id="comuna" aria-label="Example select with button addon">
                                                            <option value="Comuna 1">Comuna 1</option>
                                                            <option value="Comuna 2">Comuna 2</option>
                                                            <option value="Comuna 3">Comuna 3</option>
                                                            <option value="Comuna 4">Comuna 4</option>
                                                            <option value="No aplica">No aplica</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label for="sector">Barrio</label>
                                                <select class="custom-select @error('sectors') is-invalid @enderror "
                                                id="sector" aria-label="Example select with button addon">
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
                                            
                                        </div>
                                    </div>
                                    <div class="row mb-5">
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
                                                <input type="time" class="form-control" id="Hfinal" value="20:00"
                                                    min="07:00" max="20:00">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-12">
                                                    <p>Día(s):</p>
                                                    <div class="d-flex justify-content-between">
                                                        <div class="custom-control custom-checkbox d-inline">
                                                            <input type="checkbox" class="custom-control-input" id="lunes"
                                                                value="L">
                                                            <label class="custom-control-label" for="lunes">Lunes</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox d-inline">
                                                            <input type="checkbox" class="custom-control-input" id="martes"
                                                                value="M">
                                                            <label class="custom-control-label" for="martes">Martes</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox d-inline">
                                                            <input type="checkbox" class="custom-control-input" id="miercoles"
                                                                value="X">
                                                            <label class="custom-control-label"
                                                                for="miercoles">Miércoles</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox d-inline">
                                                            <input type="checkbox" class="custom-control-input" id="jueves"
                                                                value="J">
                                                            <label class="custom-control-label" for="jueves">Jueves</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox d-inline">
                                                            <input type="checkbox" class="custom-control-input" id="viernes"
                                                                value="V">
                                                            <label class="custom-control-label" for="viernes">Viernes</label>
                                                        </div> 
                                                    </div>
                                                    <br>
                                                    <div class="custom-control custom-checkbox d-inline mr-4">
                                                        <input type="checkbox" class="custom-control-input" id="sabado"
                                                            value="S">
                                                        <label class="custom-control-label" for="sabado">Sábado</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox d-inline ml-2">
                                                        <input type="checkbox" class="custom-control-input" id="domingo"
                                                            value="D">
                                                        <label class="custom-control-label" for="domingo">Domingo</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row table-responsive m-1">
                                        <button id="addGeo" class="btn btn-outline-primary btn-block" type="button" onclick="agregarZona()">Adicionar</button>
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
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="col-xl-5 col-lg-12 col-md-12 mt-2">
                <div class="row h-100">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="container cont-rec h-100 border border-solid">
                                <div class="py-5 subtitle">
                                    <h2 class="text-success">Mi historia</h2>
                                    <p class="lead">Ingresa una historia del nuevo reciclador(a) que deseas compartir con los usuarios.</p>
                                </div>
                                <div class="container h-100">
                                    <div class="input-group h-100">
                                        <textarea name="historia"
                                            class="form-control  @error('historia') is-invalid @enderror" rows="15"
                                            placeholder="Historia">He caminado por las calles de la ciudad durante más de 30 años recuperando material reciclaje para sustentar a mi familia y cuidar este mundo que nos ha regalado tanto. Es así como te agradecería si me ayudas en esta misión, separando este material y dándome la oportunidad de llegar con mi familia con excelentes noticias y una oportunidad para sonreír.</textarea>
                                        @error('historia')
                                        <div class="invalid-tooltip">{{ $message }}</div>
                                        @enderror
        
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <small class="text-muted">Capacidad máxima: 500 caracteres</small>
                                    </div>
                                    <small id="emailHelp" class="form-text text-muted">Aquí te damos cuatro consejos para que crees la historia del nuevo reciclador(a):
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
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <div class="d-flex justify-content-end">
            <a href="{{ url("/recicladores") }}">
                <button class="btn btn-danger mr-2">Regresar</button>
            </a>
            <a data-toggle="modal" data-target="#detallesModal">
                <button class="btn btn-success">Registrar</button>
            </a>
        </div>
    </div>
</div>
</div>
<div class="modal fade" id="detallesModal" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title text-success">Registrar reciclador(a)</h2>
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
                            <h1 class="py-2 text-center">¿Deseas agregar este reciclador(a)?</h1>
                            <h5 class="lead border-solid text-center border p-3">El reciclador(a) <strong>Reinaldo Ochoa</strong>  se ingresará a su lista de mis recicladores de forma permanente. Asegúrate de haber ingresado la información correctamente</h5>
                            <h5 class="lead text-center mt-2">Una vez registrado el reciclador(a), se habilitará la asignación de usuarios. Ver mapa "Mi Comunidad"</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <span class="pull-right"><button type="button" class="btn btn-danger"
                        data-dismiss="modal">Regresar</button></span>
                <a data-dismiss="modal" data-toggle="modal" data-target="#detallesModal1" >
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
                <a href="{{url("/recicladores")}}">
                    <button type="button" class="btn btn-success">Confirmar</button></span>
                </a>
            </div>
        </div>
    </div>
</div>

<script>
    var contador_residuos = 4;
    var contador_zonas = 2;
    function agregar_residuo() {    
        var lista_residuos = document.getElementById("Blista_residuos");
        if (contador_residuos==0) {
            var limit = lista_residuos.childNodes.length;
            for (let index = 0; index < limit; index++) {
                lista_residuos.removeChild(lista_residuos.childNodes[lista_residuos.childNodes.length-1]);
            }
        }
        var selected_item = document.getElementById("residuo");
        selected_item = selected_item.value;
        var nodo_lista = document.createElement("TR");
        var col1 = document.createElement("TD");
        var col2 = document.createElement("TD");
        var boton_eliminar = document.createElement("BUTTON")
        var nodo_imagen = document.createElement("I")
        boton_eliminar.setAttribute("class","btn btn-danger");
        boton_eliminar.setAttribute("onclick","eliminarResiduo()");
        boton_eliminar.appendChild(nodo_imagen);
        nodo_imagen.setAttribute("class","fas fa-trash-alt");
        var residuo_lista = document.createTextNode(selected_item);
        col1.appendChild(residuo_lista);
        col2.appendChild(boton_eliminar);
        nodo_lista.appendChild(col1);
        nodo_lista.appendChild(col2);
        lista_residuos.appendChild(nodo_lista);
        contador_residuos += 1;
        console.log(contador_residuos);
    }
    function eliminarResiduo(){
        var lista_residuos = document.getElementById("Blista_residuos");
        if (contador_residuos==1) {
            contador_residuos = 0;
            lista_residuos.removeChild(lista_residuos.childNodes[lista_residuos.childNodes.length-1]);
            var nodo_lista = document.createElement("TR");
            var nodo_lista2 = document.createElement("TH");
            var residuo_lista = document.createTextNode("No hay materiales seleccionados.");
            nodo_lista2.appendChild(residuo_lista);
            nodo_lista.appendChild(nodo_lista2);
            lista_residuos.appendChild(nodo_lista);
            return;
        }
        if (contador_residuos==0) {
            return;
        }
        lista_residuos.removeChild(lista_residuos.childNodes[lista_residuos.childNodes.length-1]);
        contador_residuos -=1;
        console.log(contador_residuos);
    }
    function eliminarZona(){
        var lista_zonas = document.getElementById("listaZonas");
        if (contador_zonas==1) {
            contador_zonas = 0;
            lista_zonas.removeChild(lista_zonas.childNodes[lista_zonas.childNodes.length-1]);
            var nodo_lista = document.createElement("TR");
            var nodo_lista2 = document.createElement("TH");
            var residuo_lista = document.createTextNode("No hay zonas asignadas.");
            nodo_lista2.appendChild(residuo_lista);
            nodo_lista.appendChild(nodo_lista2);
            lista_zonas.appendChild(nodo_lista);
            return;
        }
        if (contador_zonas==0) {
            return;
        }
        lista_zonas.removeChild(lista_zonas.childNodes[lista_zonas.childNodes.length-1]);
        contador_zonas -=1;
        console.log(contador_zonas);
    }
    function agregarZona(){
        var tabla_sectores = document.getElementById("listaZonas");
        if (contador_zonas==0) {
            var limit = tabla_sectores.childNodes.length;
            for (let index = 0; index < limit; index++) {
                tabla_sectores.removeChild(tabla_sectores.childNodes[tabla_sectores.childNodes.length-1]);
            }
        }
        var barrio = document.getElementById("sector").value;
        var municipio = document.getElementById("municipio").value;
        var comuna = document.getElementById("comuna").value;
        // var sector = document.getElementById("sector").value+" - "+document.getElementById("comuna").value+" - "+document.getElementById("municipio").value
        var horario = document.getElementById("Hinit").value+" - "+document.getElementById("Hfinal").value;
        var dias = "";
        var dia;
        dia = document.getElementById("lunes");
        if (dia.checked == true) {
            dias = dias+dia.value+" ";
        }
        dia = document.getElementById("martes");
        if (dia.checked == true) {
            dias = dias+dia.value+" ";
        }
        dia = document.getElementById("miercoles");
        if (dia.checked == true) {
            dias = dias+dia.value+" ";
        }
        dia = document.getElementById("jueves");
        if (dia.checked == true) {
            dias = dias+dia.value+" ";
        }
        dia = document.getElementById("viernes");
        if (dia.checked == true) {
            dias = dias+dia.value+" ";
        }
        dia = document.getElementById("sabado");
        if (dia.checked == true) {
            dias = dias+dia.value+" ";
        }
        dia = document.getElementById("domingo");
        if (dia.checked == true) {
            dias = dias+dia.value+" ";
        }
        var lista = document.getElementById("datosZona");
        var nodo_fila = document.createElement("TR");
        var nodo_columna1 = document.createElement("TD");
        var nodo_columna2 = document.createElement("TD");
        var nodo_columna3 = document.createElement("TD");
        var nodo_columna4 = document.createElement("TD");
        var nodo_columna5 = document.createElement("TD");
        var nodo_columna6 = document.createElement("TD");
        var boton_eliminar = document.createElement("BUTTON")
        var nodo_imagen = document.createElement("I")
        boton_eliminar.setAttribute("class","btn btn-danger");
        boton_eliminar.setAttribute("onclick","eliminarZona()");
        boton_eliminar.appendChild(nodo_imagen);
        nodo_imagen.setAttribute("class","fas fa-trash-alt");
        var nodo_texto1 = document.createTextNode(barrio) ;
        // var nodo_texto1 = document.createTextNode(sector);
        var nodo_texto2 = document.createTextNode(horario);
        var nodo_texto3 = document.createTextNode(dias);
        var nodo_texto4 = document.createTextNode(comuna) ;
        var nodo_texto5 = document.createTextNode(municipio) ;
        nodo_columna5.appendChild(nodo_texto4);
        nodo_columna6.appendChild(nodo_texto5);
        nodo_columna1.appendChild(nodo_texto1);
        nodo_columna3.appendChild(nodo_texto3);
        nodo_columna2.appendChild(nodo_texto2);
        nodo_columna4.appendChild(boton_eliminar);
        nodo_fila.appendChild(nodo_columna1);
        nodo_fila.appendChild(nodo_columna5);
        nodo_fila.appendChild(nodo_columna6);
        nodo_fila.appendChild(nodo_columna3);
        nodo_fila.appendChild(nodo_columna2);
        nodo_fila.appendChild(nodo_columna4);
        tabla_sectores.appendChild(nodo_fila);
        contador_zonas += 1;
    }
</script>

@endsection

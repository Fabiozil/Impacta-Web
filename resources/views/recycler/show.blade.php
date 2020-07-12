@extends('layouts.app')
@section('navbar-left')
<li class="nav-item mx-lg-2 my-2 my-lg-0">
    <a class="btn btn-success btn-block" href="{{route('recyclers.create')}}"  data-toggle="tooltip" data-placement="bottom" title="Añadir un nuevo reciclador">
        <i class="fas fa-user-plus"> </i> {{__('Añadir')}}
    </a>

</li>
<li class="nav-item">
    <form class="my-2 my-lg-0">
    <div class="input-group">
        <input type="text" class="form-control " placeholder="Buscar reciclador" aria-label="Buscador de recicladores" aria-describedby="filtrar">
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
    <div class="row ">
        <div class="col-md-12">
            <div class="py-5 text-center titulo">
                <h1 class="text-success">Avimilé Ribas</h1>
                <p class="lead">Avi</p>
            </div>
        </div>
    </div>
    <div class="row bg-light">
        <div class="col-md-12  mt-3 ">
            <div class="card ">
                <div class="row no-gutters">
                  <div class="col-md-2 p-3 p-sm-4 p-lg-1">
                    <img class="imgRecycler2 border border-success rounded-circle w-100 mx-1 mx-md-1 mx-lg-2 my-3 " src="{{ url('/Avimile.jpg') }}" class="card-img" alt="Foto de Avimilé">
                  </div>
                  <div class="col-md-10 align-self-center">
                    <div class="card-body ml-2" id="info_personal">
                        <h5 class="card-title text-success">{{__('Información Personal')}}</h5>
                        <div class="row">
                            <div class="col-md-4">
                                <strong>{{__('Nombres').': '}}</strong><span>Avimilé</span><br>
                                <strong>{{__('Apellidos').': '}}</strong><span>Ribas</span><br>
                                <strong>{{__('Apodo').': '}}</strong><span>Avi</span>
                            </div>
                        <div class="col-md-4">
                            <strong>{{__('Celular').': '}}</strong><span>333 31 42</span><br>
                            <strong>{{__('Fecha de Nacimiento').': '}}</strong><span>23/10/1984</span>
                        </div>
                        <div class="col-md-4">
                            <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#editarInfoPerson" data-backdrop="static">
                                <i class="fas fa-user-edit"></i> {{__('Editar')}}</button>
                            <a href="#" class="btn btn-danger btn-block">
                                <i class="fas fa-user-minus"></i> {{__('Eliminar')}}</a>
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
            <div class="card" >
                <div class="card-body">
                        <h5 class="card-title mb-2 text-success" >{{__('Mi Historia')}}
                            <button class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#editarHistoria" data-backdrop="static">
                                <i class="fas fa-edit fa-lg"></i>
                            </button>
                        </h5>
                        <p class="card-text">Soy una persona alegra a la cual le gusta reciclar</p>
                        <p class="card-text"><small class="text-muted">6/22/2020</small></p>
                </div>
            </div>
        </div>
        <div class="col-md-8 my-3">
            <div class="card ">
                    <div class="card-body table-responsive">
                        <h5 class="card-title text-success">{{__('Zonas de recolección')}}
                            <button class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#editarZona" data-backdrop="static">
                                <i class="fas fa-edit fa-lg"></i>
                            </button>
                        </h5>
                        <table class="table table-borderless table-hover table-light mt-2 " id="datosZona">
                            <thead>
                                <tr>
                                    <th class="col-sm-1 col-md-1" scope="col">Municipio</th>
                                    <th class="col-sm-3 col-md-3" scope="col">Comuna</th>
                                    <th class="col-sm-4 col-md-4" scope="col">Sector</th>
                                    <th class="col-sm-2 col-md-2" scope="col">Dias</th>
                                    <th class="col-sm-2 col-md-2" scope="col">Horario</th>
                                  </tr>
                            </thead>
                            <tbody  id="lista">
                                    <tr>
                                        <td>Envigado</td>
                                        <td>La Magnolia</td>
                                        <td>La Magnolia</td>
                                        <td>L-X-V</td>
                                        <td>8:00AM - 10:00AM</td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
              </div>
              <div class="card mt-3 ">
                <div class="card-body table-responsive">
                    <h5 class="card-title text-success">{{__('Residuos de recolección')}}
                        <button class="btn btn-outline-success btn-sm">
                            <i class="fas fa-edit fa-lg"></i>
                        </button>
                    </h5>
                    <table class="table table-borderless table-hover table-light mt-2 " id="datosZona">
                        <thead>
                            <tr>
                                <th class="col-sm-3 col-md-3" scope="col">Material</th>
                                <th class="col-sm-7 col-md-7" scope="col">Submaterial</th>
                                <th class="col-sm-2 col-md-2" scope="col"></th>
                              </tr>
                        </thead>
                        <tbody  id="lista">
                            <tr>
                                <td>Plastico</td>
                                <td>Pet</td>
                                <td>
                                    <button class="btn btn-info" data-toggle="tooltip" data-placement="left" title="Botellas pet">
                                        <i class="fas fa-info-circle"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <th  colspan="5">No hay materiales registrados</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
          </div>
        </div>
    </div>
</div>
<!-- Modal editar Historia-->
<div class="modal fade" id="editarHistoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg modal-dialog-centered" role="document">
      <div class="modal-content ">
      <form action="" method="post">
        <div class="modal-header ">
          <h5 class="modal-title text-success" id="tituloHistoria">
            <i class="fas fa-user-edit"></i> Editar Mi Historia</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body bg-light">
            <div class="container">
                <div class="row  justify-content-center ">
                    <div class="col-md-10">
                        <div class="form-group">
                            <label for="historia">Historia actual</label>
                            <textarea class="form-control"  name="historia" id="historia" cols="20" rows="8" maxlength="500">Soy una persona alegra a la cual le gusta reciclar</textarea>
                            <strong id="infoCounter" class="float-right text-success">N&uacute;mero de caracteres restantes <span  id="contador">500</span></strong>
                        </div>
                        <small id="historiaHelp" class="form-text text-muted">
                            Aquí te damos cinco consejos para que crees la historia de tu reciclador: <br>
                            1. Describe características demográficas como su lugar de procedencia.
                            2. Menciona el tiempo que lleva dedicado a su profesión.
                            3. Menciona una razón de trasfondo diferente a obtener un ingreso económico por la cual tu reciclador realiza su labor.
                            4. Comunicar ¿cómo la comunidad puede aportar a facilitar su trabajo?
                            5.Transmitir el impacto que tiene la ayuda de la comunidad en la vida del reciclador.
                        </small>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">
            <i class="fas fa-save fa-lg"></i> Guardar Cambios</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  <!--End Modal editar Historia-->
  <!-- Modal editar Información Personal-->
<div class="modal fade" id="editarInfoPerson" tabindex="-1" role="dialog" aria-labelledby="info_personal" aria-hidden="true">
    <div class="modal-dialog  modal-lg modal-dialog-centered" role="document">
      <div class="modal-content ">
      <form action="" method="post">
        <div class="modal-header ">
          <h5 class="modal-title text-success" id="tituloHistoria">
            <i class="fas fa-user-edit"></i> Editar Información Personal</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body bg-light">
            <div class="container">
                <div class="row  justify-content-center ">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="nombres"
                                class="col-form-label">Nombre</label>
                                <div class="input-group mb-2">
                                <input type="text" name="nombres" class="form-control @error('nombres') is-invalid @enderror" id="nombres"
                                    placeholder="James David" value="">
                                    <div class="input-group-append">
                                        <span class="btn btn-info"
                                        data-toggle="tooltip" data-placement="top" title="Registra el
                                        primer y segundo nombre (si aplica) de tu reciclador.">
                                        <i class="fas fa-info-circle"></i></span>
                                    </div>
                                    @error('nombres')
                                    <div class="invalid-tooltip">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="apellidos"
                                class="col-form-label">Apellido</label>
                                <div class="input-group mb-2">
                                <input type="text" name="apellidos" class="form-control @error('apellidos') is-invalid @enderror" id="apellidos"
                                    placeholder="Rodriguez Rubio" value="">
                                    <div class="input-group-append">
                                        <span class="btn btn-info"
                                        data-toggle="tooltip" data-placement="top" title="Registra el
                                        apellido teniendo en cuenta el uso de mayúsculas y buena
                                        ortografía.">
                                        <i class="fas fa-info-circle"></i></span>
                                    </div>
                                    @error('apellidos')
                                    <div class="invalid-tooltip">{{ $message }}</div>
                                @enderror
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="apodo"
                                class="col-form-label">Apodo</label>
                                <div class="input-group mb-2">
                                <input type="text" name="apodo" class="form-control @error('apodo') is-invalid @enderror" id="apodo"
                                    placeholder="James" value="">
                                    <div class="input-group-append">
                                        <span class="btn btn-info"
                                        data-toggle="tooltip" data-placement="top" title="Si tu reciclador prefiere ser llamado por su apodo por favor ingresa el apodo correspondiente.">
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
                            <label for="fecha_nacimiento"
                                class=" col-form-label">Fecha de Nacimiento</label>
                                <input type="date" name="fecha_nacimiento" class="form-control @error('fecha_nacimiento') is-invalid @enderror" id="fecha_nacimiento"
                                    placeholder="28"
                                    min="1900-01-01" max="2000-01-01" value="">
                                    @error('fecha_nacimiento')
                                    <div class="invalid-tooltip">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="form-group ">
                            <label for="edad"
                                class="col-form-label">Edad</label>
                                <input type="number" name="edad" class="form-control @error('edad') is-invalid @enderror" id="edad"
                                    placeholder="28" min="20" max="100" value="">
                                    @error('edad')
                                    <div class="invalid-tooltip">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="celular"
                                class="col-form-label">Celular</label>
                                <div class="input-group mb-2">
                                <input type="text" name="celular" class="form-control  @error('celular') is-invalid @enderror" id="celular"
                                    placeholder="3102020540" value="">
                                    <div class="input-group-append">
                                        <span class="btn btn-info"
                                        data-toggle="tooltip" data-placement="top" title="Registra los diez dígitos del número celular de tu reciclador sin espacios intermedios. P. ej. 3041112233">
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
          <button type="submit" class="btn btn-success">
            <i class="fas fa-save fa-lg"></i> Guardar Cambios</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
          <h5 class="modal-title text-success" id="tituloHistoria">
            <i class="fas fa-edit"></i> Editar Zonas de recolecci&oacute;n</h5>
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
                                    <th class="col-sm-4 col-md-3" scope="col">Sector</th>
                                    <th class="col-sm-2 col-md-2" scope="col">Dias</th>
                                    <th class="col-sm-2 col-md-2" scope="col">Horario</th>
                                    <th class="col-sm-2 col-md-1" scope="col"></th>
                                    <th class="col-sm-2 col-md-1" scope="col"></th>
                                  </tr>
                            </thead>
                            <tbody  id="lista">
                                 <form action="" method="post">
                                    <tr>
                                        <td>Envigado</td>
                                        <td>La Magnolia</td>
                                        <td>La magnolia</td>
                                        <td>L-X-V</td>
                                        <td>8:00AM - 10:00AM</td>
                                        <td>
                                            <button type="submit" class="btn btn-primary">
                                                <i class="fas fa-save"></i>
                                             </button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-danger">
                                                <i class="fas fa-trash-alt"></i>
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
          <button type="submit" class="btn btn-success">
            <i class="fas fa-save fa-lg"></i> Guardar Cambios</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!--End Modal editar Zona de recolección-->
@endsection

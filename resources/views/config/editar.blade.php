@extends('layouts.app')

@section('content')
<div class="card shadow">
    <div class="card-header">
        <div class="py-2 text-center text-success" style="height: 20%">
            <h1>Configuración</h1>
            <!-- <h1>{{ __('Edit the corporation data') }}</h1> -->

            <p class="lead text-dark">Aquí podras editar la información referente a los datos principales de la corporación.</p>
            <!-- <p class="lead">{{ __('Push the button Edit when done editing') }}</p> -->
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <div class=" border-solid border p-2">
                    <h2 class="text-success text-center">Sobre la corporación</h2>
                    <div class="d-flex justify-content-center">
                        <table class="border-solid mb-1 mt-5" style="width: 100%">
                            <thead class="border-solid border-bottom">
                                <th class="col-4 text-center"><label for="" class="lead font-weight-bold">Imagen de
                                        perfil</label></th>
                                <th class="col-4">
                                    <div class="text-center mb-3">
                                        <div class="border rounded-circle overflow-hidden border-success"
                                            style="height: 100px; width: 100px; margin-left: auto; margin-right: auto">
                                            <img src="{{url("/Arreciclar.png")}}" alt="" class="w-100">
                                        </div>
                                    </div>
                                </th>
                                <th class="col-4 text-center"><a href="" data-toggle="modal" data-target="#modalFoto"
                                        class="text-success font-weight-normal btn btn-outline-success ml-5"><i class="fas fa-edit fa-lg"></i></a></th>
                            </thead>
                            <tbody class="">
                                <tr class="text-center border-bottom border-solid">
                                    <td><label for="" class="lead font-weight-bold">Nombre corporación</label></td>
                                    <td><label for="" class="lead">Arreciclar</label></td>
                                    <td><a href="" data-toggle="modal" data-target="#modalNombreC"
                                            class="text-success btn btn-outline-success ml-5"><i class="fas fa-edit fa-lg"></i></a></td>
                                </tr>
                                <tr class="text-center border-bottom border-solid p-5">
                                    <td><label for="" class="lead font-weight-bold">Correo electrónico</label></td>
                                    <td><label for="" class="lead">arreciclar@impacta.com</label></td>
                                    <td><button href="" data-toggle="modal" data-target="#modalCorreo" class="text-success btn btn-outline-success ml-5"><i class="fas fa-edit fa-lg"></i></button>
                                    </td>
                                </tr>
                                <tr class="text-center border-bottom border-solid p-5">
                                    <td><label for="" class="lead font-weight-bold">Número de documento</label></td>
                                    <td><label for="" class="lead">NIT 901007006</label></td>
                                    <td><a href="" data-toggle="modal" data-target="#modalDocumento"
                                            class="text-success btn btn-outline-success ml-5"><i class="fas fa-edit fa-lg"></i></a></td>
                                </tr>
                                <tr class="text-center border-bottom border-solid p-5">
                                    <td><label for="" class="lead font-weight-bold">Teléfono</label></td>
                                    <td><label for="" class="lead">(4) 2322668</label></td>
                                    <td><a href="" data-toggle="modal" data-target="#modalTelefono"
                                            class="text-success btn btn-outline-success ml-5"><i class="fas fa-edit fa-lg"></i></a></td>
                                </tr>
                                <tr class="text-center border-bottom border-solid p-5">
                                    <td><label for="" class="lead font-weight-bold">Localidad</label></td>
                                    <td><label for="" class="lead">Medellin, Barrio Colombia</label></td>
                                    <td><a href="" data-toggle="modal" data-target="#modalLocalidad"
                                            class="text-success btn btn-outline-success ml-5"><i class="fas fa-edit fa-lg"></i></a></td>
                                </tr>
                                <tr class="text-center">
                                    <td><label for="" class="lead font-weight-bold">Dirección</label></td>
                                    <td><label for="" class="lead">Calle 26 # 44 - 27</label></td>
                                    <td><a href="" data-toggle="modal" data-target="#modalDireccion"
                                            class="text-success btn btn-outline-success ml-5"><i class="fas fa-edit fa-lg"></i></a></td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
                <div class="row border-solid p-2">
                    <div class="col-12">
                        <h2 class="text-center text-success">Jornada Laboral</h2>
                        <table class="w-100 text-center border border-solid mb-3 lead">
                            <thead>
                                <th class="col-4">Día de la semana</th>
                                <th class="col-4">Horario</th>
                                <th class="col-4"><a href="" data-toggle="modal" data-target="#modalHorario" class="text-success btn btn-outline-success ml-5"><i class="fas fa-edit fa-lg"></i></a></th>
                            </thead>
                            <tbody id="">
                                <tr>
                                    <td>L M X J V</td> 
                                    <td>7:00AM - 5:00PM</td> 
                                </tr>
                                <tr>
                                    <td>S</td> 
                                    <td>8:00AM - 12:00PM</td> 
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="border-solid border mt-3 p-2">
                    <h2 class="text-success text-center">Persona de contacto</h2>
                    <table class="w-100 mt-3">
                        <thead>
                            <th class="col-4 text-center">
                            </th>
                            <th class="col-4"></th>
                            <th class="col-4"></th>
                        </thead>
                        <tbody>
                            <tr class="text-center border-bottom border-solid p-5">
                                <td><label for="" class="lead font-weight-bold">Nombre</label></td>
                                <td><label for="" class="lead">Paula Córdoba</label></td>
                                <td><a href="" data-toggle="modal" data-target="#modalNombreR"
                                        class="text-success btn btn-outline-success ml-5"><i class="fas fa-edit fa-lg"></i></a></td>
                            </tr>
                            <tr class="text-center">
                                <td><label for="" class="lead font-weight-bold">Cargo</label></td>
                                <td><label for="" class="lead">Directora de proyecto</label></td>
                                <td><a href="" data-toggle="modal" data-target="#modalCargo" class="text-success btn btn-outline-success ml-5"><i class="fas fa-edit fa-lg"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Modal editar horario --}}

<div class="modal fade bd-example-modal-lg" id="modalHorario" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title text-success">Editar jornada laboral</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row mb-4">
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
                                    <div class="custom-control custom-checkbox d-inline mr-5">
                                        <input type="checkbox" class="custom-control-input" id="sabado"
                                            value="S">
                                        <label class="custom-control-label" for="sabado">Sábado</label>
                                    </div>
                                    <div class="custom-control custom-checkbox d-inline ml-4">
                                        <input type="checkbox" class="custom-control-input" id="domingo"
                                            value="D">
                                        <label class="custom-control-label" for="domingo">Domingo</label>
                                    </div>
                                    <button class="btn w-100 btn-outline-primary mt-4" onclick="agregarZona()">Adicionar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="w-100 text-center border border-solid mb-3">
                        <thead>
                            <th class="col-5">Día de la semana</th>
                            <th class="col-5">Horario</th>
                            <th class="col-1"></th>
                        </thead>
                        <tbody id="listaZonas">
                            <tr>
                                <td>L M X J V</td> 
                                <td>7:00AM - 5:00PM</td> 
                                <td><button class="btn btn-danger" onclick="eliminarZona()"><i class="fas fa-trash-alt"></i></button></td>
                            </tr>
                            <tr>
                                <td>S</td> 
                                <td>8:00AM - 12:00PM</td> 
                                <td><button class="btn btn-danger" onclick="eliminarZona()"><i class="fas fa-trash-alt"></i></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Regresar</button>
                <button type="button" class="btn btn-success" data-target="#detallesModal1" data-dismiss="modal" data-toggle="modal"><i class="fas fa-save fa-lg"></i> Guardar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Foto-->
<div class="modal fade" id="modalFoto" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title text-success">Editar imagen de perfil</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="text-center">
                        <div class="border rounded-circle overflow-hidden border-success"
                            style="height: 250px; width: 250px; margin-left: auto; margin-right: auto">
                        <img src="{{url("Arreciclar.png")}}" alt="" class="w-100">
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
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Regresar</button>
                <button type="button" class="btn btn-success" data-target="#detallesModal1" data-dismiss="modal" data-toggle="modal"><i class="fas fa-save fa-lg"></i> Guardar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Nombre Corp-->
<div class="modal fade" id="modalNombreC" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title text-success">Editar nombre corporación</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group-row">
                    <label for="nombre" class="lead font-weight-bold">Nombre corporación</label>
                    <input type="text" name="nombre" class="form-control" placeholder="Ejm: Nuevo Reciclando Ando" value="Arreciclar">
                    <small>Ingrese el nuevo nombre de la corporación.</small>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Regresar</button>
                <button type="button" class="btn btn-success" data-target="#detallesModal1" data-dismiss="modal" data-toggle="modal"><i class="fas fa-save fa-lg"></i> Guardar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Nombre Corp-->
<div class="modal fade" id="modalCorreo" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title text-success">Editar correo electrónico</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group-row">
                    <label for="nombre" class="lead font-weight-bold">Correo electrónico</label>
                    <input type="text" name="nombre" class="form-control" placeholder="Ejm: NuevoCorreo@Nuevocorreo.com" value="arreciclar@impacta.com">
                    <small>Ingrese el nuevo correo de la corporación.</small>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Regresar</button>
                <button type="button" class="btn btn-success" data-target="#detallesModal1" data-dismiss="modal" data-toggle="modal"><i class="fas fa-save fa-lg"></i> Guardar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Documento-->
<div class="modal fade" id="modalDocumento" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title text-success">Editar documento</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group-row">
                    <label for="nombre" class="lead font-weight-bold">Tipo de documento</label>
                    <select name="" class="form-control" id="">
                        <option value="">NIT</option>
                        <option value="">C.C.</option>
                    </select>
                    <label for="nombre" class="lead font-weight-bold">Numero de documento</label>
                    <input type="text" name="nombre" class="form-control" placeholder="Ejm: 1173 567 434" value="901007006">
                    <small>Ingrese el nuevo documento de la corporación.</small>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Regresar</button>
                <button type="button" class="btn btn-success" data-target="#detallesModal1" data-dismiss="modal" data-toggle="modal"><i class="fas fa-save fa-lg"></i> Guardar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Telefono-->
<div class="modal fade" id="modalTelefono" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title text-success">Editar teléfono</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group-row">
                    <label for="nombre" class="lead font-weight-bold">Numero de teléfono</label>
                    <input type="text" name="nombre" class="form-control" placeholder="Ejm: (4) 312 34 53" value="(4) 2322668">
                    <small>Ingrese el nuevo teléfono de la corporación.</small>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Regresar</button>
                <button type="button" class="btn btn-success" data-target="#detallesModal1" data-dismiss="modal" data-toggle="modal"><i class="fas fa-save fa-lg"></i> Guardar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalDireccion" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title text-success" id="favoritesModalLabel">Editar dirección</h2>
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <p class="lead">Selecciona los datos de la nueva dirección, verás como se va construyendo tu dirección.
                        Ejm: Calle 7A sur #42D oeste 70 AP 306
                    </p>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group  mx-auto w-100">
                                <label for="name">Tipo de vía 1</label>
                                <select class="form-control" name="type_doc" id="type"  required autocomplete="type_doc" autofocus>
                                    <option value="1">Calle</option>
                                    <option value="0">Diagonal</option>
                                    <option value="0">Transversal</option>
                                    <option value="0">Carrera</option>
                                    <option value="0">Avenida</option>
                                </select>
                            </div>
                            <div class="form-group  mx-auto w-100">
                                <label for="name"># Nro vía 2</label>
                                <input type="text" class="form-control" placeholder="Ejm: 42" value="44">
                            </div>
                        </div>
                        <div class="col-2">
                            
                            <div class="form-group w-100">
                                <label for="name">Nro vía 1</label>
                                <input class="form-control" name="num_doc_corp"  required autocomplete="num_doc_corp" autofocus placeholder="Ejm: 7" value="26">
                                @error('numd_doc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group w-100">
                                <label for="name">Letra vía 2</label>
                                <select name="" id="" class="form-control">
                                    <option value=""></option>
                                    <option value="">A</option>
                                    <option value="">AA</option>
                                    <option value="">AB</option>
                                    <option value="">AD</option>
                                    <option value="">AE</option>
                                    <option value="">AF</option>
                                    <option value="">B</option>
                                    <option value="">BA</option>
                                    <option value="">BB</option>
                                    <option value="">BC</option>
                                    <option value="">BD</option>
                                    <option value="">BE</option>
                                    <option value="">BF</option>
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group w-100">
                                <label for="name">Letra vía 1</label>
                                <select name="" id="" class="form-control">
                                    <option value=""></option>
                                    <option value="">A</option>
                                    <option value="">AA</option>
                                    <option value="">AB</option>
                                    <option value="">AD</option>
                                    <option value="">AE</option>
                                    <option value="">AF</option>
                                    <option value="">B</option>
                                    <option value="">BA</option>
                                    <option value="">BB</option>
                                    <option value="">BC</option>
                                    <option value="">BD</option>
                                    <option value="">BE</option>
                                    <option value="">BF</option>
                                    <option value=""></option>
                                </select>
                            </div>
                            <div class="form-group w-100">
                                <label for="name">Cardinalidad vía 2</label>
                                <select class="form-control" name="type_doc" id="type"  required autocomplete="type_doc" autofocus>
                                    <option value=""></option>
                                    <option value="Comuna 1">Norte</option>
                                    <option value="Comuna 2">Sur</option>
                                    <option value="Comuna 3">Este</option>
                                    <option value="Comuna 4">Oeste</option>
                                    <option value="No aplica">No aplica</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3">

                            <div class="form-group w-100">
                                <label for="name">Cardinalidad vía 1</label>
                                <select class="form-control" name="type_doc" id="type"  required autocomplete="type_doc" autofocus>
                                    <option value=""></option>
                                    <option value="Comuna 1">Norte</option>
                                    <option value="Comuna 2">Sur</option>
                                    <option value="Comuna 3">Este</option>
                                    <option value="Comuna 4">Oeste</option>
                                    <option value="No aplica">No aplica</option>
                                </select>
                            </div>
                            <div class="form-group w-100">
                                <label for="name">- Nro</label>
                                <input type="text" class="form-control" placeholder=" Ejm: 70" value="27">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="name">Complemento</label>
                            <div class="form-group w-100 d-flex">
                                <select class="form-control" name="type_doc" id="type"  required autocomplete="type_doc" autofocus>
                                    <option value=""></option>
                                    <option value="Comuna 1">Apartamento</option>
                                    <option value="Comuna 2">Edificio</option>
                                    <option value="Comuna 3">Casa</option>
                                    <option value="Comuna 4">Kilometro</option>
                                    <option value="Comuna 4">Bloque</option>
                                    <option value="Comuna 4">Entrada</option>
                                    <option value="Comuna 4">Estación</option>
                                    <option value="Comuna 4">Lote</option>
                                    <option value="Comuna 4">Oficina</option>
                                    <option value="No aplica">No aplica</option>
                                </select>
                                <input class="form-control ml-2" name="num_doc_corp" required autocomplete="num_doc_corp" autofocus placeholder="Ejm: Edificio 'El edificio' interior 504 ">
                                @error('numd_doc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer pb-0 pt-2 mb-0">
                <span class="pull-right"><button type="button" class="btn btn-danger"
                    data-dismiss="modal">Regresar</button></span>
            <a data-dismiss="modal" data-toggle="modal" data-target="#detallesModal1">
                <button type="button" class="btn btn-success"><i class="fas fa-save fa-lg"></i> Guardar</button>
            </a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalLocalidad" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title text-success" id="favoritesModalLabel">Editar localidad</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group  mx-auto w-100">
                                <label for="name">Municipio</label>
                                <select class="form-control" name="type_doc" id="type"  required autocomplete="type_doc" autofocus>
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
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group  mx-auto w-100">
                                <label for="name">Comuna</label>
                                <select class="form-control" name="type_doc" id="type"  required autocomplete="type_doc" autofocus>
                                    <option value="">Comuna 14</option>
                                    <option value="Comuna 1">Comuna 1</option>
                                    <option value="Comuna 2">Comuna 2</option>
                                    <option value="Comuna 3">Comuna 3</option>
                                    <option value="Comuna 4">Comuna 4</option>
                                    <option value="No aplica">No aplica</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group  mx-auto w-100">
                                <label for="name">Barrio</label>
                                <select class="form-control" name="type_doc" id="type"  required autocomplete="type_doc" autofocus>
                                    <option value="">Barrio Colombia</option>
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
                    </div>
                </div>
            </div>
            <div class="modal-footer pb-0 pt-2 mb-0">
                <span class="pull-right"><button type="button" class="btn btn-danger"
                    data-dismiss="modal">Regresar</button></span>
            <a data-dismiss="modal" data-toggle="modal" data-target="#detallesModal1">
                <button type="button" class="btn btn-success" data-target="#detallesModal1" data-dismiss="modal" data-toggle="modal"><i class="fas fa-save fa-lg"></i> Guardar</button>
            </a>
            </div>
        </div>
    </div>
</div>

<!-- Modal NombreRepresentante-->
<div class="modal fade" id="modalNombreR" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title text-success">Editar nombre</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group-row">
                    <label for="nombre" class="lead font-weight-bold">Nombre</label>
                    <input type="text" name="nombre" class="form-control" placeholder="Ejm: Luis Felipe" value="Paula">
                    <label for="nombre" class="lead font-weight-bold">Apellido</label>
                    <input type="text" name="nombre" class="form-control" placeholder="Ejm: Rodriguez" value="Córdoba">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Regresar</button>
                <button type="button" class="btn btn-success" data-target="#detallesModal1" data-dismiss="modal" data-toggle="modal"><i class="fas fa-save fa-lg"></i> Guardar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalCargo" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title text-success">Editar cargo</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group-row">
                    <label for="nombre" class="lead font-weight-bold">Cargo</label>
                    <input type="text" name="nombre" class="form-control" placeholder="Ejm: Gerente" value="Directora de proyecto">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Regresar</button>
                <button type="button" class="btn btn-success" data-target="#detallesModal1" data-dismiss="modal" data-toggle="modal"><i class="fas fa-save fa-lg"></i> Guardar</button>
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
    var contador_zonas = 2;
    function eliminarZona(){
        var lista_zonas = document.getElementById("listaZonas");
        if (contador_zonas==1) {
            contador_zonas = 0;
            lista_zonas.removeChild(lista_zonas.childNodes[lista_zonas.childNodes.length-1]);
            var nodo_lista = document.createElement("TR");
            var nodo_lista2 = document.createElement("TH");
            var residuo_lista = document.createTextNode("No hay horarios seleccionados");
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
        var nodo_columna2 = document.createElement("TD");
        var nodo_columna3 = document.createElement("TD");
        var nodo_columna4 = document.createElement("TD");
        var boton_eliminar = document.createElement("BUTTON")
        var nodo_imagen = document.createElement("I")
        boton_eliminar.setAttribute("class","btn btn-danger");
        boton_eliminar.setAttribute("onclick","eliminarZona()");
        boton_eliminar.appendChild(nodo_imagen);
        nodo_imagen.setAttribute("class","fas fa-trash-alt");
        // var nodo_texto1 = document.createTextNode(sector);
        var nodo_texto2 = document.createTextNode(horario);
        var nodo_texto3 = document.createTextNode(dias);
        nodo_columna3.appendChild(nodo_texto3);
        nodo_columna2.appendChild(nodo_texto2);
        nodo_columna4.appendChild(boton_eliminar);
        nodo_fila.appendChild(nodo_columna3);
        nodo_fila.appendChild(nodo_columna2);
        nodo_fila.appendChild(nodo_columna4);
        tabla_sectores.appendChild(nodo_fila);
        contador_zonas += 1;
    }
</script>


@endsection

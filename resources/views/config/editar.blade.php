@extends('layouts.app')

@section('content')
<div class="card shadow">
    <div class="card-header">
        <div class="py-2 text-center text-success" style="height: 20%">
            <h1>{{ __('Editar los datos de la corporación') }}</h1>
            <!-- <h1>{{ __('Edit the corporation data') }}</h1> -->

            <p class="lead text-dark">{{ __('Presione el botón Editar cuando termine de editar') }}</p>
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
                                            <i class="fas fa-user-tie"
                                                style="width: 100% !important; height: 100% !important;"></i>
                                        </div>
                                    </div>
                                </th>
                                <th class="col-4 text-center"><a href="" data-toggle="modal" data-target="#modalFoto"
                                        class="text-success font-weight-normal btn btn-outline-success ml-5"><i class="fas fa-edit fa-lg"></i></a></th>
                            </thead>
                            <tbody class="">
                                <tr class="text-center border-bottom border-solid">
                                    <td><label for="" class="lead font-weight-bold">Nombre corporación</label></td>
                                    <td><label for="" class="lead">Reciclando Ando</label></td>
                                    <td><a href="" data-toggle="modal" data-target="#modalNombreC"
                                            class="text-success btn btn-outline-success ml-5"><i class="fas fa-edit fa-lg"></i></a></td>
                                </tr>
                                <tr class="text-center border-bottom border-solid p-5">
                                    <td><label for="" class="lead font-weight-bold">Correo electronico</label></td>
                                    <td><label for="" class="lead">ReciclandoAndo@reciclar.com</label></td>
                                    <td><button href="" data-toggle="modal" data-target="#modalCorreo" class="text-success btn btn-outline-success ml-5"><i class="fas fa-edit fa-lg"></i></button>
                                    </td>
                                </tr>
                                <tr class="text-center border-bottom border-solid p-5">
                                    <td><label for="" class="lead font-weight-bold">Número de documento</label></td>
                                    <td><label for="" class="lead">123 456 78910</label></td>
                                    <td><a href="" data-toggle="modal" data-target="#modalDocumento"
                                            class="text-success btn btn-outline-success ml-5"><i class="fas fa-edit fa-lg"></i></a></td>
                                </tr>
                                <tr class="text-center border-bottom border-solid p-5">
                                    <td><label for="" class="lead font-weight-bold">Teléfono</label></td>
                                    <td><label for="" class="lead">(4) 123 45 67</label></td>
                                    <td><a href="" data-toggle="modal" data-target="#modalTelefono"
                                            class="text-success btn btn-outline-success ml-5"><i class="fas fa-edit fa-lg"></i></a></td>
                                </tr>
                                <tr class="text-center border-bottom border-solid p-5">
                                    <td><label for="" class="lead font-weight-bold">Localidad</label></td>
                                    <td><label for="" class="lead">Envigado, Villagrande</label></td>
                                    <td><a href="" data-toggle="modal" data-target="#modalLocalidad"
                                            class="text-success btn btn-outline-success ml-5"><i class="fas fa-edit fa-lg"></i></a></td>
                                </tr>
                                <tr class="text-center">
                                    <td><label for="" class="lead font-weight-bold">Dirección</label></td>
                                    <td><label for="" class="lead">Calle 7A sur #42D oeste 70 AP 306</label></td>
                                    <td><a href="" data-toggle="modal" data-target="#modalDireccion"
                                            class="text-success btn btn-outline-success ml-5"><i class="fas fa-edit fa-lg"></i></a></td>
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
                                <td><label for="" class="lead">Edwin Cardona</label></td>
                                <td><a href="" data-toggle="modal" data-target="#modalNombreR"
                                        class="text-success btn btn-outline-success ml-5"><i class="fas fa-edit fa-lg"></i></a></td>
                            </tr>
                            <tr class="text-center">
                                <td><label for="" class="lead font-weight-bold">Cargo</label></td>
                                <td><label for="" class="lead">Gerente</label></td>
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
                            <i class="fas fa-user-tie" style="width: 100% !important; height: 100% !important;"></i>
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
                <button type="button" class="btn btn-success" data-target="#detallesModal1" data-dismiss="modal" data-toggle="modal">Guardar cambios</button>
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
                    <input type="text" name="nombre" class="form-control" placeholder="Ejm: Nuevo Reciclando Ando">
                    <small>Ingrese el nuevo nombre de la corporación.</small>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Regresar</button>
                <button type="button" class="btn btn-success" data-target="#detallesModal1" data-dismiss="modal" data-toggle="modal">Guardar cambios</button>
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
                <h2 class="modal-title text-success">Editar correo electronico</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group-row">
                    <label for="nombre" class="lead font-weight-bold">Correo electronico</label>
                    <input type="text" name="nombre" class="form-control" placeholder="Ejm: NuevoCorreo@Nuevocorreo.com">
                    <small>Ingrese el nuevo correo de la corporación.</small>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Regresar</button>
                <button type="button" class="btn btn-success" data-target="#detallesModal1" data-dismiss="modal" data-toggle="modal">Guardar cambios</button>
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
                        <option value="">C.C.</option>
                        <option value="">NIT</option>
                    </select>
                    <label for="nombre" class="lead font-weight-bold">Numero de documento</label>
                    <input type="text" name="nombre" class="form-control" placeholder="Ejm: 1173 567 434">
                    <small>Ingrese el nuevo documento de la corporación.</small>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Regresar</button>
                <button type="button" class="btn btn-success" data-target="#detallesModal1" data-dismiss="modal" data-toggle="modal">Guardar cambios</button>
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
                    <input type="text" name="nombre" class="form-control" placeholder="Ejm: (4) 312 34 53">
                    <small>Ingrese el nuevo teléfono de la corporación.</small>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Regresar</button>
                <button type="button" class="btn btn-success" data-target="#detallesModal1" data-dismiss="modal" data-toggle="modal">Guardar cambios</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalDireccion" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title text-success" id="favoritesModalLabel">Editar la dirección de la corporación</h2>
                
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
                                <input type="text" class="form-control" placeholder="Ejm: 42">
                            </div>
                        </div>
                        <div class="col-2">
                            
                            <div class="form-group w-100">
                                <label for="name">Nro vía 1</label>
                                <input class="form-control" name="num_doc_corp"  required autocomplete="num_doc_corp" autofocus placeholder="Ejm: 7">
                                @error('numd_doc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group w-100">
                                <label for="name">Letra vía 2</label>
                                <select name="" id="" class="form-control">
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
                                    <option value="Comuna 1">Norte</option>
                                    <option value="Comuna 2">Sur</option>
                                    <option value="Comuna 3">Este</option>
                                    <option value="Comuna 4">Oeste</option>
                                    <option value="No aplica">No aplica</option>
                                </select>
                            </div>
                            <div class="form-group w-100">
                                <label for="name">- Nro</label>
                                <input type="text" class="form-control" placeholder=" Ejm: 70">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="name">Complemento</label>
                            <div class="form-group w-100 d-flex">
                                <select class="form-control" name="type_doc" id="type"  required autocomplete="type_doc" autofocus>
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
                <button type="button" class="btn btn-success">Confirmar</button>
            </a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalLocalidad" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title text-success" id="favoritesModalLabel">Editar la localidad de la corporación</h2>
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
                <button type="button" class="btn btn-success" data-target="#detallesModal1" data-dismiss="modal" data-toggle="modal">Guardar cambios</button>
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
                <h2 class="modal-title text-success">Editar nombre del representante</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group-row">
                    <label for="nombre" class="lead font-weight-bold">Nombre</label>
                    <input type="text" name="nombre" class="form-control" placeholder="Ejm: Luis Felipe">
                    <small>Ingrese el nombre del nuevo representante.</small><br>
                    <label for="nombre" class="lead font-weight-bold">Apellido</label>
                    <input type="text" name="nombre" class="form-control" placeholder="Ejm: Rodriguez">
                    <small>Ingrese el apellido del nuevo representante.</small>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Regresar</button>
                <button type="button" class="btn btn-success" data-target="#detallesModal1" data-dismiss="modal" data-toggle="modal">Guardar cambios</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalCargo" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title text-success">Editar cargo del representante</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group-row">
                    <label for="nombre" class="lead font-weight-bold">Cargo</label>
                    <input type="text" name="nombre" class="form-control" placeholder="Ejm: Gerente">
                    <small>Ingrese el nuevo cargo del representante.</small>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Regresar</button>
                <button type="button" class="btn btn-success" data-target="#detallesModal1" data-dismiss="modal" data-toggle="modal">Guardar cambios</button>
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


@endsection

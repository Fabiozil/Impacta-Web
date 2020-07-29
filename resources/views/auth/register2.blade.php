@extends('layouts.app2')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card shadow">
                <div class="card-header">
                    <div class="py-3">
                        <h1 class="text-success text-center">Bienvenido a Reciclapp</h1>
                        <p class="lead text-center">Aquí podrás contar historias sobre sus recicladores, compartir el desempeño ambiental de su gestión y crear una comunidad entre ciudadanos y recicladores.</p>
                    </div>
                </div>
                <div class="card-body">
                        <div class="form-group mx-auto w-75">
                            <div class="container">
                                <div class="py-5 subtitle text-center mt-2">
                                    <h2 class="text-success">Perfil del representante</h2>
                                </div>
                                <div class="text-center">
                                    <div class="border rounded-circle overflow-hidden border-success"
                                        style="height: 250px; width: 250px; margin-left: auto; margin-right: auto">
                                        <i class="fas fa-user-tie"
                                            style="width: 100% !important; height: 100% !important;"></i>
                                    </div>
                                    <label class="mt-2">Carga una foto de perfil para la corporación.</label>
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
                            <label for="name">{{__('Nombre representante')}}</label>
                            <input class="form-control" name="name_rep" required autocomplete="name_rep" autofocus placeholder="Ejm: Juanito ">
                            @error('string')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <small id="emailHelp" class="form-text text-muted">
                                Ingresa el nombre del representante legal con las iniciales mayúsculas.
                            </small>
                        </div>
                        <div class="form-group  mx-auto w-75 mt-3">
                            <label for="name">{{__('Apellido representante')}}</label>
                            <input class="form-control" name="lastname" required autocomplete="name" autofocus placeholder="Ejm: García">
                            @error('string')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <small id="emailHelp" class="form-text text-muted">
                                Ingresa el apellido del representante legal con las iniciales mayúsculas.
                            </small>                      
                        </div>
                        <div class="form-group  mx-auto w-75 mt-3">
                            <label for="name">{{__('Tipo de documento')}}</label>
                            <select class="form-control" name="type_doc" id="type" required autocomplete="type_doc" autofocus>
                                <option value="1">C.C.</option>
                                <option value="0">NIT</option>
                            </select>
                            <small id="emailHelp" class="form-text text-muted">
                                Ingresa el tipo de documento del representante legal.
                            </small>
                        </div>
                        <div class="form-group  mx-auto w-75 mt-3">
                            <label for="name">{{__('Número de documento')}}</label>
                            <input class="form-control" name="num_doc" required autocomplete="num_doc" autofocus placeholder="Ejm:  1036965587">
                            @error('num_doc')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <small id="emailHelp" class="form-text text-muted">
                                Ingresa el número de documento del representante legal.
                            </small>
                        </div>
                        <div class="form-group  mx-auto w-75 mt-3">
                            <label for="name">{{__('Cargo')}}</label>
                            <input class="form-control" name="position" required autocomplete="position" autofocus placeholder="Ejm: Gerente">
                            @error('string')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <small id="emailHelp" class="form-text text-muted">
                                Ingresa el cargo del representante legal en la corporación.
                            </small>
                        </div>
                        <div class="form-group  mx-auto w-75 mt-3">
                            <label for="name">{{__('Teléfono')}}</label>
                            <input class="form-control"  name="phone" required autocomplete="phone" autofocus placeholder="Ejm: 5250405 ">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <small id="emailHelp" class="form-text text-muted">
                                Ingresa el número teléfono o celular del representante legal.
                            </small>
                        </div>
                        <h2 class="col-md-12 text-md-center mb-3 mt-4 text-success">Sobre la corporación</h2>
                        <div class="form-group  mx-auto w-75 mt-3">
                            <label for="name">{{__('Tipo de documento')}}</label>
                            <select class="form-control" name="type_doc" id="type" required autocomplete="type_doc" autofocus>
                                <option value="1">C.C.</option>
                                <option value="0">NIT</option>
                            </select>
                            <small id="emailHelp" class="form-text text-muted">
                                Ingresa el tipo de documento del representante legal.
                            </small>
                        </div>
                        <div class="form-group  mx-auto w-75 mt-3">
                            <label for="name">{{__('Número documento corporación')}}</label>
                            <input class="form-control" name="num_doc_corp" required autocomplete="num_doc_corp" autofocus placeholder="Ejm: 10258555">
                            @error('numd_doc')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <small id="emailHelp" class="form-text text-muted">
                                Ingresa el documento de la corporación.
                            </small>
                        </div>
                        <div class="form-group  mx-auto w-75 mt-3">
                            <label for="sector">{{__('Sector')}}</label>
                            <div id="map" class="w-100" style="border:2px solid; height:200px">
                            <img src="{{url("/5.png")}}" alt="" class="w-100 h-100">
                            </div>
                            <small id="emailHelp" class="form-text text-muted">
                                Ingresa la ubicación de la corporacion. O, usa el <a href="" class="text-decoration-none text-primary" data-toggle="modal" data-target="#detallesModal">formulario de dirección</a> si no encuentras tu ubicación en el mapa 
                            </small>
                        </div>
                            <div class="d-flex justify-content-end">
                            <a href="{{url("/register")}}">
                                    <button class="btn btn-danger">
                                        Regresar
                                    </button>
                                </a>
                                 <a href="{{url("/home")}}">
                                    <button  class="btn btn-success ml-2">
                                        Comenzar
                                    </button>
                                </a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="detallesModal" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title text-success" id="favoritesModalLabel">Ingreso de dirección de la corporación</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group  mx-auto w-100">
                                <label for="name">Municipio</label>
                                <select class="form-control" name="type_doc" id="type"  required autocomplete="type_doc" autofocus>
                                    <option value="1">C.C.</option>
                                    <option value="0">NIT</option>
                                </select>
                            </div>
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
                                <label for="name">Tipo de vía 2</label>
                                <select class="form-control" name="type_doc" id="type"  required autocomplete="type_doc" autofocus>
                                    <option value="1">Calle</option>
                                    <option value="0">Diagonal</option>
                                    <option value="0">Transversal</option>
                                    <option value="0">Carrera</option>
                                    <option value="0">Avenida</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group  mx-auto w-100">
                                <label for="name">Comuna</label>
                                <select class="form-control" name="type_doc" id="type"  required autocomplete="type_doc" autofocus>
                                    <option value="1">No aplica</option>
                                    <option value="0">NIT</option>
                                </select>
                            </div>
                            <div class="form-group w-100">
                                <label for="name">Numero de vía 2</label>
                                <input class="form-control" name="num_doc_corp"  required autocomplete="num_doc_corp" autofocus placeholder="Ejm: 24">
                                @error('numd_doc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group w-100">
                                <label for="name">Numero de vía 2</label>
                                <input class="form-control" name="num_doc_corp"  required autocomplete="num_doc_corp" autofocus placeholder="Ejm: 24">
                                @error('numd_doc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group  mx-auto w-100">
                                <label for="name">Barrio</label>
                                <select class="form-control" name="type_doc" id="type"  required autocomplete="type_doc" autofocus>
                                    <option value="1">C.C.</option>
                                    <option value="0">NIT</option>
                                </select>
                            </div>
                            <div class="form-group w-100">
                                <label for="name">Complemento de la vía 1</label>
                                <input class="form-control" name="num_doc_corp"  required autocomplete="num_doc_corp" autofocus placeholder="Ejm: 43 sur">
                                @error('numd_doc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group w-100">
                                <label for="name">Complemento de la vía 2</label>
                                <input class="form-control" name="num_doc_corp"  required autocomplete="num_doc_corp" autofocus placeholder="Ejm: 43 sur">
                                @error('numd_doc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group w-100">
                                <label for="name">Información complementaria</label>
                                <input class="form-control" name="num_doc_corp" required autocomplete="num_doc_corp" autofocus placeholder="Ejm: Edificio 'El edificio' interior 504 ">
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
                <button type="button" class="btn btn-success">Ingresar dirección</button>
            </a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="detallesModal1" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="text-success text-center mb-3">Estas seguro que la dirección de tu empresa fue la ingresada?</h2>
                            <p class="lead text-center">Calle 43B Carrera 13 sur edificio El emprendedor interior 301.</p>
                            <p class="lead text-center">Envigado, Villagrande.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer pb-0 pt-2 mb-0">
                <span class="pull-right"><button type="button" class="btn btn-danger"
                    data-dismiss="modal">Regresar</button></span>
            <a data-dismiss="modal" data-toggle="modal" data-target="#detallesModal2">
                <button type="button" class="btn btn-success">Confirmar</button>
            </a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="detallesModal2" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="text-success text-center mb-3">Exito!</h2>
                            <div class="d-flex justify-content-center">
                                <i class="fas fa-check-circle" style="width: 10% !important; height: 10% !important;"></i>
                            </div>
                            <p class="lead text-center">La dirección fue ingresada satisfactoriamente</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer pb-0 pt-2 mb-0">
                <span class="pull-right">
            <a data-dismiss="modal">
                <button type="button" class="btn btn-success">Continuar</button>
            </a></span>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app2')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card shadow">
                <div class="card-header">
                    <div class="py-3">
                        <h1 class="text-success text-center">Bienvenido a Reciclapp</h1>
                        <p class="lead text-center">Aquí podrás contar historias sobre sus recicladores, compartir el desempeño ambiental de su gestión y crear una comunidad entre ciudadanos y recicladores.</p>
                    </div>
                </div>
                <div class="card-body">
                        <div class="form-group">
                            <div class="container pl-5 pr-5">
                                <div class="row border border-solid">
                                    <div class="col-12">
                                        <div class="py-5 subtitle text-center mt-2">
                                            <h2 class="text-success">Sobre la corporación</h2>
                                            <p class="lead text-center">Ingresa la información referente a los datos principales sobre la corporación de reciclaje</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-5 d-flex align-items-center col-sm-12 justify-content-cen">
                                        <div class="">
                                            <div class="text-center mb-3">
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
                                    </div>
                                    <div class="col-xl-7 col-sm-12">
                                        <label for="name">Nombre o Razón social <strong class="text-danger">*</strong></label>
                                        <input class="form-control" value="A reciclar" readonly>
                                        <div class="form-group  mx-auto mt-3">
                                            <label for="name">Correo <strong class="text-danger">*</strong></label>
                                            <input class="form-control" value="Areciclar@reciclar.com" readonly>
                                        </div>                     
                                        <label for="name">{{__('Tipo de documento')}} <strong class="text-danger">*</strong></label>
                                        <div class="form-group  mx-auto d-flex">
                                            <select class="form-control w-25 mr-2" name="type_doc" id="type" required autocomplete="type_doc" autofocus>
                                                <option value="1">C.C.</option>
                                                <option value="0">NIT</option>
                                            </select>
                                            <input class="form-control" name="num_doc" required autocomplete="num_doc" autofocus placeholder="Numero de documento">
                                            @error('num_doc')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group  mx-auto mt-3">
                                            <label for="name">{{__('Teléfono')}} <strong class="text-danger">*</strong></label>
                                            <input class="form-control"  name="phone" required autocomplete="phone" autofocus placeholder="Ejm: 5250405 ">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                            <small id="emailHelp" class="form-text text-muted">
                                                Ingresa el número teléfono o celular.
                                            </small>
                                        </div>
                                        <div class="form-group  mx-auto w-100">
                                            <label for="name">Municipio <strong class="text-danger">*</strong></label>
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
                                        <div class="form-group  mx-auto w-100">
                                            <label for="name">Comuna <strong class="text-danger">*</strong></label>
                                            <select class="form-control" name="type_doc" id="type"  required autocomplete="type_doc" autofocus>
                                                <option value="Comuna 1">Comuna 1</option>
                                                <option value="Comuna 2">Comuna 2</option>
                                                <option value="Comuna 3">Comuna 3</option>
                                                <option value="Comuna 4">Comuna 4</option>
                                                <option value="No aplica">No aplica</option>
                                            </select>
                                        </div>
                                        <div class="form-group  mx-auto w-100">
                                            <label for="name">Barrio <strong class="text-danger">*</strong></label>
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

                                        <div class="form-group  mx-auto mt-3">
                                            <label for="name">Dirección <strong class="text-danger">*</strong></label>
                                            <a href="" data-toggle="modal" data-target="#modalDireccion">
                                                <input id="direccion" class="form-control" name="position" required autocomplete="position" autofocus placeholder="Haz click para ingresar la dirección">
                                                @error('string')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="container pl-5 pr-5">
                            <div class="row border-solid border">
                                <div class="col-12">
                                    <h2 class="col-md-12 text-md-center mb-3 mt-4 text-success">Persona de contacto</h2>
                                    <p class="lead text-center">Ingresa la información referente sobre la persona a cargo en utilizar Reciclapp.</p>
                                    <div class="form-group  mx-auto mt-3 w-75">
                                        <label for="name">Nombre <strong class="text-danger">*</strong></label>
                                                <input class="form-control" name="name_rep" required autocomplete="name_rep" autofocus placeholder="Ejm: Juanito ">
                                                @error('string')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                    </div>
                                    <div class="form-group  mx-auto mt-3 w-75">
                                        <label for="name">Apellido <strong class="text-danger">*</strong></label>
                                                    <input class="form-control" name="lastname" required autocomplete="name" autofocus placeholder="Ejm: García">
                                                    @error('string')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                    </div>
                                    <div class="form-group mx-auto mt-3 w-75">
                                        <label for="name">{{__('Cargo')}}</label>
                                        <input class="form-control" name="position" required autocomplete="position" autofocus placeholder="Ejm: Gerente">
                                        @error('string')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="card-footer">
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

<div class="modal fade" id="modalDireccion" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title text-success" id="favoritesModalLabel">Ingreso de dirección de la corporación</h2>
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <p class="lead">Selecciona e ingresa los siguientes datos, verás como se va construyendo tu dirección.
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
                <h2 class="text-success">Confirmar dirección</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex justify-content-center mt-2 mb-2">
                                <img src="/alerta.png" alt="">
                            </div>
                            <h2 class="text-success text-center mb-3">¿Deseas confirmar la direccion de la corporación que fue ingresada?</h2>
                            <p class="lead text-center border border-solid">Calle 7A sur #42D oeste 70 AP 306.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer pb-0 pt-2 mb-0">
                <span class="pull-right"><button type="button" class="btn btn-danger"
                    data-dismiss="modal">Regresar</button></span>
            <a data-dismiss="modal" data-toggle="modal" data-target="#detallesModal2">
                <button type="button" class="btn btn-success" onclick="agregarDireccion()">Confirmar</button>
            </a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="detallesModal2" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
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
    function agregarDireccion(){
        var texto = "Calle 7A sur #42D oeste 70 AP 306";
        var direccion = document.getElementById("direccion");
        direccion.setAttribute("value",texto);
    }
</script>
@endsection

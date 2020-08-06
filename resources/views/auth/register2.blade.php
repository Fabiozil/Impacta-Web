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
                                                    <img src="{{url("Arreciclar.png")}}" alt="" class="w-100">
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
                                        <input class="form-control" value="Arreciclar" readonly>
                                        <div class="form-group  mx-auto mt-3">
                                            <label for="name">Correo <strong class="text-danger">*</strong></label>
                                            <input class="form-control" value="arreciclar@impacta.com" readonly>
                                        </div>                     
                                        <label for="name">{{__('Tipo de documento')}} <strong class="text-danger">*</strong></label>
                                        <div class="form-group  mx-auto d-flex">
                                            <select class="form-control w-25 mr-2" name="type_doc" id="type" required autocomplete="type_doc" autofocus>
                                                <option value="0">NIT</option>
                                                <option value="1">C.C.</option>
                                            </select>
                                            <input class="form-control" name="num_doc" required autocomplete="num_doc" autofocus placeholder="Numero de documento" value="901007006">
                                            @error('num_doc')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group  mx-auto mt-3">
                                            <label for="name">{{__('Teléfono')}} <strong class="text-danger">*</strong></label>
                                            <input class="form-control"  name="phone" required autocomplete="phone" autofocus placeholder="Ejm: 5250405" value="(4) 2322668">
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
                                                <option value="Comuna 4">Comuna 14</option>
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
                                                <option value="El Poblado">Barrio Colombia</option>
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
                                                <input id="direccion" class="form-control" name="position" required autocomplete="position" value="Calle 26 # 44 - 27" autofocus placeholder="Haz click para ingresar la dirección">
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
                        <div class="container pl-5 pr-5 mb-2">
                            <div class="row border-solid border d-flex justify-content-center">
                                <div class="col-10 pl-5 pr-5">
                                    <h2 class="text-center text-success">Jornada Laboral</h2>
                                    <h5 class="lead text-center">Ingresa el horario de atención de la corporación</h5>
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
                                            <th class="col-6">Día de la semana</th>
                                            <th class="col-6">Horario</th>
                                        </thead>
                                        <tbody id="listaZonas">
                                            <tr>
                                                <th>No hay horarios seleccionados</th> 
                                            </tr>
                                        </tbody>
                                    </table>
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
                                                <input class="form-control" name="name_rep" required autocomplete="name_rep" autofocus placeholder="Ejm: Juanito " value="Paula">
                                                @error('string')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                    </div>
                                    <div class="form-group  mx-auto mt-3 w-75">
                                        <label for="name">Apellido <strong class="text-danger">*</strong></label>
                                                    <input class="form-control" name="lastname" required autocomplete="name" autofocus placeholder="Ejm: García" value="Córdoba">
                                                    @error('string')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                    </div>
                                    <div class="form-group mx-auto mt-3 w-75">
                                        <label for="name">{{__('Cargo')}}</label>
                                        <input class="form-control" name="position" required autocomplete="position" autofocus placeholder="Ejm: Gerente" value="Directora de proyecto">
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
    var contador_zonas = 0;
    function agregarDireccion(){
        var texto = "";
        var direccion = document.getElementById("direccion");
        direccion.setAttribute("value",texto);
    }
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

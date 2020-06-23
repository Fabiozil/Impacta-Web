@extends('layouts.app')
@section('header')
 <!-- Recaptcha temporal  -->
 {!! htmlScriptTagJsApi([
    'action' => 'homepage',
    'custom_validation' => 'myCustomValidation'
]) !!}
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card shadow">
                <div class="card-header">
                    <div class="py-3">
                        <h1 class="text-success text-center">{{ __('Register') }}</h1>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" id="registro">
                        @csrf 
                        <h5 class="col-md-12 text-md-center mb-3"><strong>Representante legal</strong></h5>
                        <div class="form-group mx-auto w-75">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{__('Tipo')}}</label>
                            <div class="col-md-6">
                                <select class="form-control" name="type" id="type">
                                    <option value="1">Corporación</option>
                                    <option value="0">Afiliado</option>
                                </select>
                            </div>
                            <br>
                            <div style="height:25vh">
                                    <img src="/icons/user.png" alt="Imagen representante"
                                        style="height: 100%;;max-width: 100%;">
                                </div>
                            <label for="name">{{__('Nombre representante')}}</label>
                            <input class="form-control  @error('name_rep') is-invalid @enderror" name="name_rep" value="{{ old('name_rep') }}" required autocomplete="name_rep" autofocus placeholder="Ejm: Juanito ">
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
                            <input class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="name" autofocus placeholder="Ejm: García">
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
                            <select class="form-control" name="type_doc" id="type"  value="{{ old('type_doc') }}" required autocomplete="type_doc" autofocus>
                                <option value="1">CC</option>
                                <option value="0">PASS</option>
                            </select>
                            <small id="emailHelp" class="form-text text-muted">
                                Ingresa el tipo de documento del representante legal.
                            </small>
                        </div>
                        <div class="form-group  mx-auto w-75 mt-3">
                            <label for="name">{{__('Número de documento')}}</label>
                            <input class="form-control  @error('num_doc') is-invalid @enderror" name="num_doc" value="{{ old('num_doc') }}" required autocomplete="num_doc" autofocus placeholder="Ejm:  1036965587">
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
                            <input class="form-control @error('position') is-invalid @enderror" name="position"  value="{{ old('position') }}" required autocomplete="position" autofocus placeholder="Ejm: Gerente">
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
                            <label for="name">{{__('Correo representante')}}</label>
                            <input class="form-control @error('email_rep') is-invalid @enderror"  name="email_rep" value="{{ old('email_rep') }}" required autocomplete="email_rep" autofocus placeholder="Ejm: Juanito@juanito.com ">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <small id="emailHelp" class="form-text text-muted">
                                Ingresa el correo electrónico del representante legal.
                            </small>
                        </div>
                        <div class="form-group  mx-auto w-75 mt-3">
                            <label for="name">{{__('Teléfono')}}</label>
                            <input class="form-control @error('phone') is-invalid @enderror"  name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus placeholder="Ejm: 5250405 ">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <small id="emailHelp" class="form-text text-muted">
                                Ingresa el número teléfono o celular del representante legal.
                            </small>
                        </div>
                        <h5 class="col-md-12 text-md-center mb-3 mt-4"><strong>{{ __('Corporación') }}</strong></h5>
                        <div class="form-group  mx-auto w-75 mt-3">
                            <label for="name">{{__('Razón social')}}</label>
                            <input class="form-control @error('r_s') is-invalid @enderror"  name="r_s" value="{{ old('r_s') }}" required autocomplete="r_s" autofocus placeholder="Ejm: Ayudar a la sociedad a mejorar su entorno ">
                            @error('string')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <small id="emailHelp" class="form-text text-muted">
                                Razon social.
                            </small>
                        </div>
                        <div class="form-group  mx-auto w-75 mt-3">
                            <label for="name">{{__('Número documento corporación')}}</label>
                            <input class="form-control @error('num_doc_corp') is-invalid @enderror " name="num_doc_corp" value="{{ old('num_doc_corp') }}" required autocomplete="num_doc_corp" autofocus placeholder="Ejm: 10258555">
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
                            <div id="map" class="w-100" style="border:5px solid; height:200px">
                                Aquí va el mapa
                                <input type="hidden" class="form-control " id="coordenadas" name="sector" value=""  required >
                                <!-- @error('sector')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                            <small id="emailHelp" class="form-text text-muted">
                                Ingresa la ubicación de la corporacion.
                            </small>
                        </div>
                            <div class="form-group  mx-auto w-75 mt-3">
                                <button type="submit" class="btn btn-success w-100">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="card-footer bg-transparent border">
                        <small id="emailHelp" class="form-text text-muted">
                            Al hacer click en "Registro" aceptas nuestros
                            <a href="#" class="text-decoration-none text-primary">terminos de servicio</a> y
                            <a href="#" class="text-decoration-none text-primary">privacidad.</a>
                            Te enviaremos correos con informacion sobre tu cuenta ocasionalmente. Se enviará un correo a
                            la direccion ingresada confirmando el registro.
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

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
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" id="registro">
                        @csrf
                        <div class="form-group row">
                            <p class="col-md-12 text-md-center"><strong>Representante legal</strong></p>

                            <!-- <label for="name" class="col-md-4 col-form-label text-md-right">{{__('Tipo')}}</label>
                            <div class="col-md-6">
                                <select class="form-control" name="type" id="type">
                                    <option value="1">Corporación</option>
                                    <option value="0">Afiliado</option>
                                </select>
                            </div>
                            <br> -->
                            <!-- <div style="height:25vh">
                                    <img src="/icons/user.png" alt="Imagen representante"
                                        style="height: 100%;;max-width: 100%;">
                                </div> -->
                            <br>
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{__('Nombre representante')}}</label>
                            <div class="col-md-6">
                                <input class="form-control  @error('name_rep') is-invalid @enderror" name="name_rep" value="{{ old('name_rep') }}" required autocomplete="name_rep" autofocus placeholder="Ejm: Juanito ">
                                @error('string')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <br>
                            <br>
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{__('Apellido representante')}}</label>
                            <div class="col-md-6">
                                <input class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="name" autofocus placeholder="Ejm: García">
                                @error('string')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                 @enderror
                            </div>
                            <br>
                            <br>
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{__('Tipo de documento')}}</label>
                            <div class="col-md-6">
                                <select class="form-control" name="type_doc" id="type"  value="{{ old('type_doc') }}" required autocomplete="type_doc" autofocus>
                                    <option value="1">CC</option>
                                    <option value="0">PASS</option>
                                </select>
                            </div>
                            <br>
                            <br>
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{__('Número de documento')}}</label>
                            <div class="col-md-6">
                                <input class="form-control  @error('num_doc') is-invalid @enderror" name="num_doc" value="{{ old('num_doc') }}" required autocomplete="num_doc" autofocus placeholder="Ejm:  1036965587">
                                @error('num_doc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <br>
                            <br>
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{__('Cargo')}}</label>
                            <div class="col-md-6">
                                <input class="form-control @error('position') is-invalid @enderror" name="position"  value="{{ old('position') }}" required autocomplete="position" autofocus placeholder="Ejm: Gerente">
                                @error('string')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <br>
                            <br>
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{__('Correo representante')}}</label>
                            <div class="col-md-6">
                                <input class="form-control @error('email_rep') is-invalid @enderror"  name="email_rep" value="{{ old('email_rep') }}" required autocomplete="email_rep" autofocus placeholder="Ejm: Juanito@juanito.com ">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <br>
                            <br>
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{__('Teléfono')}}</label>
                            <div class="col-md-6">
                                <input class="form-control @error('phone') is-invalid @enderror"  name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus placeholder="Ejm: 5250405 ">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <br>
                            <br>
                            <p class="col-md-12 text-md-center"><strong>{{ __('Corporación') }}</strong></p>
                            <br>
                            <br>

                            <label for="name" class="col-md-4 col-form-label text-md-right">{{__('Razón social')}}</label>
                            <div class="col-md-6">
                                <input class="form-control @error('r_s') is-invalid @enderror"  name="r_s" value="{{ old('r_s') }}" required autocomplete="r_s" autofocus placeholder="Ejm: Ayudar a la sociedad a mejorar su entorno ">
                                @error('string')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <br>
                            <br>
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{__('Número documento corporación')}}</label>
                            <div class="col-md-6">
                                <input class="form-control @error('num_doc_corp') is-invalid @enderror " name="num_doc_corp" value="{{ old('num_doc_corp') }}" required autocomplete="num_doc_corp" autofocus placeholder="Ejm: 10258555">
                                @error('numd_doc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <br>
                            <br>
                            <label for="sector" class="col-md-4 col-form-label text-md-right">{{__('Sector')}}</label>
                            <div id="map" class="col-6" style="border:5px solid" style="height:20px">
                                <input type="hidden" class="form-control " id="coordenadas" name="sector" value=""  required >
                                <!-- @error('sector')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>


                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

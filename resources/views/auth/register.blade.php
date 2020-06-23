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
        <div class="py-3"></div>
        <div class="col-md-9">
            <div class="card shadow">
                <div class="card-header">
                    <div class="py-3">
                        <h1 class="text-success text-center">{{ __('Inicial register') }}</h1>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" id="registro">
                        @csrf
                        <div class="form-group mx-auto w-75">
                            <label for="name">{{ __('Name') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                placeholder="Ejm: RecilandoAndoCorporación ">
                            @error('string')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <small id="emailHelp" class="form-text text-muted">
                                Ingresa el nombre de la corporacion.
                            </small>
                        </div>
                        <div class="form-group mx-auto w-75">
                            <label for="email">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email"
                                placeholder="Ej: recilando@reciclando.es">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <small id="emailHelp" class="form-text text-muted">
                                Ingresa el correo electronico de la corporacion.
                            </small>
                        </div>

                        <div class="form-group mx-auto w-75">
                            <label for="password">{{ __('Password') }}</label>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <small id="emailHelp" class="form-text text-muted">
                                Ingresa la contraseña de la corporacion con almenos 8 digitos.
                            </small>
                        </div>

                        <div class="form-group  mx-auto w-75">
                            <label for="password-confirm">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="form-group  mx-auto w-75">
                            <button type="submit" class="btn btn-success w-100">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </form>
                    <div class="card-footer bg-transparent border">
                        <small id="emailHelp" class="form-text text-muted">
                            Al hacer click en "Registro" aceptas nuestros
                            <a href="#" class="text-decoration-none text-primary">terminos de servicio</a> y
                            <a href="#" class="text-decoration-none text-primary">privacidad.</a>
                            Te enviaremos correos con informacion sobre tu cuenta ocasionalmente. Se enviará un correo a
                            la direccion ingresada para confirmar la direccion de correo electronico.
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

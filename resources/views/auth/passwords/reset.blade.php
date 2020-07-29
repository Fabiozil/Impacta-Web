@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header text-center text-success">
                    <div class="py-3">
                        <h2>{{ __('Reset Password') }}</h2>                        
                    </div>

                </div>
                <div class="card-body">
                        {{-- <input type="hidden" name="token" value="{{ $token }}"> --}}
                        <div class="form-group mx-auto w-75">
                            <label for="email">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control" name="email" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mx-auto w-75">
                            <label for="password">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <small id="emailHelp" class="form-text text-muted">
                                Ingresa la nueva contraseña
                            </small>
                        </div>

                        <div class="form-group mx-auto w-75">
                            <label for="password-confirm">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        <div class="form-group row mx-auto w-75">
                        <a href="{{url("/login")}}" class="w-100">
                                <button type="submit" class="btn btn-success mx-auto w-100   ">
                                {{ __('Reset Password') }}
                                </button>
                            </a>
                        </div>
                </div>
                <div class="card-footer">
                    <small id="emailHelp" class="form-text text-muted">
                        Por favor verifica que la dirección de correo auto completada corresponda con la de tu corporación.
                        Al hacer click en "reestablecer contraseña" autorizas a reemplazar la contraseña actual con la ingresada.
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

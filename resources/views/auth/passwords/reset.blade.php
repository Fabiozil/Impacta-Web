@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header text-center ">
                    <div class="py-3">
                        <h2 class="text-success">Restablecer contraseña</h2>       
                        <p class="lead">Una contraseña segura contribuye a evitar el acceso no autorizado a la cuenta registrada en Reciclapp.</p>                 
                    </div>

                </div>
                <div class="card-body">
                        {{-- <input type="hidden" name="token" value="{{ $token }}"> --}}

                        <div class="form-group mx-auto w-75">
                            <label for="password">Nueva contraseña</label>
                            <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password" value="sadasdasdassa">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <small id="emailHelp" class="form-text text-muted">
                                Longitud mínima de 8 caracteres alfanuméricos.
                            </small>
                        </div>

                        <div class="form-group mx-auto w-75">
                            <label for="password-confirm">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" value="sadasdasdassa">
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
                        Al hacer clic en "Restablecer contraseña" autoriza el reemplazo de la contraseña actual de la cuenta registrada por la nueva contraseña ingresada
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

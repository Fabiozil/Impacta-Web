@extends('layouts.app2')

@section('content')
<div class=" d-flex justify-content-center align-content-center">
    <div id="Contenedor" class="col-4 container-fluid ">
        <div class="card shadow">
            <div class="card-header">
                <div class="py-3 text-success text-center">
                    <h2>Reestablecer contraseña</h2>
                </div>
            </div>
            <div class="card-body">
                <p class="lead">Ingrese su nombre de usuario o correo electrónico y le enviaremos un enlace al
                    correo electrónico registrado para restablecer la contraseña</p>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-list"></i></span>
                    <input id="email" type="email" class="form-control" aria-describedby="sizing-addon1"
                        placeholder="{{ __('E-Mail Address') }}" name="email" required autocomplete="email" autofocus value="arreciclar@impacta.com">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <br>
                <div class=" d-flex justify-content-center align-content-center">
                    <a href="{{url("/reset")}}" class="w-100">
                        <button class="btn btn-lg btn-success btn-block btn-signin" id="IngresoLog">
                            Enviar enlace contraseña
                        </button>
                    </a>
                </div>
            </div>
            <div class=" p-3 border-solid border-top">
                <small id="emailHelp" class="form-text text-muted">
                    Al hacer clic en "Enviar enlace contraseña" autoriza el envío del enlace de recuperación a la
                    dirección del correo electrónico registrado por la corporación. En el correo se describe un
                    instructivo para restablecer la contraseña.
                </small>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-end">
                    <a href="{{url("/login")}}">
                        <button class="btn btn-danger">Regresar</button>
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

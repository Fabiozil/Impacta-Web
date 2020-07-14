@extends('layouts.app')
@section('content')
<div class=" d-flex justify-content-center align-content-center">
    <div id="Contenedor" class=" col-4 container-fluid " style="height: 100vh">

        <div class="Icon d-flex justify-content-center align-content-center col-2">
            <!--Icono de usuario-->
            <i class="fal fa-user-alt"></i>
        </div>
        <div class="ContentForm">
            <div class="card shadow">
                <div class="card-header">
                    <div class="py-3">
                        <h1 class="text-success text-center">Ingreso</h1>
                    </div>
                </div>
                <div class="card-body">
                    <form>
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="email" class="form-control" name="email"
                                placeholder="{{ __('E-Mail Address') }}" id="Usuario" aria-describedby="sizing-addon1"
                                required autocomplete="email" autofocus>
                        </div>
                        <br>
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" name="password" class="form-control"
                                placeholder="{{ __('Password') }}" aria-describedby="sizing-addon1" required
                                autocomplete="current-password">
                        </div>
                        <div class="opcioncontra mt-2">
                            <a class="text-primary" href="{{ route('password.request') }}">
                                Olvidaste tu contrasena?
                            </a>
                        </div>
                        <br>
                        <!-- cambiar ingresar por acceder en el dic -->
                        <a href="{{ url('home') }}" class="w-100">
                            <button class="btn btn-lg btn-success btn-block w-100">Acceder</button>
                        </a>
                        <br>
                    </form>
                </div>
               <div class="card-footer">
                <small id="emailHelp" class="form-text text-muted">
                    Al hacer click en "Acceder" aceptas nuestros
                    <a href="#" class="text-decoration-none text-primary">terminos de servicio</a> y
                    <a href="#" class="text-decoration-none text-primary">privacidad.</a>
                    Te enviaremos correos con informacion sobre tu cuenta ocasionalmente. Si no tienes una cuenta haz click
                    <a href="{{ route('register') }}" class="text-decoration-none text-primary">aquí</a> para crear una.
                </small>
               </div>
            </div>
            
        </div>
    </div>
</div>
@endsection

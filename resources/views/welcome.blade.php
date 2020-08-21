@extends('layouts.app2')
@section('content')
<div class="container h-100">
    <div class="py-5"></div>
    <div class="d-flex align-items-center h-100">
        <div class="col-7 mr-5">
            <div class="container">
                <div class="py-5 mr-5">
                    <h1 class="text-center" style="font-size: 2.7rem">
                        <strong>Somos uno: Corporaciones-Recicladores-Ciudadanos</strong>
                    </h1>

                    <h5 class="text-center">Reciclapp busca <strong class="font-weight-bold">conectar</strong> a los recicladores con los ciudadanos y a <strong class="font-weight-bold"> aumentar </strong>
                        el acceso del material reciclable para ellos, mientras <strong class="font-weight-bold">mejoramos</strong>  las condiciones de vida y de
                        trabajo para los recicladores en el Área Metropolitana del Valle de Aburrá.</h5>
                </div>
            </div>
        </div>
        <div class="col-5">
            <div class="card border mb-3">
                <div class="card-body text">
                    <div class="form-group">
                        <label>Usuario o correo electrónico</label>
                        <input type="text" class="form-control" placeholder="James David Rodriguez Rubio" value="arreciclar@impacta.com">
                    </div>
                    <div class="form-group">
                        <label>Contraseña</label>
                        <input type="password" class="form-control" placeholder="Contraseña" value="asadasdasd">
                    </div>
                    <div class="opcioncontra mt-2 mb-3">
                        <a class="text-primary" href="{{url("/email") }}">
                            ¿Olvidaste la contraseña?
                        </a>
                    </div>
                    <a href="{{url("/home")}}">
                        <button type="submit" class="btn btn-success w-100">Entrar</button>
                    </a>
                </div>
                <div class="card-footer bg-transparent border">
                    <small id="emailHelp" class="form-text text-muted">
                        Al hacer click en "Entrar" aceptas nuestros
                        <a href="#" class="text-decoration-none text-primary">términos de servicio</a> y
                        <a href="#" class="text-decoration-none text-primary">privacidad.</a> Si aún no tienes una
                        cuenta haz click
                        <a href="{{ url('/register') }}" class="text-decoration-none text-primary">aquí</a> para
                        registrarte.
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

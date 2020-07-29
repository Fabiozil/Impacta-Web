@extends('layouts.app2')
@section('content')
<div class="container h-100">
    <div class="py-5"></div>
    <div class="d-flex align-items-center h-100">
        <div class="col-7">
            <div class="container">
                <div class="py-5">
                    <h1 class="text-success"><img src="{{ url('/Reciclapp_V2.png') }}" style="max-width: 100%"></h1>
                    <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias, optio? Dolor
                        repellendus aliquid
                        sit, accusamus modi ratione autem ut eveniet odio, explicabo officia placeat. Obcaecati nesciunt
                        quis explicabo dignissimos soluta.</p>
                </div>
            </div>
        </div>
        <div class="col-5">
            <div class="card border mb-3">
                <div class="card-body text">
                    <div class="form-group">
                        <label>Nombre de la corporacion</label>
                        <input type="text" class="form-control" 
                            placeholder="James David Rodriguez Rubio">
                    </div>
                    <div class="form-group">
                        <label>Contraseña</label>
                        <input type="password" class="form-control" 
                            placeholder="Contraseña">
                    </div>
                    <a href="{{url("/home")}}">
                            <button type="submit" class="btn btn-success w-100">Entrar</button>
                    </a>
                </div>
                <div class="card-footer bg-transparent border">
                    <small id="emailHelp" class="form-text text-muted">
                        Al hacer click en "Entrar" aceptas nuestros
                        <a href="#" class="text-decoration-none text-primary">terminos de servicio</a> y
                        <a href="#" class="text-decoration-none text-primary">privacidad.</a>
                        Te enviaremos correos con informacion sobre tu cuenta ocasionalmente. Si no tienes una cuenta haz click
                        <a href="{{ url('/register') }}" class="text-decoration-none text-primary">aquí</a> para registrarte
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

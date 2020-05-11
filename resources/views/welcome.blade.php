@extends('layouts.app')
@section('content')
<div class="container h-100">
    <div class="py-5"></div>
    <div class="d-flex align-items-center h-100">
        <div class="col-7">
            <div class="container">
                <div class="py-5">
                    <h1 class="text-success">Impacta</h1>
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
                    <form action="">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nombre de la corporacion</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="James David Rodriguez Rubio">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Contraseña</label>
                            <input type="password" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example.com">
                        </div>
                        <button type="submit" class="btn btn-success w-100 h-25"
                        onclick="eliminar_comuna()">Entrar</button>
                    </form>
                </div>
                <div class="card-footer bg-transparent border">
                    <small id="emailHelp" class="form-text text-muted">
                        Al hacer click en "Entrar" aceptas nuestros
                        <a href="#" class="text-decoration-none text-primary">terminos de servicio</a> y
                        <a href="#" class="text-decoration-none text-primary">privacidad.</a>
                        Te enviaremos correos con informacion sobre tu cuenta ocasionalmente. Si no tienes una cuenta haz click
                        <a href="{{ route('register') }}" class="text-decoration-none text-primary">aquí</a> para registrarte
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

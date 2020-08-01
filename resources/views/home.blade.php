@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">
                    <h1 class="text-success text-center">
                        Bienvenido
                    </h1>
                    <p class="lead text-center">
                        Bienvenido a Reciclapp!, esta es tu bandeja de entrada en la que encontraras unas sugerencias sobre hacia donde dirigirte a continuación.
                    </p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-4 border border-solid p-2">
                            <h2 class="text-success text-center">
                                Puesto 2 en recoleccion semanal.
                            </h2>
                            <div class="row">
                                <div class="col-5 p-1">
                                    <img src="/corp_logo.png" alt="" class="imgp border-success border-solid rounded-circle">
                                </div>
                                <div class="col-7 p-1">
                                    <p for=" " class="lead font-weight-bold text-center border-bottom border-solid">Reciclando ando #2!</p>
                                    <p class="">Tu corporación ocupa el segundo puesto en emisiones evitadas esta semana materiales equivalentes a la emision de 39 ton CO2e</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-8 border border-solid p-2">
                            <h2 class="text-success text-center">
                                Tu historico
                            </h2>
                            <div class="row">
                                <div class="col-12">
                                    <p for=" " class="lead font-weight-bold text-center border-bottom border-solid">Ultima fecha de corte: hace 5 días</p>
                                    
                                </div>
                                <div class="col-4">
                                    <ul>
                                        <li><strong>Emisiones evitadas:</strong>  764 ton CO2e</li>
                                        <li><strong>Mayores recolecciones:</strong>  Metal (Aluminio)</li>
                                        <li><strong>Reportes ingresados:</strong>  36</li>
                                    </ul>
                                <a href="{{url("/historial")}}"><button class="btn btn-success ml-2">Ver mi desempeño ambiental</button></a>
                                    
                                    
                                </div>
                                <div class="col-8">
                                    <img src="grafica.png" alt="" style="width: 400px">
                                </div>
                            </div>
                        </div>
                        <div class="col-6 border border-solid p-2">
                            <h2 class="text-success text-center">
                                Mi comunidad
                            </h2>
                            <div class="row">
                                <div class="col-6 d-flex justify-content-center">
                                    <label for="" class="lead"><strong class="font-weight-bold">Usuarios afiliados:</strong> 27</label>
                                </div>
                                <div class="col-6 d-flex justify-content-center">
                                    <label for="" class="lead"><strong class="font-weight-bold">Usuarios sin asignar:</strong> 2</label>
                                </div>
                                <div class="col-12">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-5">
                                                    <img src="Michel.jpg" alt="" class="imgpp rounded-circle border-success border-solid border" style="">
                                                </div>
                                                <div class="col-7">
                                                        <label for="" class="lead"><strong class="font-weight-bold">Nombre:</strong> Michel Osama</label>
                                                        <label for="" class="lead"><strong class="font-weight-bold text-danger">Pendiente de asignar</strong></label>
                                                        <a href="{{url("/comunidad")}}">
                                                        <button class="btn btn-success">Ver mi comunidad</button></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-5">
                                                    <img src="unidad1.jpg" alt="" class="imgpp rounded-circle border-success border-solid border" style="">
                                                </div>
                                                <div class="col-7">
                                                        <label for="" class="lead"><strong class="font-weight-bold">Nombre:</strong> Torres de la magnolia</label>
                                                        <label for="" class="lead"><strong class="font-weight-bold text-danger">Pendiente de asignar</strong></label>
                                                        <a href="{{url("/comunidad")}}">
                                                        <button class="btn btn-success">Ver mi comunidad</button></a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 border border-solid p-2">
                            <h2 class="text-success text-center">
                                Mis recicladores
                            </h2>
                            <div class="row">
                                <div class="col-6 d-flex justify-content-center">
                                    <label for="" class="lead"><strong class="font-weight-bold">Recicladores afiliados:</strong> 6</label>
                                </div>
                                <div class="col-6 d-flex justify-content-center">
                                    <label for="" class="lead"><strong class="font-weight-bold">Recicladores cargados:</strong> 2</label>
                                </div>
                                <div class="col-12">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-5">
                                                    <img src="Jeison.jpg" alt="" class="imgpp rounded-circle border-success border-solid border" style="">
                                                </div>
                                                <div class="col-7">
                                                        <label for="" class="lead"><strong class="font-weight-bold">Nombre:</strong> Jeison Guzman</label>
                                                        <label for="" class="lead"><strong class="font-weight-bold text-danger">3 usuarios por encima</strong></label>
                                                        <a href="{{url("/recicladores")}}">
                                                        <button class="btn btn-success">Ver mis recicladores</button></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-5">
                                                    <img src="Avimile.jpg" alt="" class="imgpp rounded-circle border-success border-solid border" style="">
                                                </div>
                                                <div class="col-7">
                                                        <label for="" class="lead"><strong class="font-weight-bold">Nombre:</strong> Avimilé Ribas</label>
                                                        <label for="" class="lead"><strong class="font-weight-bold text-danger">2 usuarios por encima</strong></label>
                                                        <a href="{{url("/recicladores")}}">
                                                        <button class="btn btn-success">Ver mis recicladores</button></a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

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
                        <div class="col-xl-4 col-sm-12 border border-solid p-2">
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
                        <div class="col-xl-8 col-sm-12 border border-solid p-2">
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
                        <div class="col-xl-6 col-sm-12 border border-solid p-2">
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
                        <div class="col-xl-6 col-sm-12 border border-solid p-2">
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
                        <div class="col-12 border-solid border">
                            <h2 class="text-success text-center mt-2">Notificaciones</h2>
                                
                                <div class="row">
                                    <div class="col-6">
                                        <div class="d-flex justify-content-center">
                                            <label for="" class="lead font-weight-bold">Ultimos enviados</label>
                                        </div>
                                        <table class="mt-3">
                                            <thead>
                                                <th class="col-2 p-1"></th>
                                                <th class="col-10 p-1 overflow-hidden"></th>
                                            </thead>
                                            <tbody>
                                                <tr class="border-bottom border-solid">
                                                    <td>23 julio
                                                        
                                                    </td>
                                                    <td class="overflow-hidden">
                                                        <a class="bg-primary text-white p-1">AUT</a> <br>
                                                        <p> Hola <a href="" class="text-success">@nombre de usuario!</a>
                                                        No olvides sacar tu material reciclable y entregarlos a <a class="text-success">@nombre reciclador</a> los días
                                                        laborales del reciclador</p>
                                                        </td>
                                                </tr>
                                                <tr class="border-bottom border-solid">
                                                    <td>
                                                        19 de julio
                                                    </td>
                                                    <td class="overflow-hidden"><a class="bg-warning text-white p-1">MAN</a> <br>
                                                        Hola <a class="text-success">@nombre de usuario!</a>
                                                        El reciclador <a class="text-success">@nombre del reciclador</a> no pudo pasar el dia
                                                        de ayer por el reciclaje por las condiciones climaticas. Pasará hoy a las 5:00PM
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex justify-content-center">
                                            <label for="" class="lead font-weight-bold">Proximos a enviar</label>
                                        </div>
                                        <table class="mt-3">
                                            <thead>
                                                <th class="col-2 p-1"></th>
                                                <th class="col-10 p-1 overflow-hidden"></th>
                                            </thead>
                                            <tbody>
                                                <tr class="border-bottom border-solid">
                                                    <td>
                                                        <br>
                                                        <p class="text-center">2 Sep 2020 8:00AM</p>
                                                    </td>
                                                    <td class="overflow-hidden"><a class="bg-warning text-white p-1">MAN</a> <br>Hola <a class="text-success">@nombre de usuario!</a>
                                                        El reciclador asignado para esta semana es <a class="text-success">@nombre del reciclador</a> debido a que tu reciclador
                                                         asignado estará en una capacitación.</td>
                                                </tr>
                                                <tr class="border-bottom border-solid">
                                                    <td>
                                                        <br>
                                                        <p class="text-center">5 Sep 2020 7:00AM</p>
                                                    </td>
                                                    <td class="overflow-hidden"><a class="bg-warning text-white p-1">MAN</a> <br>Hola <a class="text-success">@nombre de usuario!</a>
                                                        El pasado viernes no pudimos recolectar tu reciclaje pues el reciclador timbró y nadie entregó el reciclaje, tenlo en cuenta para la proxima entrega.
                                                        </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="d-flex justify-content-end mt-3 mb-3">
                                        <a href="{{url("/notificaciones")}}">
                                                <button class="btn btn-success">Ver notificaciones</button>
                                            </a>
                                        </div>
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

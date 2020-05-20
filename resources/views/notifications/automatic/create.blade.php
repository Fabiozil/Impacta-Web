@extends('layouts.app')

@section('header')
    <link rel="stylesheet" href="/css/notifications.css">
@endsection

@section('content')
    <main class="container contenedor">
        <header>
            <h1 class="title">Notificación automática</h1>
        </header>
        <section class="row">
            <label for="encendido" class="col-md-6">Condiciones de mensajes automáticos</label>
            <div class="col-md-6">
                <label class="switch float-right">
                    <input id="encendido" type="checkbox">
                    <span class="slider round"></span>
                </label>
            </div>
            <h6 class="col-md-6">Mensajes establecidos:</h6>
            <section class="container">
                <div class="row">
                    <div class="col-md-6">
                        <b>Servicio</b>
                    </div>
                    <div class="col-md-6">
                        <b>Condiciones de envío</b>
                    </div>
                    <div class="col-md-5">
                        <p class="bg-gray">Hola nombre de usuario!<br>No olvides sacar tu material reciclable y entregarlos a Nombre Reciclador los días laborales del reciclador</p>
                    </div>
                    <div class="col-md-4">
                        <label for="frecuencia">
                            Frecuencia
                        </label>
                        <select class="form-control" name="" id="frecuencia">
                            <option value="semanal">semanal</option>
                        </select>
                        <label for="momento">
                            En que momento de la semana
                        </label>
                        <select class="form-control" name="" id="momento">
                            <option value="domingo">Domingo</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="switch float-right">
                            <input id="encendido" type="checkbox">
                            <span class="slider round"></span>
                        </label>
                        <br>
                        <br>
                        <button class="btn btn-danger round float-right">Eliminar</button>
                    </div>
                    <div class="col-md-6">
                        <b>Indicador ambiental</b>
                    </div>
                    <div class="col-md-6">
                        <b>Condiciones de envío</b>
                    </div>
                    <div class="col-md-5">
                        <p class="bg-gray">Hola nombre de usuario!<br>No olvides sacar tu material reciclable y entregarlos a Nombre Reciclador los días laborales del reciclador</p>
                    </div>
                    <div class="col-md-4">
                        <label for="frecuencia">
                            Frecuencia
                        </label>
                        <select class="form-control" name="" id="frecuencia">
                            <option value="semanal">semanal</option>
                        </select>
                        <label for="momento">
                            En que momento de la semana
                        </label>
                        <select class="form-control" name="" id="momento">
                            <option value="domingo">Domingo</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="switch float-right">
                            <input id="encendido" name="" type="checkbox">
                            <span class="slider round"></span>
                        </label>
                        <br>
                        <br>
                        <button class="btn btn-danger round float-right">Eliminar</button>
                    </div>
                </div>
            </section>
            <p class="titulo_menor col-md-8 margintop-15">Adicionar nueva regla</p>
            <div class="col-md-2 margintop-15">
                <button onclick="history.back()" class="btn btn-success round">Regresar</button>
            </div>
            <div class="col-md-2 margintop-15">
                <button class="btn btn-success round">Establecer</button>
            </div>
        </section>
    </main>
    
@endsection
@extends('layouts.app')

@section('header')
    <link rel="stylesheet" href="/css/notifications.css">
@endsection

@section('content')
    <main class="container contenedor">
        <header>
            <h1 class="title">Notificación automática</h1>
        </header>
        <section>
            <label for="encendido" class="d-inline">Condiciones de mensajes automáticos</label>
            <label class="switch float-right">
                <input id="encendido" type="checkbox">
                <span class="slider round"></span>
            </label>
            <h6>Mensajes establecidos:</h6>
            <table>
                <tr>
                    <td><b>Servicio</b></td>
                    <td><b>Condiciones de envío</b></td>
                </tr>
                <tr>
                    <td  style="width:40%;padding: 15px;">
                        <p class="bg-gray">Hola nombre de usuario!<br>No olvides sacar tu material reciclable y entregarlos a Nombre Reciclador los días laborales del reciclador</p>
                    </td>
                    <td style="width:30%;">
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
                    </td>
                    <td style="width:20%;">
                        <label class="switch float-right">
                            <input id="encendido" type="checkbox">
                            <span class="slider round"></span>
                        </label>
                        <br>
                        <br>
                        <button class="btn btn-danger round float-right">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td><b>Indicador ambiental</b></td>
                    <td><b>Condiciones de envío</b></td>
                </tr>
                <tr>
                    <td  style="width:40%;padding: 15px;">
                        <p class="bg-gray">Gracias a ti hemos evitado la emision cantidad de co2 en la ultima frecuencia, lo equivalente a indicador equivalente</p>
                    </td>
                    <td style="width:30%;">
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
                    </td>
                    <td style="width:20%;">
                        <label class="switch float-right">
                            <input id="encendido" type="checkbox">
                            <span class="slider round"></span>
                        </label>
                        <br>
                        <br>
                        <button class="btn btn-danger round float-right">Eliminar</button>
                    </td>
                </tr>
            </table>
            <p class="titulo_menor">Adicionar nueva regla</p>
            <br>
            <button class="btn btn-success round">Regresar</button>
            <button class="btn btn-success round">Establecer</button>
        </section>
    </main>
    
@endsection
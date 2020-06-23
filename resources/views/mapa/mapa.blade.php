@extends('layouts.app')

@section('content')
<div class="card shadow">
    <div class="card-header">
        <h1 class="py-3 text-center text-success">Corporaciones y Usuarios</h1>
        
    </div>
    <div class="card-body">
        <a href="{{ url('/comunidad/corporaciones') }}">
            <button type="submit" class="btn btn-success mb-2">Ver otras comunidades</button>
        </a>
        <div id="map" class="h-100 w-100" style="border:2px solid;">
            <img src="{{url("/5.png")}}" alt="Mapa" style="max-height: 100%; max-width: 100%; z-index: 1;">

            <a data-toggle="tooltip" data-html="true" data-placement="left" 
            title='
            <div class="row">
                <div class="col-12">
                    <img src="{{url("/corp_logo.png")}}" class="logo-corp" alt="Logo corporacion">
                    <h5>Reciclando Ando</h5>
                    <p>Se unió hace 2 años</p>
                    <p>Dirección: Diagonal 33B #39 sur 40</p>
                    <p>Telefóno: (4) 561 09 21</p>
                    <p>Recicladores agremiados: 5</p>
                    <p>Usuarios afiliados: 23</p>
                    <p>Emisiones evitadas: 200 ton CO2e</p>
                </div>
            </div>
            '
            style="position:absolute; margin-top: -20%; margin-left: 10%; z-index: 2; max-width: 100%; max-height: 100%">
                <img src="{{url("/corp_icon.png")}}" alt="Icono corporacion" style="z-index: 2; max-width: 8%; max-height: 8%">
            </a>

            <a href="{{url("/editCorp")}}" data-toggle="tooltip" data-html="true" data-placement="left" 
            title='
            <div class="row">
                <div class="col-12">
                    <img src="{{url("/corp_logo.png")}}" class="logo-corp" alt="Logo corporacion">
                    <h5>Reciclando Ando</h5>
                    <p>Se unió hace 2 años</p>
                    <p>Dirección: Diagonal 33B #39 sur 40</p>
                    <p>Telefóno: (4) 561 09 21</p>
                    <p>Recicladores agremiados: 5</p>
                    <p>Usuarios afiliados: 23</p>
                    <p>Emisiones evitadas: 200 ton CO2e</p>
                </div>
            </div>
            '
            style="position:absolute; margin-top: -8%; margin-left: 40%; z-index: 2; max-width: 4%">
                <img src="{{url("/corp_icon.png")}}" alt="Icono usuario" style="z-index: 2; max-width: 100%; max-height: 100%">
            </a>

            <a  href="{{url("/comunidad/asignarReciclador/Harlan")}}" data-toggle="tooltip" data-html="true" data-placement="left" 
            title='
            <div class="row">
                <div class="col-12">
                    <img src="{{url("/Harlan.jpg")}}" class="logo-corp" alt="Foto perfil">
                    <h5>Harlan Barrera</h5>
                    <p>Se unió hace 1 año</p>
                    <p>Dirección: Diagonal 32D #32 sur 40</p>
                    <p>Municipio de Envigado</p>
                    <p>Reciclador asignado: Avimilé Ribas</p>
                </div>
            </div>
            '
            style="position:absolute; margin-top: -25%; margin-left: 45%; z-index: 2; max-width: 2%;">
                <img src="{{url("/user_icon.png")}}" alt="Icono usuario" style="z-index: 2; max-width: 100%; max-height: 100%">
            </a>

            <a  href="{{url("/comunidad/asignarReciclador/Michel")}}" data-toggle="tooltip" data-html="true" data-placement="left" 
            title='
            <div class="row">
                <div class="col-12">
                    <img src="{{url("/Michel.jpg")}}" class="logo-corp" alt="Logo corporacion">
                    <h5>Michel Osama</h5>
                    <p>Se unió hace 1 día</p>
                    <p>Dirección: Diagonal 28C 28 sur 25</p>
                    <p>Municipio de Envigado</p>
                    <p class="text-danger">Reciclador asignado: PENDIENTE DE ASIGNAR</p>
                </div>
            </div>
            '
            style="position:absolute; margin-top: -20%; margin-left: 60%; z-index: 2; max-width: 2%">
                <img src="{{url("/user_icon.png")}}" alt="Icono corporacion" style="z-index: 2; max-width: 100%; max-height: 100%">
            </a>

            <a  href="{{url("/comunidad/asignarReciclador/TorresDelRiachuelo")}}" data-toggle="tooltip" data-html="true" data-placement="left" 
            title='
            <div class="row">
                <div class="col-12">
                    <img src="{{url("/unidad1.jpg")}}" class="logo-corp" alt="Foto unidad">
                    <h5>Torres del riachuelo</h5>
                    <p>Se unió hace 1 año</p>
                    <p>Apartamentos: 89<p>
                    <p>Dirección: Calle 62B Carrera 50</p>
                    <p>Municipio de Itagui</p>
                    <p>Reciclador asignado: German Exequiel Cano</p>
                </div>
            </div>
            '
            style="position:absolute; margin-top: -36%; margin-left: 10%; z-index: 2; max-width: 2%;">
                <img src="{{url("/ur_icon.png")}}" alt="Icono corporacion" style="z-index: 2; max-width: 100%; max-height: 100%">
            </a>


        </div>
    </div>
    <div class="card-footer">
        <select class="form-control w-25 mb-2" name="type" id="type" style="display: inline">
            <option value="0">Opciones de filtrado</option>
            <option value="1">Nombre</option>
            <option value="2">Dirección</option>
        </select>
        <input class="form-control w-25" name="busqueda" autofocus placeholder="Busqueda" style="display: inline">
        <br>
        <a href="{{ url('/usuarios') }}">
            <button type="submit" class="btn btn-success">Buscar usuarios</button>
        </a>
        <a href="{{ url('/corporaciones') }}">
            <button type="submit" class="btn btn-success">Buscar corporaciones</button>
        </a>
    </div>
</div>


@endsection
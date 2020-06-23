@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h1 class="py-3 text-center text-success">Otras corporaciones</h1>
        
    </div>
    <div class="card-body">
        <a href="{{ url('/comunidad') }}">
            <button type="submit" class="btn btn-success mb-2">Ver mi comunidad</button>
        </a>
        <div id="map" class="h-100 w-100" style="border:2px solid;">
            <img src="{{url("/5.png")}}" alt="Mapa" style="max-height: 100%; max-width: 100%">
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

            
            <a href="{{url("/editCorp")}}" data-toggle="tooltip" data-html="true" data-placement="left" 
            title='
            <div class="row">
                <div class="col-12">
                    <img src="{{url("/corp_logo.png")}}" class="logo-corp" alt="Logo corporacion">
                    <h5>Reciclando Ando</h5>
                    <p>Se unió hace 2 años</p>
                    <p>Dirección: Diagonal 33B #39 sur 40</p>
                    <p>Telefóno: (4) 561 09 21</p>
                    <p>Recicladores agremiados: 3</p>
                    <p>Usuarios afiliados: 23</p>
                    <p>Emisiones evitadas: 200 ton CO2e</p>
                </div>
            </div>
            '
            style="position:absolute; margin-top: -8%; margin-left: 40%; z-index: 2; max-width: 4%">
                <img src="{{url("/corp_icon.png")}}" alt="Icono usuario" style="z-index: 2; max-width: 100%; max-height: 100%">
            </a>
            <a data-toggle="tooltip" data-html="true" data-placement="left" 
                title='
            <div class="row">
                <div class="col-12">
                    <img src="{{url("/corp_logo3.png")}}" class="logo-corp" alt="Logo corporacion">
                    <h5>EIA Recicla</h5>
                    <p>Se unió hace 2 años</p>
                    <p>Dirección: Calle 22 sur Carrera 42b</p>
                    <p>Telefóno: (4) 312 17 54</p>
                    <p>Recicladores agremiados: 9</p>
                    <p>Usuarios afiliados: 37</p>
                    <p>Emisiones evitadas: 274 ton CO2e</p>
                </div>
            </div>
            '
            style="position:absolute; margin-top: -35%; margin-left: 56%; z-index: 2; max-width: 4%">
                <img src="{{url("/corp_icon3.png")}}" alt="Icono usuario" style="z-index: 2; max-width: 100%; max-height: 100%">
            </a>
            <a data-toggle="tooltip" data-html="true" data-placement="left" 
            title='
            <div class="row">
                <div class="col-12">
                    <img src="{{url("/corp_logo1.png")}}" class="logo-corp" alt="Logo corporacion">
                    <h5>Reciladores las lomas</h5>
                    <p>Se unió hace 1 año</p>
                    <p>Dirección: Calle 27 sur carrera 22</p>
                    <p>Telefóno: (4) 331 41 13</p>
                    <p>Recicladores agremiados: 4</p>
                    <p>Usuarios afiliados: 19</p>
                    <p>Emisiones evitadas: 77 ton CO2e</p>
                </div>
            </div>
            '
            style="position:absolute; margin-top: -12%; margin-left: 84%; z-index: 2; max-width: 4%">
                <img src="{{url("/corp_icon2.png")}}" alt="Icono usuario" style="z-index: 2; max-width: 100%; max-height: 100%">
            </a>
            <a data-toggle="tooltip" data-html="true" data-placement="left" 
            title='
            <div class="row">
                <div class="col-12">
                    <img src="{{url("/corp_logo2.png")}}" class="logo-corp" alt="Logo corporacion">
                    <h5>RecItagui</h5>
                    <p>Se unió hace 3 años</p>
                    <p>Dirección: Calle 67 carrera 57</p>
                    <p>Telefóno: (4) 331 41 21</p>
                    <p>Recicladores agremiados: 12</p>
                    <p>Usuarios afiliados: 45</p>
                    <p>Emisiones evitadas: 544 ton CO2e</p>
                </div>
            </div>
            '
            style="position:absolute; margin-top: -31%; margin-left: 20%; z-index: 2; max-width: 4%">
                <img src="{{url("/corp_icon1.png")}}" alt="Icono usuario" style="z-index: 2; max-width: 100%; max-height: 100%">
            </a>
        </div>
        
    </div>
    <div class="card-footer">
        <select class="form-control w-25 mb-2" name="type" id="type" style="display: inline">
            <option value="0">Opciones de filtrado</option>
            <option value="1">Nombre</option>
            <option value="2">Dirección</option>
            <option value="2">Ciudad</option>
            <option value="2">Sector</option>
            <option value="2">Comuna</option>
        </select>
        <input class="form-control w-25" name="busqueda" autofocus placeholder="Busqueda" style="display: inline">
        <br>
        <a href="{{ url('/corporaciones') }}">
            <button type="submit" class="btn btn-success">Buscar corporaciones</button>
        </a>
    </div>
</div>


@endsection
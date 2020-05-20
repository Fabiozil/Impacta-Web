@extends('layouts.app')

@section('header')
    <link rel="stylesheet" href="/css/notifications.css">
@endsection

@section('content')
    <main class="container contenedor">
        <header>
            <h1 class="title">Notificación manual</h1>
        </header>
        <section class="manual">
            <h6>Copiar nuevo mensaje:</h6>
            <form class="container-fluid" action="">
                <textarea name="Mensaje" id="" cols="30" rows="10" maxlength="255" placeholder="Ingresa el mensaje a enviar"></textarea>
                <h6 class="col-md-11">Condiciones de envio</h6>
                <div class="row">
                    <div class="col-md-11">
                        <label for="todos">Todos mis usuarios</label> 
                    </div>
                    <div class="col-md-1">
                        <label class="switch">
                            <input name="" id="todos" type="checkbox">
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label for="sectores">Por localidad</label>
                    </div>
                    <div id="sectores" class="col-md-8">
                        <select class="form-control" name="sector">
                            <option value="default">Localidades</option>
                        </select>
                        <span class="span-button" id="button_sectores">Agregar localidades</span>
                    </div>
                    <div class="col-md-1">
                        <label class="switch">
                            <input id="todos" type="checkbox">
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label for="reciclador">Usuarios por reciclador</label>
                    </div>
                    <div id="reciclador" class="col-md-8">
                        <select class="form-control" name="reciclador">
                            <option value="default">Reciclador</option>
                        </select>
                        <span class="span-button" id="button_reciclador">Agregar reciclador</span>
                    </div>
                    <div class="col-md-1">
                        <label class="switch">
                            <input name="" id="todos" type="checkbox">
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label for="fecha">Enviar mensaje en otro momento</label>
                    </div>
                    <div class="col-md-8">
                        <input class="form-control width-50" required name="fecha" id="fecha" type="date">
                        <input class="form-control width-50" required type="time" name="hora">
                    </div>
                    <div class="col-md-1">
                        <label class="switch">
                            <input name="" id="todos" type="checkbox">
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8"></div>
                    <div class="col-md-2 margintop-15">
                        <button onclick="history.back()" class="btn btn-success round">Regresar</button>
                    </div>
                    <div class="col-md-2 margintop-15">
                        <button type="submit" class="btn btn-success round">Establecer</button>
                    </div>
                </div>
            </form>
            <h3 class="titulo_menor">Mensajes en espera: </h3>
            <section class="mensajes_container">
                <section class="mensaje">
                    <i class="fas fa-window-close close"></i>
                    <p class="col-md-12">
                        Durante los dias de semana santa se prestaran servicio de recoleccion de material reciclable los dias lunes y martes.
                        <br>
                        <span>Localidad: </span>
                        Medellín/Comuna Villa Hermosa/Trece de Noviembre
                        <br>
                        <span class="titulo_menor">Mensaje se envía el 30/04/2020 a las 8:00 am</span>
                    </p>
                </section>
            </section>
        
            <?php /*
            @foreach ($notifications as $notification)
                <section class="mensaje row">
                    <p>
                        {{$notification -> body}}
                        <br>
                        <span>
                            Enviado el día
                            @php
                                $d = new DateTime('2011-01-01T15:03:01.012345Z');
                                echo $d -> format('d/m/Y') . " a las " . $d -> format('h:i:s') . (intval ($d -> format('H')) > 11 ? " pm" : " am");
                            @endphp 
                        </span>
                        <span class="titulo_menor">Mensaje manual</span>
                    </p>
                </section>
            @endforeach
            */?>
        </section>    
    </main>
    <script>
        const sector_button = document.getElementById("button_sectores");
        const reciclador_button = document.getElementById("button_reciclador");
        const sectores = document.getElementById("sectores");
        const reciclador = document.getElementById("reciclador");
        sector_button.addEventListener("click", function(){
            const select = document.createElement("select");
            const opts = document.createElement("option");
            opts.innerText = "Localidades";
            opts.setAttribute("value", "new");
            select.setAttribute("class", "form-control");
            select.appendChild(opts);
            sectores.insertBefore(select, sector_button);
        });
        reciclador_button.addEventListener("click", function(){
            const select = document.createElement("select");
            const opts = document.createElement("option");
            opts.innerText = "Reciclador";
            opts.setAttribute("value", "new");
            select.setAttribute("class", "form-control");
            select.appendChild(opts);
            console.log(reciclador, reciclador_button);
            reciclador.insertBefore(select, reciclador_button);
        });
    </script>
@endsection
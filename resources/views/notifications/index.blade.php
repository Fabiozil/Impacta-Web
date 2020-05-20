@extends('layouts.app')

@section('header')
    <link rel="stylesheet" href="/css/notifications.css">
@endsection

@section('content')
    <main class="container contenedor">
        <header>
            <h1 class="title">Notificaciones</h1>
        </header>
        <nav class="nav-notifications">
            <p class="bg-gray">Selecciona el tipo de notificaciones a enviar a tus usuarios: </p>
            <a href="{{ route( 'notifications.automatic.create' ) }}">
                <button type="button" class="btn green">Automáticas</button>
            </a>
            <a href="{{ route( 'notifications.manual.create' ) }}">
                <button type="button" class="btn green">Manuales</button>
            </a>
        </nav>
        <section class="mensajes_container">
            <h4 class="marginleft-15 margintop-0">Historial de notificaciones enviadas</h4>
            <div class="row">
                <h5 class="col-md-4 offset-md-1">Buscar por: </h5>
                <select class="form-control col-md-6">
                    <option value="fecha" selected>Fecha</option>
                    <option value="texto">Texto en común</option>
                    <option value="tipo">Tipo</option>
                </select>
            </div>
            <form id="fecha" method="POST" action="" class="buscador">
                @csrf
                <p>
                    De <input required min="2020-04-23" name="dateStart" type="date"> al <input max=<?php
                        $d = new DateTime();
                        echo $d -> format('Y-m-d');
                        ?> name="dateEnd" required type="date">
                    <button class="btn green" type="submit">
                        <img src="https://img.icons8.com/cotton/2x/search--v2.png" alt="Buscar" srcset="">
                    </button>
                </p>
            </form>
            <form id="texto" method="POST" action="" class="buscador">
                @csrf
                <input type="text" name="texto" placeholder="Ingrese el texto que desea buscar" class="form-control">
                <button class="btn green" type="submit">
                    <img src="https://img.icons8.com/cotton/2x/search--v2.png" alt="Buscar" srcset="">
                </button>
            </form>
            <form id="tipo" method="POST" action="" class="buscador">
                @csrf
                <select type="text" name="tipo" class="form-control">
                    <option value="automatico">Automático</option>
                    <option value="Manual">Manual</option>
                </select>
                <button class="btn green" type="submit">
                    <img src="https://img.icons8.com/cotton/2x/search--v2.png" alt="Buscar" srcset="">
                </button>
            </form>
            <section class="mensaje row">
                <img src="https://www.jdevoto.cl/web/wp-content/uploads/2018/04/default-user-img.jpg" class="col-md-2 order-first" alt="Cliente" srcset="">
                <div class="col-md-10 order-last">
                    <p class="mensaje_cerrado">
                        <span class="titulo_menor">Tipo: Mensaje manual</span>
                        <br>
                        <span>Cambio horario de recolección</span>
                        <br>
                        Durante los días de Semana Santa se presentarán servicio de recolección de materiales reciclables los días lunes y martes.
                        <br>
                        <span>Enviado el dia 07/04/2020 a las 4:34 pm</span>
                        <br>
                        <span class="ver-mas">Más información</span>
                    </p>
                    <p class="mensaje_abierto">
                        <span class="titulo_menor">Tipo: Mensaje manual</span>
                        <br>
                        <span>Titulo: </span>
                        Cambio de horario de recolección
                        <br>
                        <span>Texto del mensaje: </span>
                        Durante los días de Semana Santa se presentarán servicio de recolección de materiales reciclables los días lunes y martes.
                        <br>
                        <span>Fecha de envío: </span>
                        07/04/2020 a las 8:34 am
                        <br>
                        <span>Condiciones de envío: </span>
                        Usuarios ubicados en barrio trece de noviembre, comuna villa hermosa (8), Medellín
                        <br>
                        <span>Número de usuarios: </span>
                        23
                        <br>
                        <span class="ver-menos">Menos información</span>
                    </p>
                </div>
            </section>
            <section class="mensaje row">
                <img src="https://www.jdevoto.cl/web/wp-content/uploads/2018/04/default-user-img.jpg" class="col-md-2 order-last" alt="Cliente" srcset="">
                <div class="col-md-10 order-first">
                    <p class="mensaje_cerrado">
                        <span class="titulo_menor">Tipo: Mensaje manual</span>
                        <br>
                        <span>Cambio horario de recolección</span>
                        <br>
                        Durante los días de Semana Santa se presentarán servicio de recolección de materiales reciclables los días lunes y martes.
                        <br>
                        <span>Enviado el dia 07/04/2020 a las 4:34 pm</span>
                        <br>
                        <span class="ver-mas">Más información</span>
                    </p>
                    <p class="mensaje_abierto">
                        <span class="titulo_menor">Tipo: Mensaje manual</span>
                        <br>
                        <span>Titulo: </span>
                        Cambio de horario de recolección
                        <br>
                        <span>Texto del mensaje: </span>
                        Durante los días de Semana Santa se presentarán servicio de recolección de materiales reciclables los días lunes y martes.
                        <br>
                        <span>Fecha de envío: </span>
                        07/04/2020 a las 8:34 am
                        <br>
                        <span>Condiciones de envío: </span>
                        Usuarios ubicados en barrio trece de noviembre, comuna villa hermosa (8), Medellín
                        <br>
                        <span>Número de usuarios: </span>
                        23
                        <br>
                        <span class="ver-menos">Menos información</span>
                    </p>
                </div>
            </section>
            <?php /*
            @foreach ($notifications as $notification)
                <section class="mensaje row">
                    <img src="{{$notification -> uri}}" class="col-md-2 order-{{$loop -> even == true ? 'last' : 'first'}}" 
                        alt="Cliente">
                    <div class="col-md-10 {{$loop -> even == true ? 'first' : 'last'}}">
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
                    </div>
                </section>
            @endforeach
            */?>
        </section>
    </main>
    <script>
        const mensaje_cerrado = document.getElementsByClassName("mensaje_cerrado");
        const mensaje_abierto = document.getElementsByClassName("mensaje_abierto");
        for(let i=0; i<mensaje_cerrado.length; i++){
            mensaje_cerrado[i].getElementsByClassName("ver-mas")[0].addEventListener("click", function(e){
                let msj_abierto = mensaje_abierto[i];
                msj_abierto.style.display = "block";
                mensaje_cerrado[i].style.display = "none";
            });
            mensaje_abierto[i].getElementsByClassName("ver-menos")[0].addEventListener("click", function(e){
                let msj_cerrado = mensaje_cerrado[i];
                msj_cerrado.style.display = "block";
                mensaje_abierto[i].style.display = "none";
            });
        }
    </script>
    <script>
        const contenedor = document.getElementsByClassName("contenedor")[0];
        const select = contenedor.getElementsByTagName("select")[0];
        const forms = contenedor.getElementsByTagName("form");
        for(let i=0; i<forms.length; i++){
            if(forms[i].attributes.id.value != select.value) forms[i].style.display = "none";
        }
        select.addEventListener("change", function(e){
            for(let i=0; i<forms.length; i++){
                forms[i].style.display = "none";
            }
            document.getElementById(e.target.value).style.display = "inline-block";
        });
    </script>
@endsection
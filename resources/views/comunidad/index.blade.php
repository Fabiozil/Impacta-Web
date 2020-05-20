@extends('layouts.app')

@section('header')
    <link rel="stylesheet" href="/css/notifications.css">
@endsection

@section('content')
    <main class="container contenedor">
        <header>
            <h1 class="title">Mi comunidad</h1>
        </header>
        <nav class="nav-notifications">
            <a href="{{ route( 'solicitudes.index' ) }}">
                <button type="button" class="btn float-right btnSelected">Solicitudes</button>
            </a>
            <a href="{{ route( 'mapa.index' ) }}">
                <button type="button" class="btn float-right">Mapa</button>
            </a>
        </nav>
        <?php /*
        @foreach ($historial as $historia)
            <section class="mensaje row">
                <img src="{{ $historia -> uri }}" class="col-md-2" alt="{{ $historia -> nombre }}" srcset="">
                <div class="col-md-9">
                    <p class="mensaje_cerrado">
                        {{ $historia -> nombre }} envío un mensaje
                        <br>
                        <span>
                            El día
                            @php
                                $d = new DateTime('2011-01-01T15:03:01.012345Z');
                                echo $d -> format('d/m/Y') . " a las " . $d -> format('h:i:s') . (intval ($d -> format('H')) > 11 ? " pm" : " am");
                            @endphp    
                        </span>
                        <br>
                        <span class="ver-mas">Ver más</span>
                    </p>
                    <p class="mensaje_abierto">
                        {{ $historia -> nombre }} solicitó recoleccion de "plastico"
                        <br>
                        Mensaje del usuario: 
                        <br>
                        {{ $historia -> mensaje}}
                        <br>
                        <span>
                            El día
                            @php
                                $d = new DateTime($historia -> fecha);
                                echo $d -> format('d/m/Y') . " a las " . $d -> format('h:i:s') . (intval ($d -> format('H')) > 11 ? " pm" : " am");
                            @endphp    
                        </span>
                        <br>
                        ¿Ya realizaste esta accion?
                        <form action="" method="GET">
                            @csrf
                            <button type="submit" class="btn btn-success">Si</button>
                        </form>
                        <button type="button" class="btn btn-success">No</button>
                        <br>
                        <span class="ver-menos">Ver menos</span>
                    </p>
                </div>
                <img class="col-md-1" src="https://www.nicepng.com/png/detail/61-613537_exclamation-point-png-signo-de-admiracion-rojo.png" alt="Alerta" srcset="">
            </section>
        @endforeach
        */?>
        <section class="mensajes_container">
            <div class="row">
                <h3 class="col-md-4 offset-md-1">Buscar mensajes por: </h3>
                <select class="form-control col-md-6">
                    <option value="rango" selected>Rango</option>
                    <option value="tiempo">Tiempo</option>
                </select>
            </div>
            <form id="rango" method="POST" action="" class="buscador">
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
            <form id="tiempo" method="POST" action="" class="buscador">
                @csrf
                <select type="text" name="tipo" class="form-control">
                    <option value="semana">Hace una semana</option>
                    <option value="mes">Último mes</option>
                </select>
                <button class="btn green" type="submit">
                    <img src="https://img.icons8.com/cotton/2x/search--v2.png" alt="Buscar" srcset="">
                </button>
            </form>
            <h3 class="titulo_menor marginleft-15">Notificaciones sin responder</h3>
            <form class="mensaje row">
                <img src="https://www.jdevoto.cl/web/wp-content/uploads/2018/04/default-user-img.jpg" class="col-md-2" alt="Cliente" srcset="">
                <div class="col-md-9">
                    <p class="mensaje_cerrado">
                        <span>
                            Erika56 se unío a tu comunidad el dia 23/04/2020
                        </span>
                        <br>
                        <span>
                            ¿Deseas asignarle un reciclador?
                        </span>
                        <button type="submit" class="btn btn-success" id="asignar">Asignar</button>
                        <br>
                        <span class="ver-mas">Ver más</span>
                    </p>
                    <p class="mensaje_abierto">
                        <span>Dango123 se unío a tu comunidad el día 21/04/2020</span>
                        <br>
                        <span>Información del usuario:</span>
                        <br>
                        <span>Dirección de vivienda: </span>
                        Carrera 31 A #42-27 en Medellín Antioquia
                        <br>
                        <span>Recolección de residuos: </span>
                        Tocar el timbre
                        <br>
                        <span>
                            ¿Deseas asignarle un reciclador?
                        </span>
                        <button type="submit" class="btn btn-success" id="asignar">Asignar</button>
                        <br>
                        <span class="ver-menos">Ver menos</span>
                    </p>
                </div>
                <img class="col-md-1 alerta" src="https://www.nicepng.com/png/detail/61-613537_exclamation-point-png-signo-de-admiracion-rojo.png" alt="Alerta" srcset="">
            </form>
            <form class="mensaje row">
                <img src="https://www.jdevoto.cl/web/wp-content/uploads/2018/04/default-user-img.jpg" class="col-md-2 order-last" alt="Cliente" srcset="">
                <div class="col-md-9">
                    <p class="mensaje_cerrado">
                        <span>
                            Erika56 se unío a tu comunidad el dia 23/04/2020
                        </span>
                        <br>
                        <span>
                            ¿Deseas asignarle un reciclador?
                        </span>
                        <button type="submit" class="btn btn-success" id="asignar">Asignar</button>
                        <br>
                        <span class="ver-mas">Ver más</span>
                    </p>
                    <p class="mensaje_abierto">
                        <span>Dango123 se unío a tu comunidad el día 21/04/2020</span>
                        <br>
                        <span>Información del usuario:</span>
                        <br>
                        <span>Dirección de vivienda: </span>
                        Carrera 31 A #42-27 en Medellín Antioquia
                        <br>
                        <span>Recolección de residuos: </span>
                        Tocar el timbre
                        <br>
                        <span>
                            ¿Deseas asignarle un reciclador?
                        </span>
                        <button type="submit" class="btn btn-success" id="asignar">Asignar</button>
                        <br>
                        <span class="ver-menos">Ver menos</span>
                    </p>
                </div>
                <img class="col-md-1 alerta order-first" src="https://www.nicepng.com/png/detail/61-613537_exclamation-point-png-signo-de-admiracion-rojo.png" alt="Alerta" srcset="">
            </form>
            <!-- Notificaciones respondidas -->
            <h3 class="titulo_menor marginleft-15">Notificaciones respondidas</h3>
            <section class="mensaje row">
                <img src="https://www.jdevoto.cl/web/wp-content/uploads/2018/04/default-user-img.jpg" class="col-md-2" alt="Cliente" srcset="">
                <div class="col-md-10">
                    <p class="mensaje_cerrado">
                        <span>
                            Astrid27 le fue asignado un reciclador el dia 23/04/2020 a las 8:36 am
                        </span>
                        <br>
                        <span>Reciclador asignado fue: Antonio Marìn</span>
                        <br>
                        <span class="ver-mas">Ver más</span>
                    </p>
                    <p class="mensaje_abierto">
                        <span>Astrid27 le fue asignado un reciclador el dia 21/04/2020 a las 8:36 am</span>
                        <br>
                        <span>Información del usuario:</span>
                        <br>
                        <span>Dirección de vivienda: </span>
                        Carrera 31 A #42-27 en Medellín Antioquia
                        <br>
                        <span>Recolección de residuos: </span>
                        Tocar el timbre
                        <br>
                        <span>
                            Reciclador asignado fue: 
                        </span>
                        Antionio Marìn
                        <br>
                        <span class="ver-menos">Ver menos</span>
                    </p>
                </div>
            </section>
            <section class="mensaje row">
                <img src="https://www.jdevoto.cl/web/wp-content/uploads/2018/04/default-user-img.jpg" class="col-md-2 order-last" alt="Cliente" srcset="">
                <div class="col-md-10">
                    <p class="mensaje_cerrado">
                        <span>
                            Astrid27 le fue asignado un reciclador el dia 23/04/2020 a las 8:36 am
                        </span>
                        <br>
                        <span>Reciclador asignado fue: Antonio Marìn</span>
                        <br>
                        <span class="ver-mas">Ver más</span>
                    </p>
                    <p class="mensaje_abierto">
                        <span>Astrid27 le fue asignado un reciclador el dia 21/04/2020 a las 8:36 am</span>
                        <br>
                        <span>Información del usuario:</span>
                        <br>
                        <span>Dirección de vivienda: </span>
                        Carrera 31 A #42-27 en Medellín Antioquia
                        <br>
                        <span>Recolección de residuos: </span>
                        Tocar el timbre
                        <br>
                        <span>
                            Reciclador asignado fue: 
                        </span>
                        Antionio Marìn
                        <br>
                        <span class="ver-menos">Ver menos</span>
                    </p>
                </div>
            </section>
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
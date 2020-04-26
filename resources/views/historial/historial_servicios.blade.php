@extends('nav')

@section('head')
    <link rel="stylesheet" href="/css/notifications.css">
@endsection

@section('conteint')
    <main class="container contenedor">
        <header>
            <h1 class="title">Mi conmunidad</h1>
        </header>
        <nav>
            <a href="/comunidad/solicitudes">
                <button type="button" class="btn float-right btnSelected">Solicitudes</button>
            </a>
            <a href="/comunidad/mapa">
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
            <h3 class="titulo_menor">Mensajes por responder</h3>
            <section class="mensaje row">
                <img src="https://www.jdevoto.cl/web/wp-content/uploads/2018/04/default-user-img.jpg" class="col-md-2" alt="Cliente" srcset="">
                <div class="col-md-9">
                    <p class="mensaje_cerrado">
                        Alguien envío un mensaje 
                        <br>
                        <span>El dia 07/04/2020 a las 4:34 pm</span>
                        <br>
                        <span class="ver-mas">Ver más</span>
                    </p>
                    <p class="mensaje_abierto">
                        Alguien solicitó recoleccion de "plastico"
                        <br>
                        Mensaje del usuario: 
                        <br>
                        Actualmente dispongo de mucho plastico para entregar. Estoy en algun lado.
                        <br>
                        <span>El dia 07/04/2020 a las 4:34 pm</span>
                        <br>
                        ¿Ya realizaste esta accion?
                        <button type="button" class="btn btn-success">Si</button>
                        <button type="button" class="btn btn-success">No</button>
                        <br>
                        <span class="ver-menos">Ver menos</span>
                    </p>
                </div>
                <img class="col-md-1 alerta" src="https://www.nicepng.com/png/detail/61-613537_exclamation-point-png-signo-de-admiracion-rojo.png" alt="Alerta" srcset="">
            </section>
            <section class="mensaje row">
                <img src="https://www.jdevoto.cl/web/wp-content/uploads/2018/04/default-user-img.jpg" class="col-md-2 order-last" alt="Cliente" srcset="">
                <div class="col-md-9">
                    <p class="mensaje_cerrado">
                        Alguien envío un mensaje
                        <br>
                        <span>El dia 07/04/2020 a las 4:34 pm</span>
                        <br>
                        <span class="ver-mas">Ver más</span>
                    </p>
                    <p class="mensaje_abierto">
                        Alguien solicitó recoleccion de "plastico"
                        <br>
                        Mensaje del usuario: 
                        <br>
                        Actualmente dispongo de mucho plastico para entregar. Estoy en algun lado.
                        <br>
                        <span>El dia 07/04/2020 a las 4:34 pm</span>
                        <br>
                        ¿Ya realizaste esta accion?
                        <button type="button" onclick="alert('Realizaste la acción de alguien')" class="btn btn-success">Si</button>
                        <button type="button" class="btn btn-success">No</button>
                        <br>
                        <span class="ver-menos">Ver menos</span>
                    </p>
                </div>
                <img class="col-md-1 alerta order-first" src="https://www.nicepng.com/png/detail/61-613537_exclamation-point-png-signo-de-admiracion-rojo.png" alt="Alerta" srcset="">
            </section>
            
            <h3 class="titulo_menor">Acciones realizadas</h3>
            <section class="mensaje row">
                <img src="https://www.jdevoto.cl/web/wp-content/uploads/2018/04/default-user-img.jpg" class="col-md-2" alt="Cliente" srcset="">
                <div class="col-md-10">
                    <p class="mensaje_cerrado">
                        Alguien envío un mensaje
                        <br>
                        <span class="titulo_menor">
                            El dia 07/04/2020 a las 4:34 pm y la accion fue realizada el 01/04/03
                        </span>
                        <br>
                        <span class="ver-mas">Ver más</span>
                    </p>
                    <p class="mensaje_abierto">
                        Alguien solicitó recoleccion de "plastico"
                        <br>
                        Mensaje del usuario: 
                        <br>
                        Actualmente dispongo de mucho plastico para entregar. Estoy en algun lado.
                        <br>
                        <span class="titulo_menor">
                            El dia 07/04/2020 a las 4:34 pm y la accion fue realizada el 01/04/03
                        </span>
                        <br>
                        <span class="ver-menos">Ver menos</span>
                    </p>
                </div>
            </section>
            <section class="mensaje row">
                <img src="https://www.jdevoto.cl/web/wp-content/uploads/2018/04/default-user-img.jpg" class="col-md-2 order-last" alt="Cliente" srcset="">
                <div class="col-md-10 order-first">
                    <p class="mensaje_cerrado">
                        Alguien envío un mensaje
                        <br>
                        <span class="titulo_menor">
                            El dia 07/04/2020 a las 4:34 pm y la accion fue realizada el 01/04/03
                        </span>
                        <br>
                        <span class="ver-mas">Ver más</span>
                    </p>
                    <p class="mensaje_abierto">
                        Alguien solicitó recoleccion de "plastico"
                        <br>
                        Mensaje del usuario: 
                        <br>
                        Actualmente dispongo de mucho plastico para entregar. Estoy en algun lado.
                        <br>
                        <span class="titulo_menor">
                            El dia 07/04/2020 a las 4:34 pm y la accion fue realizada el 01/04/03
                        </span>
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
        const select = document.getElementsByTagName("select")[0];
        const forms = document.getElementsByTagName("form");
        for(let i=1; i<forms.length; i++){
            forms[i].style.display = "none";
        }
        select.addEventListener("change", function(e){
            for(let i=0; i<forms.length; i++){
                forms[i].style.display = "none";
            }
            document.getElementById(e.target.value).style.display = "inline-block";
        });
    </script>
@endsection
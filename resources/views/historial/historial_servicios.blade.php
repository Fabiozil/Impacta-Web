@extends('../templateWithNav')

@section('title', 'Historial')

@section('content')
    <main class="container contenedor">
        <header>
            <h1 class="title">Historial</h1>
        </header>
        <nav>
            <a href="/historial/comunidad">
                <button type="button" class="btn float-right">Comunidad</button>
            </a>
            <a href="/historial/servicios">
                <button type="button" class="btn float-right btnSelected">Servicios</button>
            </a>
        </nav>
        <section class="mensajes_container">
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
                <img class="col-md-1" src="https://www.nicepng.com/png/detail/61-613537_exclamation-point-png-signo-de-admiracion-rojo.png" alt="Alerta" srcset="">
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
                        <button type="button" class="btn btn-success">Si</button>
                        <button type="button" class="btn btn-success">No</button>
                        <br>
                        <span class="ver-menos">Ver menos</span>
                    </p>
                </div>
                <img class="col-md-1 order-first" src="https://www.nicepng.com/png/detail/61-613537_exclamation-point-png-signo-de-admiracion-rojo.png" alt="Alerta" srcset="">
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
@endsection
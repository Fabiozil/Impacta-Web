@extends('nav.nav')

@section('content')

  <main class="container contenedor">
        <header>
            <h1 class="title">Resultados de la búsqueda</h1>
        </header>
 
        <section class="mensajes_container">
            <div class="row">
                <h3 class="col-md-4 offset-md-1"> -- usuarios encontrados</h3>
            
            </div>
     
            <section class="mensaje row">
                <img src="https://www.jdevoto.cl/web/wp-content/uploads/2018/04/default-user-img.jpg" class="col-md-2 order-first" alt="Cliente" srcset="">
                <div class="col-md-10 order-last">
                    <p> 
                        <h1>Nombre de casa o unidad residencial</h1>
                        <br>
                        A 0 km de ti
                        <br>
                        <span>Vivienda particular</span>
                        <a href="/"><button type="button" class="btn green btnSelected">Perfil</button></a>
                        <a href="/"><button type="button" class="btn green btnSelected">Ver en mapa >></button></a>
                    </p>
                </div>
            </section>
            <section class="mensaje row">
                <img src="https://www.jdevoto.cl/web/wp-content/uploads/2018/04/default-user-img.jpg" class="col-md-2 order-last" alt="Cliente" srcset="">
                <div class="col-md-10 order-first">
                    <p> 
                        <h1>Nombre de casa o unidad residencial</h1>
                        <br>
                        A 0 km de ti
                        <br>
                        <span>Unidad residencial</span>
                        <a href="/"><button type="button" class="btn green btnSelected">Perfil</button></a>
                        <a href="/"><button type="button" class="btn green btnSelected">Ver en mapa >></button></a>
                    </p>
                </div>
            </section>
            <section class="mensaje row">
                <img src="https://www.jdevoto.cl/web/wp-content/uploads/2018/04/default-user-img.jpg" class="col-md-2 order-first" alt="Cliente" srcset="">
                <div class="col-md-10 order-last">
                    <p> 
                        <h1>Nombre de casa o unidad residencial</h1>
                        <br>
                        A 0 km de ti
                        <br>
                        <span>Vivienda particular</span>
                        <a href="/"><button type="button" class="btn green btnSelected">Perfil</button></a>
                        <a href="/"><button type="button" class="btn green btnSelected">Ver en mapa >></button></a>
                    </p>
                </div>
            </section>
            <section class="mensaje row">
                <img src="https://www.jdevoto.cl/web/wp-content/uploads/2018/04/default-user-img.jpg" class="col-md-2 order-first" alt="Cliente" srcset="">
                <div class="col-md-10 order-last">
                    <p> 
                        <h1>Nombre de casa o unidad residencial</h1>
                        <br>
                        A 0 km de ti
                        <br>
                        <span>Vivienda particular</span>
                        <a href="/"><button type="button" class="btn green btnSelected">Perfil</button></a>
                        <a href="/"><button type="button" class="btn green btnSelected">Ver en mapa >></button></a>
                    </p>
                </div>
            </section>

            </section>
    </main>
    @endsection
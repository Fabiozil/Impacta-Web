@extends('nav')

@section('conteint')

  <main class="container contenedor">
        <header>
            <h1 class="title">Resultados de la búsqueda</h1>
            
        </header>
 
        <section class="mensajes_container">
            <div class="row">
                <h3 class="col-md-4 offset-md-1"> -- usuarios encontrados</h3>
            </div>
            <br>
           
            <section class="mensaje row">
                <img src="/icons/user.png" class="col-md-2 order-first" alt="Usuario" srcset="">
                <div class="col-md-10 order-last">
                    <p> 
                        <h2>Nombre de casa o unidad residencial</h1>
                        <br>
                        A 0 km de ti
                        <br>
                        <span>Vivienda particular</span>
                        <a href="/DatosUsuario"><button type="button" class="btn green btnSelected">Perfil</button></a>
                        <a href="/"><button type="button" class="btn green btnSelected">Ver en mapa >></button></a>
                    </p>
                </div>
            </section>
            <br>
            <section class="mensaje row">
                <img src="/icons/user.png" class="col-md-2 order-first" alt="Usuario" srcset="">
                <div class="col-md-10 order-first">
                    <p> 
                        <h2>Nombre de casa o unidad residencial</h1>
                        <br>
                        A 0 km de ti
                        <br>
                        <span>Unidad residencial</span>
                        <a href="/DatosUsuario"><button type="button" class="btn green btnSelected">Perfil</button></a>
                        <a href="/"><button type="button" class="btn green btnSelected">Ver en mapa >></button></a>
                    </p>
                </div>
            </section>
            <br>
            <section class="mensaje row">
                <img src="/icons/user.png" class="col-md-2 order-first" alt="Usuario" srcset="">
                <div class="col-md-10 order-last">
                    <p> 
                        <h2>Nombre de casa o unidad residencial</h1>
                        <br>
                        A 0 km de ti
                        <br>
                        <span>Vivienda particular</span>
                        <a href="/DatosUsuario"><button type="button" class="btn green btnSelected">Perfil</button></a>
                        <a href="/"><button type="button" class="btn green btnSelected">Ver en mapa >></button></a>
                    </p>
                </div>
            </section>
           

            </section>
            
    </main>
    @endsection
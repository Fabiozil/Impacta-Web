@extends('temp_with_nav')

@section('content')
    <main class="container contenedor">
        <header>
            <h1 class="title">Notificaciones</h1>
        </header>
        <nav>
            <a href="/notificaciones/automaticas"><button type="button" class="btn green btnSelected">Automáticas</button></a>
            <a href="/notificaciones/manuales"><button type="button" class="btn green">Manuales</button></a>
        </nav>
        <section class="mensajes_container">
            <div class="row">
                <h3 class="col-md-4 offset-md-1">Buscar mensajes por: </h3>
                <select class="form-control col-md-6">
                    <option value="fecha" selected>Fecha</option>
                    <option value="nombre">Nombre</option>
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
            <form id="nombre" method="POST" action="" class="buscador">
                @csrf
                <input type="text" name="nombre" placeholder="Ingrese el nombre que desea buscar" class="form-control">
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
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit, cumque velit? Delectus, sit deserunt accusantium, suscipit sint recusandae sapiente assumenda distinctio tempore nisi possimus fugiat nesciunt veritatis molestias neque aperiam dolorum? Temporibus modi sint eos, ad libero praesentium quia voluptates officiis iusto fuga, dolor nostrum, explicabo debitis id expedita suscipit.
                        <br>
                        <span>Enviado el dia 07/04/2020 a las 4:34 pm</span>
                        <br>
                        <span class="titulo_menor">Mensaje manual</span>
                    </p>
                </div>
            </section>
            <section class="mensaje row">
                <img src="https://www.jdevoto.cl/web/wp-content/uploads/2018/04/default-user-img.jpg" class="col-md-2 order-last" alt="Cliente" srcset="">
                <div class="col-md-10 order-first">
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit, cumque velit? Delectus, sit deserunt accusantium, suscipit sint recusandae sapiente assumenda distinctio tempore nisi possimus fugiat nesciunt veritatis molestias neque aperiam dolorum? Temporibus modi sint eos, ad libero praesentium quia voluptates officiis iusto fuga, dolor nostrum, explicabo debitis id expedita suscipit.
                        <br>
                        <span>Enviado el dia 07/04/2020 a las 4:34 pm</span>
                        <br>
                        <span class="titulo_menor">Mensaje automatico</span>
                    </p>
                </div>
            </section>
            <section class="mensaje row">
                <img src="https://www.jdevoto.cl/web/wp-content/uploads/2018/04/default-user-img.jpg" class="col-md-2 order-first" alt="Cliente" srcset="">
                <div class="col-md-10 order-last">
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit, cumque velit? Delectus, sit deserunt accusantium, suscipit sint recusandae sapiente assumenda distinctio tempore nisi possimus fugiat nesciunt veritatis molestias neque aperiam dolorum? Temporibus modi sint eos, ad libero praesentium quia voluptates officiis iusto fuga, dolor nostrum, explicabo debitis id expedita suscipit.
                        <br>
                        <span>Enviado el dia 07/04/2020 a las 4:34 pm</span>
                        <br>
                        <span class="titulo_menor">Mensaje manual</span>
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
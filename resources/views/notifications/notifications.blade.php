@extends('../templateWithNav')

@section('title', 'Notificaciones')

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
                    <option selected>Fecha</option>
                    <option>Nombre</option>
                </select>
            </div>
            <section class="buscador">
                <p>De <input type="date"> al <input type="date"></p>
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
            <!--
            {{--@foreach ($notifications as $notification)--}}
                <section class="mensaje row">
                    <img src="https://www.jdevoto.cl/web/wp-content/uploads/2018/04/default-user-img.jpg" 
                        class="col-md-2 order-{{--$loop -> even == true ? 'last' : 'first'--}}" alt="Cliente" srcset="">
                    <div class="col-md-10 {{--$loop -> even == true ? 'first' : 'last'--}}">
                        <p>
                            {{--$notification -> body--}}
                            <br>
                            <span>El dia 07/04/2020 a las 4:34 pm</span>
                        </p>
                    </div>
                </section>
            {{--@endforeach--}}
            -->
        </section>
    </main>

@endsection
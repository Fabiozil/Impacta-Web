@extends('nav.nav')

@section('conteint')

    <main class="container contenedor">
        <header>
            <h1 class="title">Historial</h1>
        </header>
        <nav>
                <a href="/historial/comunidad">
                    <button type="button" class="btn float-right btnSelected">Comunidad</button>
                </a>
                <a href="/historial/servicios">
                    <button type="button" class="btn float-right">Servicios</button>
                </a>
            </nav>
        <section class="mensajes_container">
            <section class="mensaje row">
                <img src="https://www.jdevoto.cl/web/wp-content/uploads/2018/04/default-user-img.jpg" class="col-md-2" alt="Cliente" srcset="">
                <div class="col-md-10">
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit, cumque velit? Delectus, sit deserunt accusantium, suscipit sint recusandae sapiente assumenda distinctio tempore nisi possimus fugiat nesciunt veritatis molestias neque aperiam dolorum? Temporibus modi sint eos, ad libero praesentium quia voluptates officiis iusto fuga, dolor nostrum, explicabo debitis id expedita suscipit.
                        <br>
                        <span>El dia 07/04/2020 a las 4:34 pm</span>
                    </p>
                </div>
            </section>
            <section class="mensaje row">
                <img src="https://www.jdevoto.cl/web/wp-content/uploads/2018/04/default-user-img.jpg" class="col-md-2 order-last" alt="Cliente" srcset="">
                <div class="col-md-10 order-first">
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit, cumque velit? Delectus, sit deserunt accusantium, suscipit sint recusandae sapiente assumenda distinctio tempore nisi possimus fugiat nesciunt veritatis molestias neque aperiam dolorum? Temporibus modi sint eos, ad libero praesentium quia voluptates officiis iusto fuga, dolor nostrum, explicabo debitis id expedita suscipit.
                        <br>
                        <span>El dia 07/04/2020 a las 4:34 pm</span>
                    </p>
                </div>
            </section>
            <section class="mensaje row">
                <img src="https://www.jdevoto.cl/web/wp-content/uploads/2018/04/default-user-img.jpg" class="col-md-2" alt="Cliente" srcset="">
                <div class="col-md-10">
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit, cumque velit? Delectus, sit deserunt accusantium, suscipit sint recusandae sapiente assumenda distinctio tempore nisi possimus fugiat nesciunt veritatis molestias neque aperiam dolorum? Temporibus modi sint eos, ad libero praesentium quia voluptates officiis iusto fuga, dolor nostrum, explicabo debitis id expedita suscipit.
                        <br>
                        <span>El dia 07/04/2020 a las 4:34 pm</span>
                    </p>
                </div>
            </section>
        </section>
    </main>

@endsection
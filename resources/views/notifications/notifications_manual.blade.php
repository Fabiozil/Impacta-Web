@extends('temp_with_nav')

@section('content')
    <main class="container contenedor">
        <header>
            <h1 class="title">Mensaje manual</h1>
        </header>
        <section class="manual">
            <button type="button" id="n_mnsj" class="btn btn-info">Nuevo mensaje</button>
            <form action="">
                <textarea name="Mensaje" id="" cols="30" rows="10" placeholder=""></textarea>
                <label for="sectores">¿Qué sectores? </label>
                <select name="sector" id="sectores">
                    <option value="default">Default</option>
                </select>
                <input type="checkbox" name="reglas" id="regla1">
                <br>
                <label for="reciclador">¿Usuarios por reciclador? Usuarios de </label>
                <select name="sector" id="reciclador">
                    <option value="default">reciclador</option>
                </select>
                <input type="checkbox" name="reglas" id="regla1">
                <br>
                <label for="fecha">¿Cuándo lo deseas enviar?</label>
                <input name="fecha" id="fecha" type="date"><input type="time" name="hora">
                <input type="checkbox" name="reglas" id="regla1">
            </form>
            <h3 class="titulo_menor">Mensajes por responder</h3>
            <section class="mensajes_container">
                <section class="mensaje row">
                    <p class="col-md-12">
                        aoisdjioajsd
                        <br>
                        <span>
                            Enviado el día
                        </span>
                        <span class="titulo_menor">Mensaje manual</span>
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
    </main>
    <script>
        const boton = document.getElementById("n_mnsj");
        const form = document.getElementsByTagName("form")[0];
        boton.addEventListener("click", function(){
            form.style.display = "block";
        });
    </script>
@endsection
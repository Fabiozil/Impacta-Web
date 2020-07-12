@extends('layouts.app')

@section('content')
<div class="container">
    <div class="py-5 text-center titulo">
        <h1 class="text-success">Ingresar nuevo(a) reciclador(a)</h1>
        <p class="lead">Utiliza los campos a continuación para ingresar la información necesaria para crear nuevo
            reciclador
            en el sistema. Para confirmar tus cambios por favor presiona el botón de aceptar al final de la página.</p>
    </div>
</div>
<form action="{{route('recyclers.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-12 borde-derecha h-100">
                        <div class="row h-100">
                            <div class="container h-80 cont-rec">
                                <div class="row">
                                    <div class="col-xl-12 mb-3">
                                        <div class="container">
                                            <div class="py-5 text-center subtitle">
                                                <h2>Mi perfil</h2>
                                            </div>
                                            <div class="text-center ">
                                                <img id="imgSalida"
                                                    class="imgRecycler bg-white border border-success rounded-circle w-100"
                                                    src="{{ asset('user-alt-solid.svg') }}" />
                                                <label class="mt-2">Carga una foto de perfil para tu reciclador(a).</label>
                                            </div>
                                            <div class="input-group ">
                                                <div class="input-group-prepend">
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" name="foto"
                                                        class="custom-file-input @error('foto') is-invalid @enderror"
                                                        id="file-input" aria-describedby="inputGroupFileAddon01">
                                                    @error('foto')
                                                    <div class="invalid-tooltip">{{ $message }}</div>
                                                    @enderror
                                                    <label class="custom-file-label"
                                                        for="inputGroupFile01">Archivo</label>
                                                </div>
                                            </div>
                                            <label>Capacidad maxima: 2048Kb</label><br>
                                            <small>
                                                <ul>
                                                    <li>La foto debe ser .JPG o .PNG</li>
                                                    <li>La foto debe ser en lo posible cuadrada</li>
                                                </ul>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-12 borde-derecha">
                        <div class="container">
                            <div class="row bg-light mt-3">
                                <div class="col-xl-12">
                                    <div class="py-5 subtitle">
                                        <h2>Mis datos personales</h2>
                                        <p class="lead"> Utiliza los campos a continuación para ingresar la información
                                            referente a
                                            los datos personales del(a) nuevo(a) reciclador(a).</p>
                                    </div>
                                </div>

                            </div>
                            <div class="row bg-light ">
                                <div class="col-xl-12 my-3">
                                    <div class="form-group w-100">
                                        <div class="form-group row">
                                            <label for="nombres" class="col-sm-2 col-form-label">Nombre</label>
                                            <div class="col-sm-10">
                                                <div class="input-group mb-2">
                                                    <input type="text" name="nombres"
                                                        class="form-control @error('nombres') is-invalid @enderror"
                                                        id="nombres" placeholder="James David"
                                                        value="{{ old('nombres') }}">
                                                    <div class="input-group-append">
                                                        <span class="btn btn-info" data-toggle="tooltip"
                                                            data-placement="top" title="Registra el
                                                    primer y segundo nombre (si aplica) de tu reciclador como en
                                                    el ejemplo.">
                                                            <i class="fas fa-info-circle"></i></span>
                                                    </div>
                                                    @error('nombres')
                                                    <div class="invalid-tooltip">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="apellidos" class="col-sm-2 col-form-label">Apellido</label>
                                            <div class="col-sm-10">
                                                <div class="input-group mb-2">
                                                    <input type="text" name="apellidos"
                                                        class="form-control @error('apellidos') is-invalid @enderror"
                                                        id="apellidos" placeholder="Rodriguez Rubio"
                                                        value="{{ old('apellidos') }}">
                                                    <div class="input-group-append">
                                                        <span class="btn btn-info" data-toggle="tooltip"
                                                            data-placement="top" title="Registra el
                                                    apellido teniendo en cuenta el uso de mayúsculas y buena
                                                    ortografía.">
                                                            <i class="fas fa-info-circle"></i></span>
                                                    </div>
                                                    @error('apellidos')
                                                    <div class="invalid-tooltip">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="apodo" class="col-sm-2 col-form-label">Apodo</label>
                                            <div class="col-sm-10">
                                                <div class="input-group mb-2">
                                                    <input type="text" name="apodo"
                                                        class="form-control @error('apodo') is-invalid @enderror"
                                                        id="apodo" placeholder="James" value="{{ old('apodo') }}">
                                                    <div class="input-group-append">
                                                        <span class="btn btn-info" data-toggle="tooltip"
                                                            data-placement="top"
                                                            title="Si tu reciclador prefiere ser llamado por su apodo por favor ingresa el apodo correspondiente.">
                                                            <i class="fas fa-info-circle"></i></span>
                                                    </div>
                                                    @error('apodo')
                                                    <div class="invalid-tooltip">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="fecha_nacimiento" class="col-sm-2 col-form-label">Fecha de
                                                Nacimiento</label>
                                            <div class="col-sm-10">

                                                <input type="date" name="fecha_nacimiento"
                                                    class="form-control @error('fecha_nacimiento') is-invalid @enderror"
                                                    id="fecha_nacimiento" placeholder="28" value="1985-07-22"
                                                    min="1900-01-01" max="2000-01-01"
                                                    value="{{ old('fecha_nacimiento') }}">
                                                @error('fecha_nacimiento')
                                                <div class="invalid-tooltip">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="edad" class="col-sm-2 col-form-label">Edad</label>
                                            <div class="col-sm-10">

                                                <input type="number" name="edad"
                                                    class="form-control @error('edad') is-invalid @enderror" id="edad"
                                                    placeholder="28" min="20" max="100" value="{{ old('edad') }}">
                                                @error('edad')
                                                <div class="invalid-tooltip">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="celular" class="col-sm-2 col-form-label">Celular</label>
                                            <div class="col-sm-10">
                                                <div class="input-group mb-2">
                                                    <input type="text" name="celular"
                                                        class="form-control  @error('celular') is-invalid @enderror"
                                                        id="celular" placeholder="3102020540"
                                                        value="{{ old('celular') }}">
                                                    <div class="input-group-append">
                                                        <span class="btn btn-info" data-toggle="tooltip"
                                                            data-placement="top"
                                                            title="Registra los diez dígitos del número celular de tu reciclador sin espacios intermedios. P. ej. 3041112233">
                                                            <i class="fas fa-info-circle"></i></span>
                                                    </div>
                                                    @error('celular')
                                                    <div class="invalid-tooltip">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-7 col-lg-12 col-md-12 borde-derecha">
            <div class="row h-100">
                <div class="container cont-rec m-100">
                    <div class="col-xl-12">
                        <div class="py-5 subtitle">
                            <h2>Mi labor</h2>
                            <p class="lead">Utiliza los campos a continuación para ingresar la información referente a
                                los materiales que recolecta el(la) reciclador(a) y a las zonas y horarios en que trabaja.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="container cont-rec-nf">
                            <div class="col-xl-12 h-100">
                                <div class="row align-items-center">
                                    <div class="col-xl-12">
                                        <h5>Materiales que recolecto
                                            <button class="btn btn-info" type="button" data-toggle="tooltip"
                                                data-placement="right" title="Para agregar un material a la lista de materiales que el reciclador recicla, selecciona un material de la lista a continuación y presiona el botón agregar.
                                            ">
                                                <i class="fas fa-info-circle"></i>
                                            </button>
                                        </h5>

                                        <div class="input-group">
                                            <select class="custom-select  @error('residuos') is-invalid @enderror"
                                                id="residuo" aria-label="Example select with button addon">
                                                @foreach ($materiales as $material)
                                                <option value="{{$material->id}}">
                                                    {{$material->nombre.': '.$material->nombresub}}</option>
                                                @endforeach
                                            </select>
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-success" type="button"
                                                    id="boton_agregar_residuo">Agregar
                                                </button>
                                            </div>
                                            @error('residuos')
                                            <div class="invalid-tooltip">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <table class="table table-borderless table-hover table-light mt-2 "
                                            id="Tlista_residuos">
                                            <thead>
                                                <tr>
                                                    <th class="col-md-9" scope="col">Residuos</th>
                                                    <th class="col-md-3" scope="col"></th>
                                                </tr>
                                            </thead>
                                            <tbody id="Blista_residuos">
                                                <tr>
                                                    <th colspan="2">No hay residuos seleccionados</th>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <h5>Zonas de recoleccion
                                    <button class="btn btn-info" type="button" data-toggle="tooltip"
                                        data-placement="right" title="Utiliza los campos a continuación para ingresar la información referente a las zonas (municipio, comuna, barrio) y horarios en los que trabaja el reciclador, luego presiona el botón añadir.
                                    ">
                                        <i class="fas fa-info-circle"></i>
                                    </button>
                                </h5>
                                <div class="row">
                                    <div class="col-xl-12 mb-1">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6 col-md-12">
                                                <div class="form-group mt-1">
                                                    <label for="municipio">Municipios</label>
                                                    <select
                                                        class="custom-select  @error('sectors') is-invalid @enderror"
                                                        id="municipio" aria-label="Example select with button addon">
                                                        @foreach ($municipios as $mun)
                                                        <option value="{{$mun->id}}">{{$mun->nombre_mun}}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('sectors')
                                                    <div class="invalid-tooltip">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-12">
                                                <div class="form-group mt-1">
                                                    <label for="comuna">Comunas</label>
                                                    <select
                                                        class="custom-select  @error('sectors') is-invalid @enderror"
                                                        id="comuna" aria-label="Example select with button addon">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6 col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="sector">Sectores</label>
                                            <select class="custom-select @error('sectors') is-invalid @enderror "
                                                id="sector" aria-label="Example select with button addon">

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-12">
                                        <p>Día:</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="lunes"
                                                        value="L">
                                                    <label class="custom-control-label" for="lunes">Lunes</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="martes"
                                                        value="M">
                                                    <label class="custom-control-label" for="martes">Martes</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="miercoles"
                                                        value="X">
                                                    <label class="custom-control-label"
                                                        for="miercoles">Miercoles</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="jueves"
                                                        value="J">
                                                    <label class="custom-control-label" for="jueves">Jueves</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="viernes"
                                                        value="V">
                                                    <label class="custom-control-label" for="viernes">Viernes</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="sabado"
                                                        value="S">
                                                    <label class="custom-control-label" for="sabado">Sabado</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="domingo"
                                                        value="D">
                                                    <label class="custom-control-label" for="domingo">Domingo</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="Hinit">Hora Inicio</label>
                                            <input type="time" class="form-control" id="Hinit" value="07:00" min="07:00"
                                                max="20:00">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                        <div class="form-group ">
                                            <label for="Hfinal">Hora fin</label>
                                            <input type="time" class="form-control" id="Hfinal" value="20:00"
                                                min="07:00" max="20:00">
                                        </div>
                                    </div>
                                </div>
                                <div class="row table-responsive m-1">
                                    <button id="addGeo" class="btn btn-success btn-block" type="button">Añadir</button>
                                    <div id="alerta_sector" class="alert alert-warning  d-nonei my-2">
                                        <strong>Atenci&oacute;n!</strong>
                                        Valide que est&eacute; ingresando al menos un d&iacute;a de la semana<br>
                                        y que los campos de Hora inicio y Hora fin esten llenos
                                    </div>
                                    <table class="table table-borderless table-hover table-light mt-2 " id="datosZona">
                                        <thead>
                                            <tr>
                                                <th class="col-md-5" scope="col">Sector</th>
                                                <th class="col-md-2" scope="col">Dias</th>
                                                <th class="col-md-3" scope="col">Horario</th>
                                                <th class="col-md-3" scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody id="lista">
                                            <tr>
                                                <th colspan="4">No hay zonas asignadas</th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-5 col-lg-12 col-md-12">
            <div class="row h-100">
                <div class="col-xl-12">
                    <div class="row borde-derecha">
                        <div class="container cont-rec h-100">
                            <div class="py-5 subtitle">
                                <h2>Mi historia</h2>
                                <p class="lead">Utiliza el campo de texto a continuación para ingresar la historia de tu
                                    nuevo reciclador.</p>
                            </div>
                            <div class="container h-100">
                                <div class="input-group h-100">
                                    <textarea name="historia"
                                        class="form-control  @error('historia') is-invalid @enderror" rows="15"
                                        placeholder="Historia">{{ old('historia') }}</textarea>
                                    @error('historia')
                                    <div class="invalid-tooltip">{{ $message }}</div>
                                    @enderror

                                </div>
                                <small id="emailHelp" class="form-text text-muted">Aquí te damos cinco consejos para que
                                    crees la historia de tu reciclador(a):
                                    1. Describe características demográficas como su lugar de procedencia.
                                    2. Menciona el tiempo que lleva dedicado a su profesión.
                                    3. Menciona una razón de trasfondo diferente a obtener un ingreso económico por la
                                    cual tu reciclador(a) realiza su labor.
                                    4. Comunicar ¿cómo la comunidad puede aportar a facilitar su trabajo?
                                    5.Transmitir el impacto que tiene la ayuda de la comunidad en la vida del(a)
                                    reciclador(a).
                                </small>
                            </div>
                            <div class="row align-items-center justify-content-end">
                                <a href="{{ url('/recicladores') }}">
                                    <button  class="btn btn-danger mr-1 mb-2">Volver</button>
                                </a>
                                <a href="{{ url('/recicladores') }}">
                                <button class="btn btn-success mr-2 mb-2">Registrar</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    </div>
</form>

@endsection
@section('script')
<script src="{{ asset('js/dropdown.js') }}"></script>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#imgSalida').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
    }

    $("#file-input").change(function () {
        readURL(this);
    });

</script>
<script>
    var path = "{!!config('app.url') !!}/";
    var countR = 0;
    $('#boton_agregar_residuo').click(function () {
        if (countR == 0) $('#Blista_residuos').children().remove();
        countR++;
        if (countR == 8) $(this).prop('disabled', true);
        $('#Blista_residuos').append(
            $('<tr>')
            .append(
                $('<td>').text($('#residuo option:selected').text().trim())
                .append(
                    $('<input>').attr('type', 'text').attr('name', 'residuos[]').prop('hidden', true).val($(
                        '#residuo').val())
                )
            )
            .append(
                $('<td>')
                .append(
                    $('<button>').attr('type', 'button').attr('id', 'deleteRow').addClass('btn btn-danger')
                    .append(
                        $('<i>').addClass('fas fa-trash-alt')
                    )
                )
            )
        )
    });
    $("#Tlista_residuos tbody").on("click", "#deleteRow", function () {
        $(this).parents("tr").hide("slow", function () {
            $(this).remove();
            countR--;
            if (countR === 0)
                $('#Blista_residuos').append($('<tr>').append($('<th>').attr('colspan', '2').text(
                    "No hay residuos seleccionados")))
            if (countR == 7)
                $('#boton_agregar_residuo').prop('disabled', false);
        });
    });
    var count = 0;
    $('#addGeo').click(function () {
        if (count == 0) $('#lista').children().remove();
        count++;
        if (validarCheckBoxes() && validarHora())
            $('#lista').append(
                $('<tr>')
                .append(
                    $('<td>').text($('#sector option:selected').text().trim())
                    .append(
                        $('<input>').attr('type', 'text').attr('name', 'sectors[]').prop('hidden', true).val($(
                            '#sector').val())
                    )
                )
                .append(
                    $('<td>').text(getCheckBoxes())
                    .append(
                        $('<input>').attr('type', 'text').attr('name', 'days[]').prop('hidden', true).val(
                            getCheckBoxes())
                    )
                )
                .append(
                    $('<td>').text(getDeltaTime())
                    .append(
                        $('<input>').attr('type', 'text').attr('name', 'times[]').prop('hidden', true).val(
                            getDeltaTime())
                    )
                )
                .append(
                    $('<td>')
                    .append(
                        $('<button>').attr('type', 'button').attr('id', 'deleteRow').addClass('btn btn-danger')
                        .append(
                            $('<i>').addClass('fas fa-trash-alt')
                        )
                    )
                )
            )
        else
            $('#alerta_sector').show("slow", function () {
                $(this).delay(8000).hide(2000);
            });
    });

    function getCheckBoxes() {
        let dias = "";
        $("input:checkbox:checked").each(function () {
            dias += $(this).val() + " ";
        });
        return dias;
    }

    function validarHora() {
        let status = $('#Hinit').val() !== "" && $('#Hfinal').val() !== "" ? true : false;
        return status;
    }

    function validarCheckBoxes() {
        let status = false;
        $("input:checkbox").each(function () {
            if ($(this).is(':checked')) {
                status = true;
            }
        });
        return status;
    }

    function getDeltaTime() {
        return $('#Hinit').val() + '-' + $('#Hfinal').val();
    }
    $("#datosZona tbody").on("click", "#deleteRow", function () {
        $(this).parents("tr").hide("slow", function () {
            $(this).remove();
            count--;
            if (count === 0)
                $('#lista').append($('<tr>').append($('<th>').attr('colspan', '4').text(
                    "No hay zonas asignadas")))
        });
    });

</script>
@endsection

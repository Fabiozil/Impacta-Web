@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="container">

                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="municipio">Municipios</label>
                                <select class="custom-select" id="municipio">
                                    @foreach ($municipios as $mun)
                                    <option value="{{$mun->id}}">{{$mun->nombre_mun}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="comuna">Comunas</label>
                                <select class="custom-select" id="comuna" placeholder="seleccione un municipio">

                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="sector">Sectores</label>
                                <select class="custom-select" id="sector"  placeholder="seleccione un municipio">

                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="Hinit">Hora Inicio</label>
                                <input type="time" class="form-control" id="Hinit"  value="07:00" min="07:00" max="20:00">
                              </div>
                              <div class="form-group col-md-3">
                                <label for="Hfinal">Hora fin</label>
                                <input type="time" class="form-control" id="Hfinal"  value="20:00" min="07:00" max="20:00">
                              </div>
                        </div>
                        <form action="{{route('recyclers.store')}}" method="post">
                            @csrf
                        <div class="form-row my-2 table-responsive">
                            <table class="table table-borderless table-hover " id="datosZona">
                                <thead>
                                    <tr>
                                        <th class="col-md-4" scope="col">Sector</th>
                                        <th class="col-md-2" scope="col">Dias</th>
                                        <th class="col-md-2" scope="col">Horario</th>
                                        <th class="col-md-4" scope="col"></th>
                                      </tr>
                                </thead>
                                <tbody  id="lista">

                                </tbody>
                            </table>
                        </div>
                        <div class="form-row my-2">
                              <div class="col-md-6">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" value="L" >
                                    <label class="custom-control-label" for="customCheck1">Lunes</label>
                                  </div>
                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck2" value="M" >
                                    <label class="custom-control-label" for="customCheck2">Martes</label>
                                  </div>
                                  <div class="custom-control custom-checkbox"><input type="checkbox"  class="custom-control-input"  id="Check1" value="X"><label for="Check1" class="custom-control-label">Miercoles</label></div>
                                  <div class="custom-control custom-checkbox"><input type="checkbox"  class="custom-control-input"  id="Check2" value="J"><label for="Check2" class="custom-control-label">Jueves</label></div>
                                  <div class="custom-control custom-checkbox"><input type="checkbox"  class="custom-control-input"  id="Check3" value="V"><label for="Check3" class="custom-control-label">Viernes</label></div>
                                  <div class="custom-control custom-checkbox"><input type="checkbox"  class="custom-control-input"  id="Check4" value="S"><label for="Check4" class="custom-control-label">Sabado</label></div>
                                  <div class="custom-control custom-checkbox"><input type="checkbox"  class="custom-control-input" id="Check5" value="D"><label for="Check5" class="custom-control-label">Domingo</label></div>
                                </div>
                                           </div>
                        <button class="btn btn-primary" type="submit">Submit form</button>
                        <button class="btn btn-success" type="button" onclick="add();">verificar</button>
                    </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var path="{!!config('app.url') !!}/";
</script>
@endsection
@section('script')
<script src="{{ asset('js/dropdown.js') }}"></script>
<script>

    function add(){
        $('#lista').append(
                $('<tr>')
                    .append(
                        $('<td>').text($('#sector option:selected').text().trim())
                            .append(
                                $('<input>').attr('type','text').attr('name','sectors[]').prop('hidden',true).val($('#sector').val())
                            )
                    )
                    .append(
                        $('<td>').text(getCheckBoxes())
                            .append(
                                    $('<input>').attr('type','text').attr('name','days[]').prop('hidden',true).val(getCheckBoxes())
                            )
                    )
                    .append(
                        $('<td>').text(getDeltaTime())
                            .append(
                                    $('<input>').attr('type','text').attr('name','times[]').prop('hidden',true).val(getDeltaTime())
                            )
                    )
                    .append(
                        $('<td>')
                            .append(
                                    $('<button>').attr('type','button').attr('id','deleteRow').addClass('btn btn-danger').append(
                                        $('<i>').addClass('fas fa-trash-alt')
                                    )
                            )
                    )
    )
    }

    function getCheckBoxes(){
        let dias="";
        $("input:checkbox:checked").each(function() {
            dias+= $(this).val()+" ";
        });
        return dias;
    }
    function getDeltaTime(){
        return $('#Hinit').val()+'-'+$('#Hfinal').val();
    }
    $( "#datosZona tbody" ).on("click","#deleteRow", function() {
        $(this).parents("tr").hide("slow",function() {
            $( this ).remove();
        });
    });
</script>
@endsection

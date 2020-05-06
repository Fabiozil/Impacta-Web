@extends('Reciclador.layout_reciclador')
@section('form-1')
        <div class="row" style="height: 60%">
            <div class="container" id="contenedor-formulario" style="margin: 5%; max-width: 1000%;">    
                <div class="col-12">
                    <div class="row">
                        <div class="col">
                            <div class="py-5 text-center" style="height: 20%; margin-bottom: 10px">
                                <h1>Operación exitosa</h1>
                                @yield("texto-confirm")
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center" style="max-height: 20%">
                            <i class="fas fa-check-circle" id="center-img" style="width: 20%;height: 20%"></i>
                    </div>
                    <div class="row">
                        <div class="col">
                            @yield("boton-redirigir")
                        </div>
                    </div>
                </div> 
            </div>
        </div>
@endsection
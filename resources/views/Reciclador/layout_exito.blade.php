@extends('Reciclador.layout_reciclador')
@section('form-1')
        <div class="row" style="height: 60%">
            <div class="container" id="contenedor-formulario" style="margin: 5%">    
                <div class="col-12">
                    <div class="row">
                        <div class="col">
                            <div class="py-5 text-center" style="height: 20%; margin-bottom: 10px">
                                <h1>Operacion exitosa</h1>
                                @yield("texto-confirm")
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center" style="max-height: 20%">
                            <img src="/icons/check.png" id="center-img" alt="check" style="max-width: 20%;max-height: 20%">
                    </div>
                    <div class="row">
                        <div class="col">
                            @yield("boton-redirigir")
                        </div>
                    </div>
                </div> 
                
               
        </div>
@endsection
@extends('layouts.app')
@section('content')
        <div class="row h-100 align-items-center">
            <div class="container m-5 main-cr cont-rec">    
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col">
                            <div class="py-5 text-center h-25 mb-2">
                                <h1 class="text-primary">Operación exitosa</h1>
                                @yield("texto-confirm")
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center justify-content-center mh-100 mw-100">
                        <div class="col-sm-6">
                            <i class="fas fa-check-circle rounded mx-auto d-block center-img h-25 w-25"></i>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            @yield("boton-redirigir")
                        </div>
                    </div>
                </div> 
            </div>
        </div>
@endsection
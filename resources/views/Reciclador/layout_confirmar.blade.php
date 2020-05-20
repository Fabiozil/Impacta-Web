@extends('layouts.app')
@section("content")
    <div class="row h-75">
        <div class="container main-cr cont-rec m-2">    
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="py-5 text-center h-25 mb-1">
                            @yield("operacion")
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-center">
                    <div class="col-sm-6">
                        <i class="fas fa-question-circle rounded mx-auto d-block center-img h-25 w-25"></i>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        @yield("redirigir")
                    </div>
                </div>
            </div> 
    </div>
@endsection
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
                                <select class="custom-select" id="sector" placeholder="seleccione un municipio">

                                </select>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script src="{{ asset('js/dropdown.js') }}"></script>
@endsection

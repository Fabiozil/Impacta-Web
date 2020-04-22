@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Confirma tu correo electrónico ') }}</div>


                <div class="card-body">

                {{ __('Antes de poder continuar, por favor, confirma tu correo electrónico con el enlace que te hemos enviado. Si no has recibido el email,')}}
                <a href="http://">pulsa aqui para que te enviemos otro</a>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

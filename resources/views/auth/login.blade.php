@extends('layouts.app')
@section('header')
 <!-- Recaptcha temporal  -->
 {!! htmlScriptTagJsApi([
    'action' => 'homepage',
    'custom_validation' => 'myCustomValidation'
]) !!}
@endsection
@section('content')
<div class=" d-flex justify-content-center align-content-center">
<div id="Contenedor" class=" col-4 container-fluid " style="height: 100vh">

    <div class="Icon d-flex justify-content-center align-content-center col-2">
               <!--Icono de usuario-->
               <i class="fal fa-user-alt" ></i>
               </div>
<div class="ContentForm">
        <form action="{{ route('login') }}" method="post" name="FormEntrar">
        @csrf
            <div class="input-group input-group-lg">
             <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-user"></i></span>
             <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="{{ __('E-Mail Address') }}" id="Usuario" aria-describedby="sizing-addon1" value="{{ old('email') }}" required autocomplete="email" autofocus>
             @error('email')
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                           @enderror
           </div>
           <br>
           <div class="input-group input-group-lg">
             <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-lock"></i></span>
             <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{ __('Password') }}" aria-describedby="sizing-addon1" required autocomplete="current-password">
             @error('password')
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                           @enderror
           </div>
           <div class="opcioncontra">
           @if (Route::has('password.request'))
                               <a class="" href="{{ route('password.request') }}">
                                   {{ __('Forgot Your Password?') }}
                               </a>
           @endif</div>


           <br>
           <!-- cambiar ingresar por acceder en el dic -->
           <div class=" d-flex justify-content-center align-content-center">
           <button class="btn btn-lg btn-primary btn-block btn-signin col-4" id="IngresoLog" type="submit">{{ __('Login') }}</button>
           </div>
           <br>
           <!-- hay que preguntar si se registra como persona o corporacion -->
           <div class="opcioncontra"><a href="{{ route('register') }}">{{ __('Register') }}</a></div>
        </form>
    </div>
    </div>
    </div>
@endsection

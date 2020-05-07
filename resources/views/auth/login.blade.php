@extends('layouts.app')

@section('content')
<<<<<<< Updated upstream
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
=======
<div class=" d-flex justify-content-center align-content-center">
<div id="Contenedor" class=" col-4 container-fluid " style="height: 100vh">

    <div class="Icon">
               <!--Icono de usuario-->
              <span class="glyphicon glyphicon-user"></span>
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
>>>>>>> Stashed changes
@endsection

@extends('layouts.app')

@section('content')
<div id="Contenedor">

    <div class="ContentForm">

                 <form action="{{ route('password.update') }}" method="post" name="FormEntrar">
                 @csrf
                 <input type="hidden" name="token" value="{{ $token }}">

                 <h2>{{ __('Reset Password') }}</h2>
                 <div class="input-group input-group-lg">
                     <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-user"></i></span>
                      <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="{{ __('E-Mail Address') }}" aria-describedby="sizing-addon1" value="{{ $email ?? old('email') }}"required autocomplete="email" autofocus>
                      @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                    </div>
                     <br>
                     <div class="input-group input-group-lg">
                     <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-lock"></i></span>
                      <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="{{ __('Password') }}" id="password" aria-describedby="sizing-addon1" required autocomplete="new-password">
                      @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                    </div>
                    <p>La contraseña debe tener 8 caracteres. Combina mayúsculas, minúsculas, números y caracteres especiales.</p>

                    <br>
                    <div class="input-group input-group-lg">
                      <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-lock"></i></span>
                      <input id="password-confirm" type="password" name="password_confirmation" class="form-control" placeholder="{{ __('Confirm Password') }}" aria-describedby="sizing-addon1" required autocomplete="new-password">
                    </div>
                    <br>
                    <!-- <input type="validaImg" name="validaImg" class="form-control" placeholder="Caracteres de la imagen" aria-describedby="sizing-addon1" required>
                    <br> -->
                    <!-- <button class="btn btn-lg btn-primary btn-block btn-signin" id="IngresoLog" type="submit" >Volver</button> -->
                    <button class="btn btn-lg btn-primary btn-block btn-signin" id="IngresoLog" type="submit" > {{ __('Reset Password') }}</button>
                </form>
             </div>
             </div>
@endsection

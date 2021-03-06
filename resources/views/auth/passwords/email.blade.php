@extends('layouts.app')

@section('content')
<div id="Contenedor">
    <div class="Icon">
              <span class="glyphicon glyphicon-exclamation-sign"></span>
            </div>
<div class="ContentForm">
        <form action="{{ route('password.email') }}" method="post" name="FormEntrar">
        @csrf


            <div class="input-group input-group-lg">
             <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-list"></i></span>
             <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" aria-describedby="sizing-addon1" placeholder="{{ __('E-Mail Address') }}" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
             @error('email')
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                           @enderror
           </div>

           <br>
           <!-- <button class="btn btn-lg btn-primary btn-block btn-signin" id="IngresoLog" type="submit" >Volver</button> -->
           <button class="btn btn-lg btn-primary btn-block btn-signin" id="IngresoLog" type="submit" >
           {{ __('Send Password Reset Link') }}

           </button>

       </form>
       @if (session('status'))
                   <div class="alert alert-success" role="alert">
                       {{ session('status') }}
                   </div>
               @endif
    </div>
    </div>
@endsection

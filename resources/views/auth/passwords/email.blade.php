@extends('layouts.app')

@section('content')
<<<<<<< Updated upstream
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>
=======
<div class=" d-flex justify-content-center align-content-center">
<div id="Contenedor" class="col-4 container-fluid ">
    <div class="Icon">
              <span class="glyphicon glyphicon-exclamation-sign"></span>
            </div>
<div class="ContentForm">
        <form action="{{ route('password.email') }}" method="post" name="FormEntrar">
        @csrf
>>>>>>> Stashed changes

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

<<<<<<< Updated upstream
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
=======
           <br>
           <div class=" d-flex justify-content-center align-content-center">
           <button class="btn btn-lg btn-primary btn-block btn-signin col-8" id="IngresoLog" type="submit" >
           {{ __('Send Password Reset Link') }}

           </button>
           </div>
>>>>>>> Stashed changes

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<<<<<<< Updated upstream
</div>
=======
    </div>
>>>>>>> Stashed changes
@endsection

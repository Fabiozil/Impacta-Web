@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>
                            <br>
                            <br>
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{__('Tipo')}}</label>
                            <div class="col-md-6">
                                <select class="form-control" name="type" id="type">
                                    <option value="1">Corporación</option>
                                    <option value="0">Afiliado</option>
                                </select>
                            </div>
                            <br>
                            <br>
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{__('Nombre representante')}}</label>
                            <div class="col-md-6">
                                <input class="form-control  @error('name_rep') is-invalid @enderror" name="name_rep" value="{{ old('name_rep') }}" required autocomplete="name_rep" autofocus>
                            </div>
                            <br>
                            <br>
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{__('Apellido representante')}}</label>
                            <div class="col-md-6">
                                <input class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="name" autofocus>
                            </div>
                            <br>
                            <br>
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{__('Tipo de documento')}}</label>
                            <div class="col-md-6">
                                <select class="form-control" name="type_doc" id="type"  value="{{ old('type_doc') }}" required autocomplete="type_doc" autofocus>
                                    <option value="1">CC</option>
                                    <option value="0">PASS</option>
                                </select>
                            </div>
                            <br>
                            <br>
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{__('Número de documento')}}</label>
                            <div class="col-md-6">
                                <input class="form-control  @error('num_doc') is-invalid @enderror" name="num_doc" value="{{ old('num_doc') }}" required autocomplete="num_doc" autofocus>
                            </div>
                            <br>
                            <br>
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{__('Cargo')}}</label>
                            <div class="col-md-6">
                                <input class="form-control" name="position">
                            </div>
                            <br>
                            <br>
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{__('Correo representante')}}</label>
                            <div class="col-md-6">
                                <input class="form-control" name="email_rep">
                            </div>
                            <br>
                            <br>
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{__('Teléfono')}}</label>
                            <div class="col-md-6">
                                <input class="form-control" name="phone">
                            </div> 
                            <br>
                            <br>
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{__('Razón social')}}</label>
                            <div class="col-md-6">
                                <input class="form-control" name="r_s">
                            </div>
                            <br>
                            <br>
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{__('Número documento corporación')}}</label>
                            <div class="col-md-6">
                                <input class="form-control" name="num_doc_corp">
                            </div>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reciclador</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="container" style="height: 100vh;">
        <div class="row" style="height: 100%;">
            <div class="col-2" style="height: 100%; background-color:  #cccccc;">
                <div class="row" style="margin: 10px;">
                    <a href="crear_reciclador_2" style="width: 100%;">
                        <button class="btn btn-light" style="width: 100%;">Atras</button>
                    </a>
                </div>
            </div>
            <div class="col-10" style="background-color: #f2f2f2; height: 100%; width: 100%; max-height: 100%;">
                <div class="row align-items-center" style="height: 15%;">
                    <h1 style="color: #009900; text-align: center; width: 100%;;">Datos del representante legal</h1>
                </div>
                <div class="row " style="height: 85%; max-height: 85%;">
                    <div class="container" style="background-color: white; margin: 20px; max-height: 95%; overflow: auto; border-radius: 10px;">
                    <div class="ContentForm">
                        <form action="" method="post" >
                        @csrf
                            <br>
                        <div class="row">   
                            <div class="col-5">
                                <label for="name">{{ __('Name') }}</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name_rep" placeholder="{{ __('Name') }}" id="name" aria-describedby="sizing-addon1" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>
                            <div class="col-5">
                                <label for="">{{ __('Lastname') }}</label>
                                <input type="text" id="name" name="lastname" class="form-control @error('name') is-invalid @enderror" placeholder="{{ __('Lastname') }}" aria-describedby="sizing-addon1" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>
                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <br>
                        <label for="">Tipo de documento</label>
                        <div class="row">
                            <div class="col-2">
                                <button disabled="disabled"> CC</button>
                            </div>
                            <div class="col-5">
                                 <input type="numCC" name="numCC" class="form-control" placeholder="Numero del documento" aria-describedby="sizing-addon1" required>
                           </div>
                        </div>                            
                        <label for="">Cargo</label>
                        <input type="cargo" class="form-control" name="cargo" placeholder="ej: Gerente general" id="cargo" aria-describedby="sizing-addon1" required>
                <br>
                <label for="">{{ __('E-Mail Address') }}</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="ej: correo@empresa.com" id="email" aria-describedby="sizing-addon1" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                <br>
				<div class="row">
                    <div class="col-4">
                        <label for="">{{ __('Password') }}</label>
                        <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror" placeholder="{{ __('Password') }}" aria-describedby="sizing-addon1" required autocomplete="new-password">
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="col-4">
                        <label for="password-confirm">{{ __('Confirm Password') }}</label>
                        <input type="password" id="password-confirm" name="password_confirmation" class="form-control" placeholder="{{ __('Confirm Password') }}" aria-describedby="sizing-addon1" required autocomplete="new-password">
                    </div>
				</div>
                <br>
                <div class="col-4 alignment-left">
                    <button class="btn btn-lg btn-primary btn-block btn-signin" id="reg" type="submit" >{{ __('Register') }}</button>
                </div>
                <br>
		 	</form>
		 </div>	
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
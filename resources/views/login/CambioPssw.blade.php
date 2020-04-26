<html lang="en">
		<head>
		    <title>{{ __('Reset Password') }} </title>
		    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
			<!-- vinculo a bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Temas-->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->
<!-- se vincula al hoja de estilo para definir el aspecto del formulario de login-->  
<style>
#Contenedor{
	width: 400px;
	margin: 50px auto;
	background-color: #F3EDED;
        border: 1px solid #ECE8E8;
	height: 400px;
	border-radius:8px;
	padding: 0px 9px 0px 9px;
}
.Icon span{
      background: #A8A6A6;
      padding: 20px;
      border-radius: 120px;
}
.Icon{
     margin-top: 10px;
     margin-bottom:10px; 
     color: #FFF;
     font-size: 50px;
     text-align: center;
}
.opcioncontra{
	text-align: center;
	margin-top: 20px;
	font-size: 14px;
}
.btn{
    background: #009900;
}
</style>
		</head>
		<body>
		 <div id="Contenedor">
		 <div class="Icon">
                   <span class="glyphicon glyphicon-exclamation-sign"></span>
                 </div>
<div class="ContentForm">
		 	<form action="{{ route('password.email') }}" method="post" name="FormEntrar">
			 @csrf
			 <input type="hidden" name="token" value="{{ $token }}">

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
				<div class="input-group input-group-lg">
				  <!-- <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-lock"></i></span> -->
				  <input type="validaImg" name="validaImg" class="form-control" placeholder="Caracteres de la imagen" aria-describedby="sizing-addon1" required>
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
</body>
</html>
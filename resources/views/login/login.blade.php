<html lang="en">
		<head>
		    <title>sistema de login</title>
		    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
			<!-- vinculo a bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Temas-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
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
                    <!--Icono de usuario-->
                   <span class="glyphicon glyphicon-user"></span>
                 </div>
<div class="ContentForm">
		 	<form action="" method="post" name="FormEntrar">
		 		<div class="input-group input-group-lg">
				  <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-user"></i></span>
				  <input type="usuario" class="form-control" name="usuario" placeholder="Usuario" id="Usuario" aria-describedby="sizing-addon1" required>
				</div>
				<br>
				<div class="input-group input-group-lg">
				  <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-lock"></i></span>
				  <input type="password" name="contra" class="form-control" placeholder="Contraseña" aria-describedby="sizing-addon1" required>
				</div>
                <div class="opcioncontra"><a href="">Olvidaste tu contraseña?</a></div>
				<br>
				<button class="btn btn-lg btn-primary btn-block btn-signin" id="IngresoLog" type="submit">Ingresar</button>
                <br>
                <!-- hay que preguntar si se registra como persona o corporacion -->
                <div class="opcioncontra"><a href="">¿No tienes cuenta? Regístrate</a></div>
		 	</form>
		 </div>	
		 </div>
</body>
 <!-- vinculando a libreria Jquery-->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <!-- Libreria java scritp de bootstrap -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>
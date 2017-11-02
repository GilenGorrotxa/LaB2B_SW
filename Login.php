
<?php
include "funciones.php";
if (isset($_POST['mail'])) {
	
    if (Login()) {
		header("location:layout.php");
        }
       }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="tipo_contenido" content="text/html;" http-equiv="content-type" charset="utf-8">
	<title>Preguntas</title>
    <link rel='stylesheet' type='text/css' href='estilos/style.css' />
	<link rel='stylesheet' 
		   type='text/css' 
		   media='only screen and (min-width: 530px) and (min-device-width: 481px)'
		   href='estilos/wide.css' />
	<link rel='stylesheet' 
		   type='text/css' 
		   media='only screen and (max-width: 480px)'
		   href='estilos/smartphone.css' />
	<style>
	#page-wrap{
		text-align: center;
		background-color: ;
	}
	#logo{
		width: 200px;
		margin-top: 80px;
		
	}
	#ini{
		width: 110px;
		margin-bottom: 40px;
	}

	a{
		color:black;
		font-size: 15px;
	}
	
	#user{
		margin-bottom: 20px;
	 	width: 250px;
	 	height: 25px;
	 	border-radius: 10px;
	 	text-align: center;
	 	color: black;
	}
	#pass{
		margin-bottom: 10px;
		border-radius: 10px;
		text-align: center;
	 	width: 250px;
	 	height: 25px;
	}
	#titulo{
		background:#D5E4E8 none repeat scroll 0 0;
    	border:3px solid #B5CAD0;
   		margin:10px 0px;
    	padding:10px;
    	margin-bottom: 20px;
	}
	#boton{
		margin-top: 15px;
		margin-bottom: 20px;
		font-size: 12px;
		width: 100px;
		padding: 5px;
		border-radius: 10px;
	}
	#creditos{
		margin-right: 20px;
	}
	#et{
		color: white;
		font-size: 20px;
	}
	#flecha{
		font-size: 10px;
	}
	#error{
		position: absolute;
		color: #F3FC39;
		margin-top: 500px;
		margin-left: 630px;

	}
	
	
	</style>
  </head>



  <body style="background-color:#757676  ;">
  
		  <div id='page-wrap'>

			<header class='main' id='h1'>

		      		<a href="index.html" title="Inicio">

							<img id="logo" src="imagenes/logo.png" onmouseover="this.src='imagenes/logopulsado.png';" onmouseout="this.src='imagenes/logo.png';"/>

					</a><br>
					
					<h3 id="titulo">Login: Introduce tus datos.</h3>
		    </header>
			
				
			<form  id="form" method="POST" >

				
						
						<input type="text" class="form-control" id="user" placeholder="Email del usuario" name="mail" required autofocus><br>
						
						<input type="password" class="form-control" id="pass" placeholder="Contraseña" name="pass" required autofocus><br>

						<input id="boton" name="boton" class="btn btn-lg btn-primary btn-block" type="submit">
					
				

			</form>

		    </section>
			<footer class='main' id='f1'>
				
				<label id="et">¿No tienes cuenta? </label><a href="Registrar.php">  Regístrate</a><br>
				
			</footer>
		</div>


</body>
</html>
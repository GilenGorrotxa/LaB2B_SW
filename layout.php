<?php
include "funciones.php";
Bienvenido();
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
	#titulo{
		background:#D5E4E8 none repeat scroll 0 0;
    border:3px solid #B5CAD0;
    margin:10px 0px;
    padding:10px;
	}
	#logo{
		width: 300px;
		margin-bottom: -12px;
		margin-top: 30px;
	}
	#ini{
		width: 110px;
		margin-bottom: 40px;
	}

	a{
		color:black;
	}
	#logout{
		margin-top: 0px;
	}
	#loggeduser{
		text-align: center;
		margin-bottom: 0px;
	}
	
	</style>
  </head>



  <body style="background-color:#8FC9D4  ;">
  
		  <div id='page-wrap'>

			<header class='main' id='h1'>
				
			
			<span class="right"><input type="button" id="logout" value="Logout"></span>
		      		<br>
		      		
		      		<a href="InsertarPregunta.php" title="Preguntas">

							<img id="logo" src="imagenes/logo.png" onmouseover="this.src='imagenes/logopulsado.png';" onmouseout="this.src='imagenes/logo.png';"/>

					</a>
				<h3 id="titulo">Quiz: el juego de las preguntas</h3>
		    </header>


			<nav class='main' id='n1' role='navigation'>
				<span><a href='layout.php'><img id="ini" src="imagenes/inicio.png" onmouseover="this.src='imagenes/iniciopul.png';" onmouseout="this.src='imagenes/inicio.png';"/></a></spam>
				<?php
				$mail= $_GET['mail'];
				echo"<span><a href='InsertarPregunta.php?mail=$mail'><img id=ini src=imagenes/preguntas.png onmouseover=this.src='imagenes/preguntaspul.png'; onmouseout=this.src=imagenes/preguntas.png;/></a></spam>";

				?>

				<span><a href='creditos.html'><img id="ini" src="imagenes/creditos.png" onmouseover="this.src='imagenes/creditospul.png';" onmouseout="this.src='imagenes/creditos.png';"/></a></spam>
				
			</nav>
		    <section class="main" id="s1">
		    
			<div >
				
			</div>
		    </section>
			<footer class='main' id='f1'>
				<a href="http://es.wikipedia.org/wiki/Quiz" target="_blank">Que es un Quiz?</a>
				<a href='https://github.com'>Link GITHUB</a>
			</footer>
		</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>
	$("#logout").click(function() {

		alert("Gracias por su visita.");
		$(location).attr('href', 'index.html');
	});
	

</script>
</body>
</html>
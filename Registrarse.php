

<?php
include "funciones.php";
if (isset($_POST['mail'])) {
    if (registrarse()) {
        header('location:layout.html');
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
	#et2{
		color :white;
        font: oblique bold 100% cursive;
		
	}
	#et3{
		color :white;
        font: oblique bold 100% cursive;
        margin-left: -20px;
		
	}
	#et4{
		color :white;
        font: oblique bold 100% cursive;
		margin-left: -25px;
	}
	#et5{
		color :white;
        font: oblique bold 100% cursive;
        margin-left: -45px;
		
	}
	#et6{
		color :white;
        font: oblique bold 100% cursive;
        margin-left: -117px;

		
	}
	#et7{
		color :white;
        font: oblique bold 100% cursive;
        margin-left: -70px;
		
	}
	#mail{
		width: 300px;
		border-radius: 10px;
		margin-bottom: 10px;
		margin-left: 5px;
	}
	#nom{
		width: 300px;
		border-radius: 10px;
		margin-bottom: 10px;
		margin-left: 5px;
	}
	#ape{
		width: 300px;
		border-radius: 10px;
		margin-bottom: 10px;
		margin-left: 5px;
	}
	#pass{
		width: 300px;
		border-radius: 10px;
		margin-bottom: 10px;
		margin-left: 5px;
	}
	#pass2{
		width: 300px;
		border-radius: 10px;
		margin-left: 5px;
		margin-bottom: 15px;
	}
	#img{
		margin-bottom: 25px;
	}
	#button{
		margin-bottom: 20px;
		margin-top: 10px;
		border-radius: 10px;
		width: 150px;
		background-color: black;
		color: white;
	}
	
	</style>
  </head>



  <body style="background-color:#8FC9D4  ;">
  
		  <div id='page-wrap'>

			<header class='main' id='h1'>

		      		<a href="layout.html" title="Inicio">

							<img id="logo" src="imagenes/logo.png" onmouseover="this.src='imagenes/logopulsado.png';" onmouseout="this.src='imagenes/logo.png';"/>

					</a><br>
					
					<h3 id="titulo">Registrarse: Introduce tus datos.</h3>
		    </header>
			
				
			<form id="form" method="post" action="RegistrarseBD.php">

				   <label id="et2">Email:</label><input id="mail" type="text" name="mail"><br>
		           <label id="et3">Nombre:</label><input id="nom" type="text" name="nom"><br>
		           <label id="et4">Apellidos:</label><input id="ape" type="text" name="ape"><br>
		           <label id="et5">Contraseña:</label><input id="pass" type="password" name="pass"><br>
		           <label id="et6">Repita la contraseña:</label><input id="pass2" type="password" name="pass2"><br>
		           <label id="et7">Foto de perfil:</label> <input type="file" id="img" name="img"/><br>
			 
				   <input type="submit" id="button" value="Registrarse">

			</form>

		    </section>
			<footer class='main' id='f1'>
				
				
				
			</footer>
		</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>

	$("#form").submit(function () {  
    		if($("#mail").val().length < 1) {  
        		alert("Escriba un email por favor.");  
        		return false;  
   			 }  
   			 if($("#nom").val().length < 1) {  
        		alert("Escriba un nombre por favor.");  
        		return false;  
   			 } 
   			  if($("#ape").val().length < 1) {  
        		alert("Escriba sus apellidos por favor.");  
        		return false;  
   			 } 
   			  if($("#pass").val().length < 1) {  
        		alert("Escriba su contraseña por favor.");  
        		return false;  
   			 } 
   			 if($("#prein3").val().length < 1) {  
        		alert("Repita la contraseña escrita en el apartado anterior.");  
        		return false;  
   			 } 

});



</script>
</body>

</html>
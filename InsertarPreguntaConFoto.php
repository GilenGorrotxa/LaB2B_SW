				
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
		width: 180px;
		margin-bottom: -12px;
		margin-top: 10px;
	}
	#exito{
		width: 600px;
		margin:10px 0px;
	}

	</style>
  </head>



  <body style="background-color:#8FC9D4  ;">
  
		  <div id='page-wrap'>

			<header class='main' id='h1'>
				<p> <a href='VerPreguntasConFoto.php'> <img id="logo" src="imagenes/verpre.png" onmouseover="this.src='imagenes/verprepul.png';" onmouseout="this.src='imagenes/verpre.png';"/> </a>
				
		      		<span class="right" style="display:none;"><a href="/logout">Logout</a></span>

						<?php 
						
							$link = mysqli_connect("localhost", "root", "Zazpi007", "quiz");
							
							//conseguir la foto
							copy($_FILES['img']['tmp_name'],$_FILES['img']['name']);
						  	$nom=$_FILES['img']['name'];

							 $sql="INSERT INTO preguntas(pregunta, correcta, inco1, inco2, inco3, email, complejidad, tema, foto) VALUES ('$_POST[pre]','$_POST[preco]','$_POST[prein]', '$_POST[prein2]', '$_POST[prein3]','$_POST[mail]', '$_POST[com]','$_POST[tema]','<img  width=100px src=\"$nom\">')";


									 if (!mysqli_query($link ,$sql))
									 	{
											die('Error: ' . mysqli_error($link));
									 	}
						
								mysqli_close($link);

					 	?>

					 	<h3 id="titulo">Quiz: el juego de las preguntas</h3>
		    </header>

		<img src="imagenes/exito.png" alt="exito" id="exito">


 <footer class='main' id='f1'>
				
			</footer>
		</div>


</body>
</html>
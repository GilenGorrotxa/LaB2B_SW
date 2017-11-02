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
		width: 160px;
		margin-bottom: -12px;
		margin-top: 10px;
	}
	#tabla{

		color: white;
		border-color: white;
		width: 900px;
		margin: 0px auto 10px;
	}
	
	td{
		padding: 10px;
		font-weight: bold;
		border:2px solid white;
	}
	th{
		padding: 10px;
		font: oblique bold 100% cursive;
		border:2px solid white;
		
	}

	table{
		border: 2px solid white;
		
	}

	
	
	</style>
  </head>



  <body style="background-color:#8FC9D4  ;">
  
		  <div id='page-wrap'>

			<header class='main' id='h1'>
			
				
		      		<span class="right" style="display:none;"><a href="/logout">Logout</a></span>
		      		<a href="layout.php" title="Inicio">

							<img id="logo" src="imagenes/logo.png" onmouseover="this.src='imagenes/logopulsado.png';" onmouseout="this.src='imagenes/logo.png';"/>

					</a>
				<h3 id="titulo">Quiz: el juego de las preguntas</h3>
		    </header>

						<?php 


						$link = mysqli_connect("localhost", "root", "Zazpi007", "quiz");

						 

						 $usuarios = mysqli_query($link, "SELECT * from preguntas" );

						echo '<table id="tabla"  > <tr> <th> PREGUNTA </th> <th> PRE.CORRECTA </th> <th> PRE.INCO1 </th> <th> PRE.INCO2 </th> <th> PRE.INCO3 </th> <th> EMAIL </th> <th> COMPLEJIDAD </th> <th> TEMA </th> <th> FOTO </th>
						</tr>';
						while ($row = mysqli_fetch_array( $usuarios )) {
						echo '<tr><td>' . $row['pregunta'] . '</td> <td>' . $row['correcta'] .'</td>  <td>' . $row['inco1'] .'</td> <td>' . $row['inco2'] .'</td> <td>' . $row['inco3'] .'</td> <td>' . $row['email'] .'</td>

						<td>' . $row['complejidad'] .'</td> <td>' . $row['tema'] .'</td><td>' . $row['foto'] .'</td></tr>';
						}
						echo '</table>';
						$usuarios->close();
						mysqli_close($link);


						 ?>
	<footer class='main' id='f1'>
				
			</footer>
		</div>


</body>
</html>
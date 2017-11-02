<?php 


function Login()
{

		$link = mysqli_connect("localhost", "root", "Zazpi007", "quiz");

			$usuarios = mysqli_query($link, "SELECT email,password from users " );
			

				while ($row = mysqli_fetch_array( $usuarios )) 
				{
				 	$email=$row['email'];
				 	$pass=$row['password'];

				 	if($email == $_POST['mail'] &&  $pass== $_POST['pass']){
						
						echo '<script type="text/javascript">alert("Bienvenido a Quiz.");</script>';
						header("location:layout.php?mail=".$_POST["mail"]);
						
				 	}
				 	else{
				 		echo '<div id=error class="error">Su email o contraseña es incorrecto.</div>';
				 	}



				}
}

 
 function registrarse(){
 	$link = mysqli_connect("localhost", "root", "Zazpi007", "quiz");
							
							 

		$sql="INSERT INTO users(email, nombre, apellidos, nick, password, foto) VALUES ('$_POST[mail]','$_POST[nom]','$_POST[ape]','$_POST[nick]', '$_POST[pass]', '$_POST[img]')";

						if (!mysqli_query($link ,$sql))
							{
								die('Error: ' . mysqli_error($link));
							}

								else{
									/*?>
									<script>
										window.location.href = "Login.php";
										window.location("Login.php");
									</script>
									<?php*/
									header("Location:Login.php");
									}
								
						
						mysqli_close($link);


 }

function insertarpregunta(){

	
							
							$pre= $_POST['pre'];
							$preco= $_POST['preco'];
							$prein= $_POST['prein'];
							$prein2= $_POST['prein2'];
							$prein3= $_POST['prein3'];
							$mail= $_POST['mail'];
							$com= $_POST['com'];
							$tema=$_POST['tema'];

							if($pre== ""){
								
								echo '<div id=error class="error">Escriba una pregunta por favor.</div>';
							}
							else if($preco== ""){
								
								echo '<div id=error1 class="error">Escriba una respuesta correcta por favor.</div>';
							}
							else if($prein== ""){
								
								echo '<div id=error2 class="error">Rellene la respuesta incorrecta nº1.</div>';
							}
							else if($prein2== ""){
								echo '<div id=error3 class="error">Rellene la respuesta incorrecta nº2.</div>';
							}
							else if($prein3== ""){
								echo '<div id=error4 class="error">Rellene la respuesta incorrecta nº3.</div>';
							}
							/////////////////////////////////////////////////////////////////////////////////////////////////////

							else if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){

								echo '<div id=error5 class="error">El email introducido está vacio o es incorrecto.</div>';
							}
							else if($com== "" || $com>5){
								echo '<div id=error6 class="error">La complejidad introducida supera el limite.</div>';
							}
							////////////////////////////////////////////////////////////////////////////////////////////////////
							else if($tema== ""){
								echo '<div id=error7 class="error">Escriba un tema por favor.</div>';
							}
							else{
							
							$link = mysqli_connect("localhost", "root", "Zazpi007", "quiz");
							copy($_FILES['img']['tmp_name'],$_FILES['img']['name']);
						  	$nom=$_FILES['img']['name'];

							 $sql="INSERT INTO preguntas(pregunta, correcta, inco1, inco2, inco3, email, complejidad, tema, foto) VALUES ('$_POST[pre]','$_POST[preco]','$_POST[prein]', '$_POST[prein2]', '$_POST[prein3]','$_POST[mail]', '$_POST[com]','$_POST[tema]','<img  width=100px src=\"$nom\">')";


									 if (!mysqli_query($link ,$sql))
									 	{
											die('Error: ' . mysqli_error($link));
									 	}
						
								mysqli_close($link);
								header("Location: VerPreguntasConFoto.php");
							}
								
}
function Bienvenido(){
	session_start();
	
	$link = mysqli_connect("localhost", "root", "Zazpi007", "quiz");
	$mail=$_GET["mail"];
	$query = mysqli_query($link, "SELECT * from users where email= '".$mail."'" );
	$row=mysqli_fetch_array( $query);
	$nombre=$row['nombre'];
	$apellido=$row['apellidos'];
	$foto=$row['foto'];
	echo "<div id=loggeduser>";
	if($foto==""){
		$foto="usersinfoto.png";
		echo "<img  width=50px src=imagenes/".$foto.">";
		echo "<br>";
	}else{
		echo "<img  width=50px src=imagenes/".$foto.">";
		echo "<br>";
	}
	echo $nombre;
	echo " ";
	echo $apellido;
	

}




 ?>
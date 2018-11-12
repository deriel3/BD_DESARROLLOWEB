<?php
	require 'registro.php';
	if($_SERVER['REQUEST_METHOD']=='POST')
	{

		  $email=$_POST['em'];
			$nombre=$_POST['nom'];
			$apellido=$_POST['apel'];
			$fecha_nacimiento=$_POST['fecha'];
			$contrasena=$_POST['cont'];
      $contrasena=password_hash($contrasena, PASSWORD_DEFAULT);
			$verificar_registro=RegUs::insertarUsuario($email,$contrasena,$nombre,$apellido,$fecha_nacimiento);
			if($verificar_registro)
			{
				echo"Te registraste satisfactoriamente";
			}
			else
			{
				echo "Ocurrio un error intente nuevamente";
			}
	}
?>

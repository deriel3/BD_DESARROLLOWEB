<?php
	require 'inicio.php';
	if($_SERVER['REQUEST_METHOD']=='POST')
	{

		  $email=$_POST['em'];
			$contrasena=$_POST['cont'];
			$verificar_inicio=Ini::verificarusuario($email);
			if($verificar_inicio)
			{
				$hash=$verificar_inicio['password'];
        if (password_verify($contrasena, $hash)) {
						session_start();
						$_SESSION['usuario'] = $verificar_inicio['email'];
            echo 'c';
        } else {
            echo 'i';
        }
			}
			else
			{
				echo "Ocurrio un error intente nuevamente";
			}
	}
?>

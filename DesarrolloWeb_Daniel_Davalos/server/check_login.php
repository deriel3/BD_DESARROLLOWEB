<?php
	require 'inicio.php';
	if($_SERVER['REQUEST_METHOD']=='POST')
	{

		  $email=$_POST['username'];
			$contrasena=$_POST['password'];
			$verificar_inicio=Ini::verificarusuario($email);
			if($verificar_inicio)
			{
				$hash=$verificar_inicio['password'];
        if (password_verify($contrasena, $hash)) {
						session_start();
						$_SESSION['usuario'] = $verificar_inicio['email'];
						$json=array("msg"=>'OK');
            echo json_encode($json);
        } else {
					$json=array("msg"=>'NO');
					echo json_encode($json);
        }
			}
			else
			{
				echo "Ocurrio un error intente nuevamente";
			}
	}
?>

<?php
	require 'Database.php';
	Class RegUs{
		function _construct()
		{}

			public static function insertarUsuario($email,$contrasena,$nombre,$apellido,$fecha_nacimiento)
			{
				$consultar="Insert INTO usuario(email, password, nombre, apellido,fecha_nacimiento) VALUES(?,?,?,?,?)";
				$resultado=Database::getInstance()->getDb()->prepare($consultar);
				try {
					return $resultado->execute(array($email,$contrasena,$nombre,$apellido,$fecha_nacimiento));
				} catch (Exception $e) {
					return false;
				}
			}
			public static function insertar_evento($id,$usuario_id,$titulo,$start,$start_hour,$end,$end_hour,$allday)
			{
				$consultar="Insert INTO evento(id, usuario_id, title, start, start_hour, end, end_hour,completo) VALUES(?,?,?,?,?,?,?,?)";
				$resultado=Database::getInstance()->getDb()->prepare($consultar);
				try {
					return $resultado->execute(array($id,$usuario_id,$titulo,$start,$start_hour,$end,$end_hour,$allday));
				} catch (Exception $e) {
					return false;
				}
			}

	}
?>

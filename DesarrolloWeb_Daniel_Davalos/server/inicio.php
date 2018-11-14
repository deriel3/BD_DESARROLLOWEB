<?php
	require 'Database.php';
	Class Ini{
		function _construct()
		{}

      public static function verificarusuario($email)
			{
				$consultar="Select * From usuario where email=?";
				$resultado= Database::getInstance()->getDb()->prepare($consultar);
				$resultado->execute(array($email));
				$tabla =$resultado->fetch(PDO::FETCH_ASSOC);
				return $tabla;
			}
			public static function obteventos()
			{
				$consultar="Select * From evento";
				$resultado= Database::getInstance()->getDb()->prepare($consultar);
				$resultado->execute(array());
				$tabla =$resultado->fetchAll(PDO::FETCH_ASSOC);
				return $tabla;
			}
			public static function borrarevento($id)
			{
				$consultar="delete From evento where id=?";
				$resultado= Database::getInstance()->getDb()->prepare($consultar);
				$resultado->execute(array($id));
				return $resultado;
			}
			public static function actualizarevento($id,$start,$start_hour,$end,$end_hour)
			{
				$consultar="update evento where id=? set start=?,start_hour=?,end=?,end_hour=?";
				$resultado= Database::getInstance()->getDb()->prepare($consultar);
				$resultado->execute(array($id,$start,$start_hour,$end,$end_hour));
				return $resultado;
			}
	}
?>

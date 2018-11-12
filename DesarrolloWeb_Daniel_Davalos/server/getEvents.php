<?php
require 'inicio.php';
if($_SERVER['REQUEST_METHOD']=='GET')
{

    $verificar_registro=Ini::obteventos();
    if($verificar_registro)
    {
      $json=array('msg'=>'OK','eventos'=>$verificar_registro);
			echo json_encode($json);
    }
    else
    {
      echo "Ocurrio un error intente nuevamente";
    }
}
 ?>

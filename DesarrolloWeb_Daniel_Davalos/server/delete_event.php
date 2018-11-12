<?php
require 'inicio.php';
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $evento=$_POST['id'];
    $verificar_registro=Ini::borrarevento($evento);
    if($verificar_registro)
    {
      $json=array('msg'=>'OK');
			echo json_encode($json);
    }
    else
    {
      echo "Ocurrio un error intente nuevamente";
    }
}
 ?>

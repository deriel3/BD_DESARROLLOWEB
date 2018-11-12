<?php
require 'registro.php';
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $id=$_POST['id'];
    $fecha_inicio=$_POST['start_date'];
      $fecha_fin=$_POST['end_date'];
      $hora_fin=$_POST['end_hour'];
      $hora_inicia=$_POST['start_hour'];
    $verificar_registro=RegUs::actualizarevento($identificador,$fecha_inicio,$hora_inicia,$fecha_fin,$hora_fin);
    if($verificar_registro)
    {
      $json=array("msg"=>"OK");
      echo json_encode($json);
    }
    else
    {
      $json=array("msg"=>"NO");
      echo json_encode($json);
    }

}


 ?>

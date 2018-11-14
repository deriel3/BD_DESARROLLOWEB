<?php
require 'registro.php';
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $c1=rand(1,9);
    $c2=rand(1,9);
    $c3=rand(1,9);
    $c4=rand(1,9);
    $c5=rand(1,9);
    $identificador =$c1.$c2.$c3.$c4.$c5;
    $titulo=$_POST['titulo'];
    $fecha_inicio=$_POST['start_date'];
    $allday=$_POST['allDay'];
    $allday=0;
    $fecha_fin=$_POST['end_date'];
    $hora_fin=$_POST['end_hour'];
    $hora_inicia=$_POST['start_hour'];
    if ($fecha_fin=="" && $hora_fin=="" && $hora_inicia=="" ) {
      $allday=1;
    }
    session_start();
    $user=$_SESSION['usuario'];
    $verificar_registro=RegUs::insertar_evento($identificador,$user,$titulo,$fecha_inicio,$hora_inicia,$fecha_fin,$hora_fin,$allday);
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

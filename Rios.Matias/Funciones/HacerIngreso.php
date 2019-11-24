<?php
include '../DB/PDO.php';

$miobjeto=new stdClass();
$miobjeto->Patente=$_GET['Patente'];
date_default_timezone_set("America/Argentina/Buenos_Aires");
$miobjeto->Horario=date("y-m-d H:i:s");


$query =$BaseDeDatos->prepare("insert into Vehiculos (v_patente,v_horario_ingreso) values ('$miobjeto->Patente','$miobjeto->Horario')");
$query->execute();			


header("Location: ..\Paginas\VehiculoOK.php");
?>
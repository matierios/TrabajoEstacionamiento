<?php
$miobjeto=new stdClass();
$miobjeto->Patente=$_GET['Patente'];
date_default_timezone_set("America/Argentina/Buenos_Aires");
$miobjeto->Horario=date("d-m-y (H:i:s)");

$archivo=fopen('VehiculosIngresos.txt','a');
fwrite($archivo,json_encode($miobjeto)."\n");
fclose($archivo);

header("Location: VehiculoOK.php");
?>
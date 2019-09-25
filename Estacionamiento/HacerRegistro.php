<?php
$miobjeto=new stdClass();
$miobjeto->Usuario=$_GET['Usuario'];
$miobjeto->Clave=$_GET['Clave'];

$archivo=fopen('RegistroUsuarios.txt','a');
fwrite($archivo,json_encode($miobjeto)."\n");
fclose($archivo);

header("Location:RegistroOK.php");
?>
<?php
include '../DB/AccesoDatos.php';

$miobjeto=new stdClass();
$miobjeto->Usuario=$_GET['Usuario'];
$miobjeto->Clave=$_GET['Clave'];

$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
$query ="INSERT INTO Usuarios (usr_nombre,usr_clave) VALUES ('$miobjeto->Usuario','$miobjeto->Clave')";
$consulta =$objetoAccesoDato->RetornarConsulta($query);
$consulta->execute();			

header("Location:..\Paginas\RegistroOK.php");
?>
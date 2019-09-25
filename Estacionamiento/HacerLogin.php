<?php

$archivo=fopen('RegistroUsuarios.txt','r');

while(!feof($archivo)) 
{
  $json = json_decode(fgets($archivo));

  if ($json->Usuario == $_GET['Usuario'])    
  {
      if ($json->Clave == $_GET['Clave'])
      {
            header("Location: IngresoVehiculo.php");
            fclose($archivo);
            exit();
      } 
      else
      {
          header("Location: LoginNoOK.php");
          fclose($archivo);     
          exit();
      }
        
  }  
  
}  

 header("Location: UsuarioInexistente.php");
 fclose($archivo);
    exit();

?>
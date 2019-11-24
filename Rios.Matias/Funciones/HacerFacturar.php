<?php

include '../DB/PDO.php';
date_default_timezone_set("America/Argentina/Buenos_Aires");
$Objeto=new stdClass();
$FechaSalida=date("H:i:s");
$CheckOut=Date("y-m-d H:i:s");


$query =$BaseDeDatos->prepare("select v_patente ,v_horario_ingreso from vehiculos");
      $query->execute();     
      $datos= $query->fetchAll(PDO::FETCH_ASSOC); 


foreach ($datos as $vehiculos) 
{
    if ($vehiculos['v_patente'] == $_GET['Patente'])    
      {
          $CheckIn = $vehiculos['v_horario_ingreso'];
          $HoraEntrada = $vehiculos['v_horario_ingreso'];
          
          $Final = date_diff($Objeto->CheckOut,$FechaEntrada);
          echo "Entrada ",$FechaEntrada;
          echo "<br>";
          echo "Salida ",$CheckOut;
          echo "<br>";
          echo $Final;
          die;
          $Hora=$dteDiff->format("%h");
          $Min=$dteDiff->format("%i");

          echo $Hora."".$Min;

          if ($Hora >0)
              {
                  $PHora = $Hora*60;
              }

          if ($Min >=1)
              {
                  $PMin = $Min*2;
              }

          $PrecioFinal = $PHora + $PMin;

          $Objeto->Precio = $PrecioFinal;
          $Objeto->FechaEntrada = $FechaEntrada;
          $Objeto->FechaEntrada=$FechaEntrada;
          $Objeto->Patente=$_GET['Patente'];
          
          header("location:../Paginas/FacturarOK.php?Precio=$Objeto->Precio&FechaEntrada=".$vehiculos['v_horario_ingreso']."&Patente=".$vehiculos['v_patente']."&FechaSalida=$CheckOut");   

  
        }  
  
   
  } 


?>
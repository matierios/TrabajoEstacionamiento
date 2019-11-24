<!DOCTYPE html>
<html>
<head>

    <title>Facturados</title>
    <?php include ('../Headers/Header.php'); ?>
    
  </head>
<body background="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT60OJACXGcjyEW2E2q4xMJ1zyAk8Fvbooipr0cK2yIFf72ZQkh">


    
    <main role="main" class="container">
      <h2 class="mt-5">Lista de vehiculos Facturados</h2>
		<ul>
			<?php
			$miArchivo = fopen("../Archivos/VehiculosFacturados.txt", "r") ;
			
			while(!feof($miArchivo)) 
			{
  				$objeto = json_decode(fgets($miArchivo));

          if (isset($objeto->Patente) != "")
          {
  				echo "<li>"."Patente: ".$objeto->Patente." HorarioEntrada:  ".$objeto->FechaEntrada." HorarioSalida: ".$objeto->FechaSalida." Monto Cobrado: ".$objeto->Precio."$"."</li>";
          }
			}
			fclose($miArchivo);
			?>
		</ul> 
      
    </main>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="popper.min.js"></script>
    <script src="popper.min.js"></script>

</body>
</html>
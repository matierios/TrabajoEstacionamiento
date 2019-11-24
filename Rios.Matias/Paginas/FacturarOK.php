<!doctype html>
<html lang="es">
  <head>
 

    <title>Facturacion</title>
  <?php include ('../Headers/Header.php'); ?>
    <!-- Bootstrap core CSS -->
  </head>

  <body>

    <!-- Begin page content -->
    <main role="main" class="container" >
      <h1 align="center">Debe Abonar</h1>
     <h2 align="center"> 
      <?php 
        echo $_GET['Precio']," $";

        $miobjeto=new stdClass();
        $miobjeto->Patente=$_GET['Patente'];
        $miobjeto->FechaEntrada=$_GET['FechaEntrada'];
        $miobjeto->FechaSalida=$_GET['FechaSalida'];
        $miobjeto->Precio=$_GET['Precio'];        

        $archivo=fopen('../Archivos/VehiculosFacturados.txt','a');
        fwrite($archivo,json_encode($miobjeto)."\n");
        fclose($archivo);

       ?>
     </h2>
      <p align="center" class="lead">Gracias por confiar en nosotros</code>.</p>
    </main>

    =========================================================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="popper.min.js"></script>
    <script src="popper.min.js"></script>
  </body>
</html>

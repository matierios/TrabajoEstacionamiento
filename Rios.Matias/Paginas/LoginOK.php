<?php
session_start();
  ?>

<!doctype html>
<html lang="es">
  <head>
 

    <title>Bienvenido</title>
    <?php include('..\Headers\Header.php'); ?>

  </head>

  <body>

    

    <!-- Begin page content -->
    <main role="main" class="container" >
      <h1 align="center">Bienvenido</h1>
      <h2 align="center">
        <?php
        echo "HOLA <br>";
      print_r($_SESSION['usuario']);
      ?>
      </h2>
      <center>
      <img src="https://st2.depositphotos.com/7107694/11950/v/950/depositphotos_119506646-stock-illustration-ok-flat-vector-icon.jpg" width="100"
         height="100" align="middle">
      </center>
      <p class="lead">Haga click en ingreso registrar su auto</code>.</p>
    </main>

    =========================================================================================== -->
   
  </body>
</html>

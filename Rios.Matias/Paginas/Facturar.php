<!doctype html>
<html lang="es">
  <head>

    <title>Facturacion</title>

    <?php include ('../Headers/Header.php'); ?>
  </head>

  <body background="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT60OJACXGcjyEW2E2q4xMJ1zyAk8Fvbooipr0cK2yIFf72ZQkh">

    <!-- Begin page content -->
  <main role="main" class="container">
      
      <h1 align="center">CHECK OUT<h1>
        <br>

         <form action="../Funciones/HacerFacturar.php" class="text-center">
                <p align= "center">Patente</p>
                <input type="text" name="Patente" value="" text-align="center">
                <br><br>
                <input align="center" type="submit" value="Ingresar">
          </form> 
    </main>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="popper.min.js"></script>
    <script src="popper.min.js"></script>
  </body>
</html>

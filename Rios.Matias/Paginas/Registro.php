<!doctype html>
<html lang="es">
  <head>

    <title>Registro</title>

  <?php include('..\Headers\Header.php'); ?>

  </head>
 <body>
    <main role="main" class="container">
      
      <h1 align="center">Registro<h1>
        <br>

              <form action="../Funciones/HacerRegistro.php" class="text-center" method="GET">
                <p align= "center">Usuario:</p>
                <input type="text" name="Usuario" value="" text-align="ce">
                <p align="center">Clave:</p>
                <input align="center" type="password" name="Clave" value="">
                <br><br>
                <input align="center" type="submit" value="Registrar">
          </form> 
    </main>
  </body>
</html>

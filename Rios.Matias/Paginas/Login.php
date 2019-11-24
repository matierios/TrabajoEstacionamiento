<!doctype html>
<html lang="es">

<title>LOGIN</title>

<?php include('..\Headers\Header.php'); ?>
  </head>

  <body>
    <main role="main" class="container">

      <h1 align="center">Login<h1>
        <br>        
          <form action="..\Funciones\HacerLogin.php" class="text-center">
                <p align= "center">Usuario</p>
                <input type="text" name="Usuario" value="" placeholder="Ingrese su usuario aqui">
                <p align="center">Clave</p>
                <input align="center" type="password" name="Clave" value="" placeholder="Ingrese su clave aqui">
                <br><br>
                <input align="center" type="submit" value="Ingresar">
          </form> 
    </main>

  </body>
</html>

<?php

  include_once 'conexion.php';
  

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css\estilos.css" >
  </head>
  <body>
  
    <div class="caja_formulario">
    <div class="titulo_login"><h2>Login</h2></div>
    <form action="#" method="POST">
      <div class="caja_id">
      <label for="nombre">Nombre:</label>
      <input type="text" name="nombre" placeholder="Escribe tu nombre">
      <br/>
      <label for="usuario">Usuario: </label>
      <input type="text" name="usuario" placeholder="Escribe tu usuario">
      <br/>
      <label for="nombre">Contraseña: </label>
      <input type="text" name="password" placeholder="Escribe tu contraseña">
      <br/>
      <input type="submit" value="Iniciar Sesion">
      </div>
    </form>
    </div>
  </body>
</html>
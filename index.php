<?php

  include_once 'conexion.php';
  

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
  
    <div>
    <h2>Login</h2>
    <form action="#" method="POST">
      <label for="nombre">Nombre:</label>
      <input type="text" name="nombre" placeholder="Escribe tu nombre">
      <br/>
      <label for="usuario">Usuario: </label>
      <input type="text" name="usuario" placeholder="Escribe tu usuario">
      <br/>
      <label for="nombre">Contraseña: </label>
      <input type="text" name="password" placeholder="Escribe tu contraseña">
    </form>
    </div>
  </body>
</html>
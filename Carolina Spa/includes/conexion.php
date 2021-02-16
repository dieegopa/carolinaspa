<?php
  $host_name = 'sql11.freemysqlhosting.net';
  $database = 'sql11393353';
  $user_name = 'sql11393353';
  $password = 'sql11393353';

  $conexion = new mysqli($host_name, $user_name, $password, $database);

  if ($conexion->connect_error) {
    die('<p>Error al conectar con servidor MySQL: '. $conexion->connect_error .'</p>');
  } else {
    echo '<p>Se ha establecido la conexión al servidor MySQL con éxito.</p>';
  }
?>

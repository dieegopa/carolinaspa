<?php
  $host_name = 'db5001750456.hosting-data.io';
  $database = 'dbs1443684';
  $user_name = 'dbu1545208';
  $password = 'CursosUdemy2020.';

  $conexion = new mysqli($host_name, $user_name, $password, $database);

  if ($conexion->connect_error) {
    die('<p>Error al conectar con servidor MySQL: '. $conexion->connect_error .'</p>');
  } else {
    echo '<p>Se ha establecido la conexión al servidor MySQL con éxito.</p>';
  }
?>

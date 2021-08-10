<?php
  $host_name_db = 'HOSTING';
  $database_db = 'NAME';
  $user_name_db = 'USERNAME';
  $password_db = 'PASSWORD';

  $conexion = new mysqli($host_name_db, $user_name_db, $password_db, $database_db);

$conexion->set_charset( 'utf8' );

  if ($conexion->connect_error) {
    die('<p>Error al conectar con servidor MySQL: '. $conexion->connect_error .'</p>');
  }
?>

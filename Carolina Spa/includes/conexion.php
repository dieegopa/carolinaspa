<?php

try {
    define( 'DB_USUARIO', 'a2Npbt4MZz' );
    define( 'DB_PASSWORD', 'uUrIjTp86D' );
    define( 'DB_HOST', 'remotemysql.com' );
    define( 'DB_NOMBRE', 'a2Npbt4MZz' );

    $conexion = new mysqli( DB_HOST, DB_USUARIO, DB_PASSWORD, DB_NOMBRE );

    $conexion->set_charset( 'utf8' );

} catch( Exception $e ) {
    echo $e->getMessage();
    exit;
}

?>

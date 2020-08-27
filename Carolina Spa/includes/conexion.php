<?php

try {
    define( 'DB_USUARIO', 'root' );
    define( 'DB_PASSWORD', 'root' );
    define( 'DB_HOST', 'localhost' );
    define( 'DB_NOMBRE', 'carolina_spa' );

    $conexion = new mysqli( DB_HOST, DB_USUARIO, DB_PASSWORD, DB_NOMBRE );

    $conexion->set_charset( 'utf8' );

} catch( Exception $e ) {
    echo $e->getMessage();
    exit;
}

?>

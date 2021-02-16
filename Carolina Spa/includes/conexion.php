<?php

try {
    define( 'DB_USUARIO', 'dbu1545208' );
    define( 'DB_PASSWORD', 'CursosUdemy2020.' );
    define( 'DB_HOST', 'db5001750456.hosting-data.io' );
    define( 'DB_NOMBRE', 'dbs1443684' );

    $conexion = new mysqli( DB_HOST, DB_USUARIO, DB_PASSWORD, DB_NOMBRE );

    $conexion->set_charset( 'utf8' );

} catch( Exception $e ) {
    echo $e->getMessage();
    exit;
}

?>

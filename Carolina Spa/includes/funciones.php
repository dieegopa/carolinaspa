<?php

function obtenerProductos( $cantidad = 1) {
    include 'conexion.php';

    try {
        $sql = "SELECT * FROM productos LIMIT $cantidad";
        $resultado = $conexion->query($sql);
    } catch ( Exception $e ) {
        echo $e->getMessage();
        return array();
    }
    
    return $resultado;

}

function obtenerProductosTotal() {
    include 'conexion.php';

    try {
        $sql = "SELECT * FROM productos";
        $resultado = $conexion->query($sql);
    } catch ( Exception $e ) {
        echo $e->getMessage();
        return array();
    }
    
    return $resultado;

}


function obtenerProducto($id) {
    include 'conexion.php';

    try {
        $sql = "SELECT * FROM productos WHERE id = $id";
        $resultado = $conexion->query($sql);
    } catch ( Exception $e ) {
        echo $e->getMessage();
        return array();
    }
    
    return $resultado;

}



?>

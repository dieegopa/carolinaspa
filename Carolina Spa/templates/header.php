<?php
// Definir un nombre para cachear
$archivo = basename($_SERVER['PHP_SELF']);
$pagina = str_replace(".php", "", $archivo);

// Definir archivo para cachear (puede ser .php también)
if(isset($_GET['id'])){
    $archivoCache = 'cache/'.$pagina.'-'.$_GET['id'].'.html';
}else {
    $archivoCache = 'cache/'.$pagina.'.html';

}
// Cuanto tiempo deberá estar este archivo almacenado
$tiempo = 60;
// Checar que el archivo exista, el tiempo sea el adecuado y muestralo
if (file_exists($archivoCache) && time() - $tiempo < filemtime($archivoCache)) {
    include($archivoCache);
    exit;
}
// Si el archivo no existe, o el tiempo de cacheo ya se venció genera uno nuevo
ob_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Italianno&family=Lato:wght@400;700;900&family=Raleway:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <title><?php echo $titulo; ?> | Carolina Spa</title>
</head>

<body>
    <!-- Add Your HTML here -->
    <header class="encabezado-sitio container">
        <div class="row justify-content-md-between align-items-center">
            <div class="col-lg-4">
                <a href="index.php">
                    <img src="img/logo.svg" alt="logo" class="img-fluid mx-auto d-block py-4">
                </a>
            </div>
            <div class="col-lg-4">
                <nav class="sociales text-lg-right text-center">
                    <ul>
                        <li>
                            <a href="https://www.facebook.com"> <span class="sr-only"> Facebook </span> </a>
                        </li>
                        <li>
                            <a href="https://www.twitter.com"> <span class="sr-only"> Twitter </span> </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com"> <span class="sr-only"> Instagram </span> </a>
                        </li>
                        <li>
                            <a href="https://www.pinterest.com"> <span class="sr-only"> Pinterest </span> </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com"> <span class="sr-only"> Youtube </span> </a>
                        </li>
                    </ul>
                </nav>

            </div>
        </div>
    </header>
<?php
    //Rutas
    $rutaCliente = Ruta :: ctrRutaCliente();
    $rutaAdministrador = Ruta :: ctrRutaAdministrador();
?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="es">
  <head>
    <title>Appweb</title>
    <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="http://localhost:8080/Appweb/Proyecto/admin/vistas/imagenes/plantilla/icono.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800%7CPoppins:300,400,500,600,700%7CMuli:200,300,400,500">
    <link rel="stylesheet" href="vistas/css/bootstrap.css">
    <link rel="stylesheet" href="vistas/css/fonts.css">
    <link rel="stylesheet" href="vistas/css/style.css">
    <link rel="stylesheet" href="vistas/css/plantilla.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <?php

      include "componentes/loading.php";

      echo '<div class="page">';
              include "componentes/header.php";
              include "paginas/inicio.php";
              include "componentes/footer.php";
      echo '</div>';

    ?>
    <div class="snackbars" id="form-output-global"></div>
    <script src="vistas/js/core.min.js"></script>
    <script src="vistas/js/script.js"></script>
  </body>
</html>
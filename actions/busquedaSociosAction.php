<?php
    include '../controllers/busquedaSocios.php';
    include '../views/tablaSocios.php';
    $dato = $_POST[ 'dato' ];
    $sociosObtenidos = getSociosByPaternoOrNroDoc( $dato );
    tablaSocios( $sociosObtenidos );
?>

<?php
    include '../controllers/busquedaSocios.php';
    include '../views/tablaSocios.php';

    $dato = $_POST[ 'dato' ];
    $busqueda = $_POST[ 'busqueda' ];
   
    $sociosObtenidos = getSocios( $dato );
    
    tablaSocios( $sociosObtenidos );
?>

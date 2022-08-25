<?php
    include '../controllers/busquedaSocios.php';
    $dato = $_POST[ 'dato' ];
    $sociosObtenidos = getSociosByPaternoOrNroDoc( $dato );
    echo json_encode( $sociosObtenidos );
?>

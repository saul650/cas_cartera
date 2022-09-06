<?php
    include '../controllers/busquedaSocios.php';
    include '../views/tablaSocios.php';
    $dato = $_POST[ 'dato' ];
    $busqueda = $_POST[ 'busqueda' ];
   
        $sociosObtenidos = getSociosByPaternoOrNroDoc( $dato );
    
    tablaSocios( $sociosObtenidos );
?>
        <option value="apellido">apellido</option>
        <option value="ci"> carnet</option>
        <option value="papeleta">papeleta</option>
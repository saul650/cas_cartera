<?php
    include '../models/Socios.php';
    function getSociosByPaternoOrNroDoc ( $dato ,$busqueda ) {
        $socios = new Socios();
        $sociosObtenidos = array();
        if ( strcmp($busqueda, 'ci')==0)
            $sociosObtenidos = $socios->getSocioByNroDoc( $dato );
        else if(strcmp($busqueda, 'apellido')==0)
            $sociosObtenidos =  $socios->getSociosByPaterno( $dato );
        else
            $sociosObtenidos =  $socios->getSociosByPaterno( $dato );
        return $sociosObtenidos;
    }
?>

<?php
    include '../models/Socios.php';
    public function getSociosByPaternoOrNroDoc ( $dato ) {
        $sociosObtenidos = array();
        if ( is_numeric( $dato ) )
            $sociosObtenidos = getSocioByNroDoc( $dato );
        else
            $sociosObtenidos = getSociosByPaterno( $dato );
        return $sociosObtenidos;
    }
?>

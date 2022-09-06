<?php
    include '../models/Socios.php';
    include '../models/SociosInstitucion.php';
    function getSocios ( $dato ,$busqueda ) {
        $socios = new Socios();
        $sociosObtenidos = array();
        if ( strcmp( $busqueda, 'ci' ) == 0)
            $sociosObtenidos = $socios->getSocioByNroDoc( $dato );
        else if( strcmp( $busqueda, 'apellido' ) == 0 )
            $sociosObtenidos =  $socios->getSociosByPaterno( $dato );
        else {
            $sociosInstitucionales = new SociosInstitucion();
            $socioInstitucional = $sociosInstitucionales->getSocioInstitucionByPapeleta( $dato );
            $sociosObtenidos =  $socios->getSociosByPaterno( $socioInstitucional[ 'id_socio' ] );
        }
        return $sociosObtenidos;
    }
?>

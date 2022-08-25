<?php
// private $nombres;
//         private $paterno;
//         private $materno;
//         private $nro_doc;
//         private $expedido;
//         private $sexo;
//         private $fecha_nac;
//         private $estado_civil;
//         private $foto;
//         private $idlog;
//         private $estado;
//         private $idlog_coc;
//         private $num_correlativo;
//         private $estado_kardex;
//         private $mindef;
//         private $idlog_mindef;
    function tablaSocios ( $arr ) {
        echo '<table class="">';
        echo '<thead>';
        echo '<tr>';
        echo '<th>Nro. Doc.</th>';
        echo '<th>Nombres</th>';
        echo '<th>Paterno</th>';
        echo '<th>Materno</th>';
        echo '<th>Sexo</th>';
        echo '<th>Fecha Nac.</th>';
        echo '<th>Estado Civil</th>';
        echo '<th>Expedido</th>';
        echo '<th>Foto</th>';
        echo '<th>Acciones</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        if ($arr){
             
        foreach($arr as $fila){

            echo '<tr>';
            echo '<td>' . $fila ["nro_doc"] . '</td>';
            echo '<td>' . $fila ["nombres"] . '</td>';
            echo '<td>' . $fila ["paterno"] . '</td>';
            echo '<td>' . $fila ["materno"] . '</td>';
            echo '<td>' . $fila ["sexo"] . '</td>';
            echo '<td>' . $fila ["fecha_nac"] . '</td>';
            echo '<td>' . $fila ["estado_civil"] . '</td>';
            echo '<td>' . $fila ["expedido"] . '</td>';
            echo '<td>' . $fila ["foto"] . '</td>';
            echo '<td>';
            echo '<a href="../controllers/verSocio.php?id=' . $fila[ 'id' ] . '">Ver</a>';
            echo '<a href="../controllers/editarSocio.php?id=' . $fila[ 'id' ] . '">Editar</a>';
            echo '<a href="../controllers/eliminarSocio.php?id=' . $fila[ 'id' ] . '">Eliminar</a>';
            echo '</td>';
            echo '</tr>';
        }
    }

        echo '</tbody>';
        echo '</table>';
        
}
?>

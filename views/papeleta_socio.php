<?php

    function tablaSocios ( $papel ) {
        echo '<table class="">';
        echo '<thead>';
        echo '<tr>';
        echo '<th>descripcion de la tasa</th>';
        echo '<th>porcentaje</th>';
        echo '<th>codigo de descuento</th>';
        echo '<th>tipo moneda</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        if ($papel){
             
        foreach($papel as $papeleta){

            echo '<tr>';
            echo '<td>' . $papeleta ["descripcion_tasa"] . '</td>';
            echo '<td>' . $papeleta ["porcentaje"] . '</td>';
            echo '<td>' . $papeleta ["cod_desc"] . '</td>';
            echo '<td>' . $papeleta ["tipo_moneda"] . '</td>';            echo '<td>';
            echo '<a href="../controllers/verSocio.php?id=' . $papeleta[ 'id' ] . '">Ver</a>';
            echo '<a href="../controllers/editarSocio.php?id=' . $papeleta[ 'id' ] . '">Editar</a>';
            echo '<a href="../controllers/eliminarSocio.php?id=' . $papeleta[ 'id' ] . '">Eliminar</a>';
            echo '</td>';
            echo '</tr>';
        }
    }

        echo '</tbody>';
        echo '</table>';
        
}
?>

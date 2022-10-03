
<?php
  require_once '../models/Prestamo.php';

  $socio = $_POST[ 'socio' ];
  $tasa = $_POST[ 'tasa' ];
  $observaciones = $_POST[ 'observaciones' ];
  $plazo = $_POST[ 'plazo' ];
  $fecha = $_POST[ 'fecha' ];

  if ( strlen( $socio ) > 0 && strlen( $tasa ) > 0 && strlen( $observaciones ) > 0 && strlen( $plazo ) > 0 && strlen( $fecha ) > 0 ) {
    $prestamo = new Prestamo( null, $socio, $tasa, $observaciones, $plazo, $fecha );
    $result = $prestamo->insertPrestamo( $prestamo );
    if ( $result ) {
      header( 'Location: ../views/Prestamo.php' );
    } else {
      echo 'Error al insertar el prestamo';
    }
  } else {
    echo 'Debe llenar todos los campos';
  }
?>

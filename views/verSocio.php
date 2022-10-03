<?php
  require_once( '../models/Socios.php' );
  require_once( '../layout/layout.php' );
  function verSocio( $socio ) {
    $socioCard = '
      <div>
        <div>
          <span> ' . $socio[ 'nro_doc' ] . ' </span>
        </div>
        <p> ' . $socio[ 'paterno' ] . ' ' . $socio[ 'materno' ] . ' ' . $socio[ 'nombres' ] . ' </p>

        <h3> Selecciona Prestamo </h3>

        <form action="actions/createPrestamo.php" method="post">
          <input type="hidden" name="socio" value="' . $socio[ 'id' ] . '">
          <div>
            <label for="tasa"> Tipo de Prestamo </label>
            <select id="tasa" name="tasa" id="prestamo">
              <option value="1"> Prestamo 1 </option>
              <option value="2"> Prestamo 2 </option>
              <option value="3"> Prestamo 3 </option>
              <option value="4"> Prestamo 4 </option>
              <option value="5"> Prestamo 5 </option>
              <option value="6"> Prestamo 6 </option>
              <option value="7"> Prestamo 7 </option>
            </select>
          </div>
          <div>
            <label for="refinanciamiento"> Refinanciamiento </label>
            <input id="refinanciamiento" type="checkbox" name="refinanciamiento" value="1" />
          </div>
          <div>
            <label for="monto"> Monto </label>
            <input id="monto" type="text" name="monto" />
          </div>
          <div>
            <label for="plazo"> Plazo </label>
            <input id="plazo" type="number" name="plazo" placeholder="Nro de Meses" />
          </div>
          <div>
            <label for="fecha_inicio"> Fecha de Inicio </label>
            <input id="fecha_inicio" type="date" name="fecha_inicio" />
          </div>
          <button> Realizar Prestamo </button>
        </form>
      </div>
    ';
    echo ( layout( 'Ver Socio', $socioCard ) );
  }
  $id = $_GET[ 'id' ];
  $socio = new Socios();
  $socios = $socio->getSocioById( $id );
  if ( count($socios) > 0 )
    verSocio( $socios[ 0 ] );
  else
    echo ( layout( 'Ver Socio', '<h1> Socio no encontrado </h1>' ) );
?>

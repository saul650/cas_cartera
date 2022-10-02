<?php
  require_once( '../models/Socios.php' );
  function verSocio( $socio ) {
    $socioCard = '
      <div>
        <div>
          <span> ' . $socio[ 'nro_doc' ] . ' </span>
        </div>
        <p> ' . $socio[ 'paterno' ] . ' ' . $socio[ 'materno' ] . ' ' . $socio[ 'nombres' ] . ' </p>

        <h3> Selecciona Prestamo </h3>

        <form action="" method="post">
          <select>
            <option> Prestamo 1 </option>
            <option> Prestamo 2 </option>
            <option> Prestamo 3 </option>
          </select>
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
  
  // read path params id and call query to get socio

  $id = $_GET[ 'id' ];
  $socios = getSocioById( $id );
  if ( $socios.length > 0 )
    verSocio( $socios[ 0 ] );
  else
    echo ( layout( 'Ver Socio', '<h1> Socio no encontrado </h1>' ) );
?>

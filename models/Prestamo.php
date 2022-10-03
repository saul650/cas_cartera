<?php
  require_once 'Connection.php';
  class Prestamo {
    public $id;
    public $socio;
    public $tasa;
    public $observaciones;
    public $plazo;
    public $fecha;

    public function __construct( $id, $socio, $tasa, $observaciones, $plazo, $fecha ) {
      $this->connection = new Connection();
      $this->id = $id;
      $this->socio = $socio;
      $this->tasa = $tasa;
      $this->observaciones = $observaciones;
      $this->plazo = $plazo;
      $this->fecha = $fecha;
    }
    
    public function getAllPrestamos () {
      $sql = "SELECT * FROM prestamos";
      $result = $this->connection->getConnection()->query( $sql );
      $prestamos = array();
      while ( $row = $result->fetch_assoc() ) {
        $prestamo = new Prestamo();
        $prestamo->id = $row[ 'id' ];
        $prestamo->socio = $row[ 'id_socio' ];
        $prestamo->tasa = $row[ 'id_tasa' ];
        $prestamo->observaciones = $row[ 'observaciones' ];
        $prestamo->plazo = $row[ 'plazo' ];
        $prestamo->fecha = $row[ 'fecha' ];
        $prestamos[] = $prestamo;
      }
      return $result;
    }

    public function getPrestamoById ( $id ) {
      $sql = "SELECT * FROM prestamos WHERE id = $id";
      $result = $this->connection->getConnection()->query( $sql );
      $row = $result->fetch_assoc();
      $prestamo = new Prestamo();
      $prestamo->id = $row[ 'id' ];
      $prestamo->socio = $row[ 'id_socio' ];
      $prestamo->tasa = $row[ 'id_tasa' ];
      $prestamo->observaciones = $row[ 'observaciones' ];
      $prestamo->plazo = $row[ 'plazo' ];
      $prestamo->fecha = $row[ 'fecha' ];
      return $prestamo;
    }

    public function insertPrestamo ( $prestamo ) {
      $sql = "INSERT INTO prestamos ( id_socio, id_tasa, observaciones, plazo, fecha ) VALUES ( { $prestamo->socio }, { $prestamo->tasa }, '{ $prestamo->observaciones }', { $prestamo->plazo }, '{ $prestamo->fecha }' )";
      $result = $this->connection->getConnection()->query( $sql );
      if ( $result ) {
        $prestamo->id = $this->connection->getConnection()->insert_id;
        return $prestamo;
      }
      return false;
    }

    public function updatePrestamo ( $prestamo ) {
      $sql = "UPDATE prestamos SET id_socio = { $prestamo->socio }, id_tasa = { $prestamo->tasa }, observaciones = '{ $prestamo->observaciones }', plazo = { $prestamo->plazo }, fecha = '{ $prestamo->fecha }' WHERE id = { $prestamo->id }";
      $result = $this->connection->getConnection()->query( $sql );
      return $result;
    }

    public function deletePrestamo ( $id ) {
      $sql = "DELETE FROM prestamos WHERE id = $id";
      $result = $this->connection->getConnection()->query( $sql );
      return $result;
    }

    public getAllPrestamosBySocio ( $socioId ) {
      $sql = "SELECT * FROM prestamos WHERE id_socio = $socioId";
      $result = $this->connection->getConnection()->query( $sql );
      $prestamos = array();
      while ( $row = $result->fetch_assoc() ) {
        $prestamo = new Prestamo();
        $prestamo->id = $row[ 'id' ];
        $prestamo->socio = $row[ 'id_socio' ];
        $prestamo->tasa = $row[ 'id_tasa' ];
        $prestamo->observaciones = $row[ 'observaciones' ];
        $prestamo->plazo = $row[ 'plazo' ];
        $prestamo->fecha = $row[ 'fecha' ];
        $prestamos[] = $prestamo;
      }
      return $result;
    }
  }
?>

<?php 
    include 'Connection.php';
    class t_prestamo {
        private $id;
        private $socio_socio_cas;
        private $id_tasa_cas;
        private $cod_desc_cas;
        private $id_salario_cas;
        private $estado_cas;
        private $obs_cas;
        private $plazo_max_cas;
        private $connection;
        
        public function __construct() {
            $this->connection = new Connection();
        }

        public function getAllSocios() {
            $sql = "SELECT * FROM socios";
            $result = $this->connection->getConnection()->query($sql);
            $socios = array();
            while ($row = $result->fetch_assoc()) {
                $socios[] = $row;
            }
            return $socios;
        }

        public function getSocioById( $id ) {
            $sql = "SELECT * FROM socios WHERE id = $id";
            $result = $this->connection->getConnection()->query($sql);
            $socio = $result->fetch_assoc();
            return $socio;
        }
        
        public function getSocioByNroDoc( $nro_doc ) {
            $sql = "SELECT * FROM socios WHERE nro_doc = '$nro_doc'";
            $result = $this->connection->getConnection()->query($sql);
            $socio = $result->fetch_assoc();
            return $socio;
        }
        
        public function getSociosByPaterno ( $paterno ) {
            $sql = "SELECT * FROM socios WHERE paterno = '$paterno'";
            $result = $this->connection->getConnection()->query($sql);
            $socios = array();
            while ($row = $result->fetch_assoc()) {
                $socios[] = $row;
            }
            return $socios;
        }
    }
?>



<?php 
    include 'Connection.php';
    class Socios_institucion {
        private $id;
        private $id_socio;
        private $papeleta;
        private $carnet_mil;
        private $cossmil;
        private $afil_mes;
        private $afil_anio;
        private $anio_prom;
        private $salario;
        private $estado;
        private $devolAportes;
        private $devolcapitalizacion;
        private $id_coc;
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



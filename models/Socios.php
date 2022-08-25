<?php 
    // CREATE TABLE `socios` (
    //   `id` int(10) NOT NULL AUTO_INCREMENT,
    //   `nombres` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
    //   `paterno` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
    //   `materno` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
    //   `nro_doc` varchar(15) COLLATE utf8_spanish_ci NOT NULL COMMENT 'nro de ci incluyendo el nro complementario',
    //   `expedido` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
    //   `sexo` varchar(1) COLLATE utf8_spanish_ci DEFAULT NULL,
    //   `fecha_nac` date DEFAULT NULL,
    //   `estado_civil` varchar(2) COLLATE utf8_spanish_ci DEFAULT NULL,
    //   `foto` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
    //   `idlog` int(10) NOT NULL,
    //   `estado` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
    //   `idlog_coc` int(10) NOT NULL,
    //   `num_correlativo` int(5) NOT NULL DEFAULT '0' COMMENT 'numero correlativo para socios y tener un control en kardex',
    //   `estado_kardex` char(2) COLLATE utf8_spanish_ci NOT NULL DEFAULT '' COMMENT 'para el estado de kardex KN=kardex desactualizado, KI=kardex impreso o actualizado',
    //   `mindef` char(2) COLLATE utf8_spanish_ci NOT NULL COMMENT 'BA=baja ministerio de defensa',
    //   `idlog_mindef` int(10) NOT NULL COMMENT 'para saber la fecha de la accion',
    //   PRIMARY KEY (`id`)
    // )


    include 'Connection.php';
    class Socios {
        private $id;
        private $nombres;
        private $paterno;
        private $materno;
        private $nro_doc;
        private $expedido;
        private $sexo;
        private $fecha_nac;
        private $estado_civil;
        private $foto;
        private $idlog;
        private $estado;
        private $idlog_coc;
        private $num_correlativo;
        private $estado_kardex;
        private $mindef;
        private $idlog_mindef;

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



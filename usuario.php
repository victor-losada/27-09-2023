<?php
    require_once("Autoload.php");

    class usuario extends Conexion {
        private $strNombre;
        private $intTelefono;
        private $strEmail;
        private $strDireccion;
        private $conexion;

        public function __construct(){
            $this->conexion = new Conexion();
            $this->conexion = $this->conexion->connect();

        }

        public function insertusuario(string $nombre, int $telefono, string $email, string $direccion){
            try {
                $this->strNombre = $nombre;
                $this->intTelefono = $telefono;
                $this->strEmail = $email;
                $this->strDireccion = $direccion;

                $sql = "INSERT INTO usuario (nombre,telefono, email, direccion ) VALUES (:nom, :tel, :email, :dir )";
                $insert = $this->conexion->prepare($sql);
                $arrData = array(":nom" => $this->strNombre,
                                    ":tel" => $this->intTelefono,
                                    ":email" => $this->strEmail,
                                    ":dir" => $this->strDireccion
                                );
                $resInsert = $insert->execute($arrData);
                $idInsert = $this->conexion->lastInsertId();
                $insert->closeCursor();
                return $idInsert;
                
            } catch (Exception $e) {
                echo "Error: ". $e->getLine();
                //throw $th;
            }
        }





    }
?>
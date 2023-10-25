<?php
require_once ("Autoload.php");
class RegistroMesa extends ConexionMesa {

    //PROPIEDADES

    private $intId_pedido;
    private $strEstado;
    private $conexion;

    //Metodos

    public function __construct(){
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }

    public function setItem(string $id_pedido,  int $estado ){

        $this->intId_pedido = $id_pedido;
       
        $this->strEstado = $estado;
        

        $sql = " INSERT INTO `mesa`(`id_pedido`, `estado`) VALUES (:id, :es) ";

        $insert = $this->conexion->prepare($sql);

        $arrayData = array(
            ":id"=>$this->intId_pedido,
            ":es"=>$this->strEstado
           
        );
        $resInsert = $insert->execute($arrayData);
        $insert->closeCursor();
    }

}
<?php
require_once ("Autoload.php");
class Item extends Conexion {

    //PROPIEDADES

    private $strProducto;
    private $intPrecio;
    private $conexion;

    //Metodos

    public function __construct(){
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }

    public function setItem(string $producto,  int $precio ){

        $this->strProducto = $producto;
       
        $this->intPrecio = $precio;
        

        $sql = " INSERT INTO `items`(`producto`, `precio`) VALUES (:pro, :pre) ";

        $insert = $this->conexion->prepare($sql);

        $arrayData = array(
            ":pro"=>$this->strProducto,
            ":pre"=>$this->intPrecio
           
        );
        $resInsert = $insert->execute($arrayData);
        $insert->closeCursor();
    }

}
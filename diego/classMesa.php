<?php
require_once("classMueble.php");
class Mesa extends Mueble {
    //propiedades 
    private $strForma = "";
    protected $strTamanio;
    public $strStatus = "cansado";

    public function _construct(string $descripcion, float $precio, string $color, string $material, string $Tamanio) {
        parent::_construct($descripcion, $precio, $color, $material);

        $this-> strTamanio = $tamanio;
}
public function setForma($Forma) {
    $this-> strforma = $Forma;
}
public function getInfoProducto() {
    $arrProducto = array("productor" =>$this-> strDescripcion,
        "precio" =>$this-> fltPrecio,
        "stock_minimo" =>$this-> intStockMinimo,
        "estado" =>$this-> strStatus,
        "color" =>$this-> strColor,
        "material" =>$this-> strMaterial,
        "Tamaño" =>$this-> strTamanio,
        "forma" =>$this-> strForma,
    
    
  
    );
return $arrProducto;

}

}
?>
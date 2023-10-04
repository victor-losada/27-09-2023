<?php
require_once("classProducto.php");
class mueble extends producto {
    public $strColor;
    public $strMaterial;
    public $strStatus = "agotado";

    public function _construct(string $color, string $material, string $status){
        $this-> strColor = $color;
        $this-> strMaterial = $material;
}
public function getInfoproducto(){
    $arrproductos = array(
        "producto" => $this-> strDescripcion,
        "precio" => $this-> fltPrecio,
        "stock_minimo" => $this-> intStockMinimo,
        "estado" => $this-> strstatus,
        "color" => $this-> strColor,
        "material" => $this-> strMaterial,
    );
    
}
}
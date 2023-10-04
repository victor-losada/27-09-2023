<?php
class producto {
    private $strDescripcion;
    private $fltPrecio;
    private $intStockminimo;
    public $strStatus = "agotado";

    function _construct(string $descripcion, float $precio, intval $stock_minimo) {
        $this-> strDescripcion = $descripcion;
        $this-> ftlPrecio = $precio;
        
}
public function getInfoProducto() {
    $arrproducto = array(
        "producto" => $this-> strDescripcion,
        "precio" => $this-> ftlPrecio,
        "stock_minimo" => $this-> intStockminimo,
        "estado" => $this-> strStatus,
    );
    return $arrproducto;
    
}
}
?>
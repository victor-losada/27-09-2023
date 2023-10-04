<?php
require_once("classMesa.php");
function dep($data) {
    $format  = print_r(value: "<pre>");
    $format .= print_r($data);
    $format .= print_r(value: "</pre>");
    
    return $format;
}

$objCama = new product(descripcion: "cama", precio: 10.000);

$arrInfo = $objCama->getInfoProducto();
dep($arrInfo);

echo "<br>";

$objMueble = new Mueble(descripcion: "closet", precio: 20.000, color: "negro", material: "madera");

$arrInfo = $objMueble->getInfoProducto();
dep($arrInfo);

echo "<br>";

$objMesa = new Mesa(descripcion: "mesa de noche", precio: 30.000, color: "negro", material: "pino", tamanio:"grande");
$objMesa->getInfoProducto();
$arrInfo = $objMesa->getInfoProducto();
dep($arrInfo);
?>
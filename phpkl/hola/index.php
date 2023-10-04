<?php
include_once ("classOperaciones.php");
$calculadora = new Operaciones (5,5);
$res = $calculadora ->suma();
echo "<br>La suma es igual a = ".$res;

$calculadora = new Operaciones (10,5);
$res = $calculadora ->resta();
echo "<br>La resta es igual a = ".$res;


$calculadora = new Operaciones (10,5);
$res = $calculadora ->multiplicacion();
echo "<br>La multiplicacion es igual a = ".$res;

$calculadora = new Operaciones (10, 5);
$res = $calculadora ->division();
echo "<br>La division es igual a = ".$res


?>
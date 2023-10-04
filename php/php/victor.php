<?php

$a=4;
$b=10;
$suma = $a +$b;
$resta = $a- $b;
$multiplica = $a * $b;
$divide = $a / $b;

echo"el resultado de la suma es $suma \nel resultado de la resta es $resta \nel resultado de la multiplicacion es $multiplica \nel resultado de la division es $divide \n";
?>
<?php
$nombre = readline("primer nombre\n");
$apellido = readline("primer apellido\n");

echo "bienvenido $nombre  $apellido \n";
?>
<?php
$numero1 = readline("ingrese el numero que desea sumar \n");
$numero2 = readline("ingrese el numero que desea sumar \n");
$suma = $numero1 + $numero2;

echo "la suma entre $numero1 + $numero2 es igual a $suma \n";
?>
<?php
$numero1 = readline("ingrese el numero que desea sumar, restar y multipicar \n");
$numero2 = readline("ingrese el numero que desea sumar, restar y multiplicar \n");

$suma = $numero1 + $numero2 ;
$resta = $numero1 -$numero2 ;
$multiplicar = $numero1 * $numero2 ;

echo "la suma de $numero1 + $numero2 es igual a $suma \n la resta de $numero1 - $numero2 es igual a $resta \n la multiplicacion de $numero1 * $numero2 es igual a $multiplicar \n";
?>
<?php
$nombre = readline("ingrese su nombre \n");
$sueldo = readline("ingrese su sueldo (sin puntos) \n");
$aumento = ($sueldo * 0.15) + $sueldo;

echo "estimado señor $nombre se le informa que su sueldo de $sueldo se le aplico un aumento del 15%. Es con gratitud informar que su sueldo actual es de $aumento \n "


?>
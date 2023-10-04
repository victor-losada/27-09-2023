<?php
function generarFibonacci($n) {
    $fibonacci = array(0, 1);
    for ($i = 2; $i < $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];

    }
    return $fibonacci;
}
$numero = 10;
$secuencia = generarFibonacci($numero);
echo "secuencia de fibonacci de $numero terminos:";
echo implode(",", $secuencia);



?>
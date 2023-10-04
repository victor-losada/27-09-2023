<?php
function sumardigitos($numero) {
    $suma = 0;
    $numeroStr = (string)$numero;

    for ($i = 0; $i < strlen($numeroStr); $i++){
        $suma += intval($numeroStr[$i]);
    } 
    return $suma;
}
$numero = 1234;
$resultado = sumarDigitos($numero);
echo "la suma de los digitos de $numero es: $resultado"
?>
<?php
function ordenarArray($numeros){
    $n = count($numeros);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($numeros[$j] > $numeros[$j +1 ]){
                $temp = $numeros[$j];
                $numeros[$j] = $numeros[$j + 1];
                $numeros[$j + 1] = $temp;
            }
        }
    }
    return $numeros;


}
$nums = array(64, 34, 25, 12, 22, 11, 90);
$numsOrdenados = ordenarArray($nums);

echo "Array ordenado:";
foreach ($numsOrdenados as $num) {
    echo $num . "";
}

?>
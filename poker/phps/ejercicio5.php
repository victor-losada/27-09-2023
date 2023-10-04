<?php 
function fierroAlv() {
    for ($i = 1; $i <= 100; $i++){
        $output = "";

        if ($i % 3 === 0) {
            $output.= "peso";
        }
    }
    if ($i % 5 === 0) {
        $output .= "pluma";
        echo ($output !== "") ? $output : $i;
        echo "\n";
    }

}
?>
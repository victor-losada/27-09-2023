
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 1</title>
</head>
<body>
    <form action="#" method="POST">
        <input type="text" name="hola" placeholder="ingrese una palabra">
       <button type="submit" >Enviar</button>
    </form>
</body>
</html>

<?php

function palindromo($palabra)
{
    $sinespacio = str_replace(" ","", $palabra);
    $minusculas = strtolower($sinespacio);
    if ($minusculas == strrev($minusculas))
    {
        return "es palindromo";

    }
    else {
        return "no es";
    }

}
//validar si el formulario trae algo
if (isset($_POST["hola"])){
    $hola = $_POST["hola"];
    $pal = palindromo($hola);

echo $pal;
}
else{
    $hola = "";
    $pal = "";
}


?>

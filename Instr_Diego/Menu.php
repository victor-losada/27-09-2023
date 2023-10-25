<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Item</title>
</head>
<body>
<h1>REGISTRAR ITEMS</h1>
    <form action="" method="post">
    <div>
        <label for="">Producto</label>
        <input type="text" name="producto" >
    </div>
    <br>
    <div>
        <label for="">Precio</label>
        <input type="text" name="precio" >
    </div>
    <br>
    <div>
        <input type="submit" name="registro" value="Registrar" >
    </div>
    </form>
    
    
</body>
</html>
<?php
require_once ("Item.php");

$item = new Item(); 

$producto = $_POST['producto'];
$precio = intval($_POST['precio']);

$item -> setItem($producto, $precio);



?>
<?php
require_once ("classRegistro.php");

try {
    if(isset($_POST)){
        $registro = new Registro();

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $cedula = intval($_POST['cedula']);
        $tel = intval($_POST['tel']);
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $nick = $_POST['nick'];

        if(!empty($nombre) and !empty($apellido) and ($cedula > 0) and ($tel > 0) and !empty($email) and !empty($pass) and !empty($nick)){
            $registro->setOperadores($nombre,$apellido,$cedula,$tel,$email,md5($pass),$nick);
        }

    }
}catch (Exception $e){
    echo "Error en la consulta ".$e->getMessage();
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Registro de operadores</h1>
<form action="" method="post">
    <div>
        <label for="">Nombre</label>
        <input type="text" name="nombre" >
    </div>
    <br>
    <div>
        <label for="">Apellidos</label>
        <input type="text" name="apellido" >
    </div>
    <br>
    <div>
        <label for="">Cedula</label>
        <input type="text" name="cedula" >
    </div>
    <br>
    <div>
        <label for="">Telefono</label>
        <input type="text" name="tel" >
    </div>
    <br>
    <div>
        <label for="">E-mail</label>
        <input type="text" name="email" >
    </div>
    <br>
    <div>
        <label for="">Password</label>
        <input type="text" name="pass" >
    </div>
    <br>
    <div>
        <label for="">Nickname</label>
        <input type="text" name="nick" >
    </div>
    <br>
    <div>
        <input type="submit" name="registro" value="Registrar" >
    </div>
</form>

</body>
</html>




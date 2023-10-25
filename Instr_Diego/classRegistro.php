<?php
require_once ("Autoload.php");
class Registro extends Conexion {

    //PROPIEDADES

    private $strNombres;
    private $strApellidos;
    private $intCedula;
    private $intTelefono;
    private $strEmail;
    private $strPassword;
    private $strNick;
    private $conexion;

    //Metodos

    public function __construct(){
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }

    public function setOperadores(string $nombres, string $apellidos, int $cedula, int $telefono, string $email, string $password, string $nick){

        $this->strNombres = $nombres;
        $this->strApellidos = $apellidos;
        $this->intCedula = $cedula;
        $this->intTelefono = $telefono;
        $this->strEmail = $email;
        $this->strPassword = $password;
        $this->strNick = $nick;

        $sql = " INSERT INTO `operadores`(`operadores_nombre`, `operadores_apellido`, `operadores_cedula`, `operadores_telefono`, `operadores_email`,`operadores_password`, `operadores_nickname`) VALUES (:nom, :ape, :cedu, :tel, :email,:pass,:nick) ";

        $insert = $this->conexion->prepare($sql);

        $arrayData = array(
            ":nom"=>$this->strNombres,
            ":ape"=>$this->strApellidos,
            ":cedu"=>$this->intCedula,
            ":tel"=>$this->intTelefono,
            ":email"=>$this->strEmail,
            ":pass"=>$this->strPassword,
            ":nick"=>$this->strNick
        );
        $resInsert = $insert->execute($arrayData);
        $insert->closeCursor();
    }

}
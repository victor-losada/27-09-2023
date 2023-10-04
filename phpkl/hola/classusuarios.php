<?php
class usuarios {
    public $strnombre;
    public $stremail;
    public $strtipo;
    public $strclave;
    static $estado = "activo"

    function __construc ( string $nombre, string $email, string $tipo){
        $this-> strnombre =  $nombre;
        $this-> stremail = $email;
        $this-> strtipo = $tipo;
        $this->strclave = rand(100000, 999999);


    }

    function getNombre(){
        return $this-> strnombre;
    }
    function getPerfil(){
        echo "<h1> Datos personales </h1>";
        echo "el nombre es:". $this-> strnombre. "<br>";
        echo "el tipo es:". $this-> strtipo. "<br>";
        echo "el email es:". $this-> stremail. "<br>";
        echo "el clave es:". $this-> strclave. "<br>";
        echo "el estado es:". self:: $estado. "<br>";
        
    }

    public function setcontrasena(string $contra) {
        $this->strclave = $contra;
    }
    /*function registrarse(){

     }
     function verperfil(){

     }
     function cambiarclave(){
        
     }
     */

    


    }


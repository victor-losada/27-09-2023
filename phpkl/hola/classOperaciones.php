<?php
class Operaciones {
    //propiedades 
    public $intcantidaduno;
    public $intcantidaddos;
    public $resultado;

    //metodos 
    function __construct(int $num1, int $num2){
        $this-> intcantidaduno = $num1;
        $this-> intcantidaddos = $num2;
    }
    function suma(){
        $this-> resultado = $this-> intcantidaduno + $this-> intcantidaddos;
        return $this-> resultado;
    }

    function resta(){
        $this-> resultado = $this-> intcantidaduno - $this-> intcantidaddos;
        return $this-> resultado;
    }

    function multiplicacion(){
        $this-> resultado = $this-> intcantidaduno * $this-> intcantidaddos;
        return $this-> resultado;
    }

    function division(){
        $this-> resultado = $this-> intcantidaduno * $this-> intcantidaddos;
        return $this-> resultado;
    }

        

}
?>
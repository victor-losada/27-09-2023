<?php 

  $ingreso = readline("desea registrarse en el sistema ");


do{
  
    if($ingreso === "si"){

        $nombre = readline("ingrese su nombre ");
        $edad  = readline("su edad ");

        $persona= [
            'nombre' => $nombre,
            'edad' => $edad
        ];
        echo "se registro exitosamente \n";

        $buscar = readline("buscar persona ");

        switch($buscar){
            case "si":

                $per = readline("nombre de la persona ");

               $a = $per == $nombre ? "la persona es ". $nombre : "no se encontro la persona";
               echo $a;

               break;

            case "no":
                echo "se encuntra activo en el sistema";
                break;

            default:
            echo "no se encuentra en parametros";
            break;
        }

    }else{
        echo "tenga un buen dia ";
    }

    break;

}while($ingreso );

?>
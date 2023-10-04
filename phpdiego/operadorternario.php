
<?php

$texto=readline("ingrese un texto \n");
$longitud=strlen($texto);
$longitud=match (true) {
    $longitud<=15 =>"esta cadena es corta",
    $longitud<=25 => "esta cadena es larga",
    $longitud<=100=>"esta cadena es extenza",
   
    
};
echo"$longitud \n";


$resultado=readline("ingrese su resultado (del 1 al 100 \n");
$calificacion=match (true) {
     $resultado<=50 => "reprobaste",
     $resultado<=70 => "aprobaste",
     $resultado<=90 => "excelente",
     $resultado<=100 => "sobresaliente",
     default=>"numero invalido",
     
};
echo"$calificacion \n";

$date=readline("ingrese un nuemro del 1 al 12 \n");
$resultado=match ($date) {
    '1'  => 'pertenece al mes de enero',
    '2'  => 'pertenece al mes de febrero',
    '3'  => 'pertenece al mes de marzo',
    '4'  => 'pertenece al mes de abril',
    '5'  => 'pertenece al mes de mayo',
    '6'  => 'pertenece al mes de junio',
    '7'  => 'pertenece al mes de julio',
    '8'  => 'pertenece al mes de agosto',
    '9'  => 'pertenece al mes de septiembre',
    '10' => 'pertenece al mes de octubre',
    '11' => 'pertenece al mes de noviembre',
    '12' => 'pertenece al mes de diciembre',
    default=>"fuera de rango",
    
};
echo"$resultado \n";

$numero=readline("ingrese un numero del 1 al 7 \n");
$mensaje=match ($numero) {
    '1' => 'es lunes',
    '2' => 'es martes',
    '3' => 'es miercoles',
    '4' => 'es jueves',
    '5' => 'es viernes',
    '6' => 'es sabado',
    '7' => 'es domingo',
    default=> "numero invalido",
};
echo"$mensaje \n";
#ciclo match
// Lee la fecha de entrada
$fecha = readline("Ingresa fecha  día/mes/año: \n");
$mes = substr($fecha,3 ,2);
$mensaje=match ($mes) {
   '01'  =>'enero es el primer mes del año',
    '02' => 'febrero es l mes mas corto del año',
    '03' => 'marzo es el mes mas corto del año',
    '04' => 'abril es el mes mas corto del año',
    '05' => 'mayo es el mes de las madres',
    '06' => 'junio es el mes mas corto del año',
    '07' => 'julio es el mes de la independencia',
    '08' => 'agosto es el mes de los vientos',
    '09' => 'septiembre es l mes mas corto del año',
    '10' => 'octubre es el mes de los niños',
    '11' => 'noviembre es el mes mas corto del año',
    '12' => 'diciembre es el mes de la navidad',
    default=>"mes inalido",
};
echo"$mensaje \n";

// Usa el ciclo match para mostrar un mensaje según el mes




$letra=readline("ingrese una letra de la a hasta la z \n");
$mensaje=match ($letra) {
    'a','e','i','0','u' => 'es una bocal',
     default=>"es una consonante",
     
};
echo"$mensaje \n";




$tono=readline("ingrese el nombre de algun color primario \n");
$origen=match ($tono) {
    'amarillo' => '  signifa nuestra riqieza',
     'azul'=> 'nuestras fuentes hidricas',
     'rojo'=>'sangre derramada',
     default=>'color segundario',
};
echo"$origen \n";

$edad=readline("ingrese un numero del 10 en adelante hasta el 100 \n");
$mostrar=match (true) {
    $edad>=60 => "eres de la tercera edad",
    $edad>=30 => "eres un adulto",
    $edad>=10 => "eres un niño",
};
echo "$mostrar \n";

$color=readline("ingrese un color \n");
$resul=match ($color) {
    'rojo' => 'detenerse',
    'verde' => 'segir',
    'amarillo'=>'precaucion',
    default=>'desconocido',
};
echo "$resul \n";

$numero=readline("ingrese un numero \n");
$mensaje=match ($numero) {
   '1' => 'hola juan',
   '2' => 'Buen dia',
   '3' => 'Adios vuelve pronto',
    default=> 'numero fuera de rango',
};
echo "$mensaje \n";


#determine si es un año bisiesto
$año=intval(readline("ingrese un año \n"));
if ($año%4==0){
    echo"este año es bisiesto \n";
    
}
else{
    echo"este año es normal( no es bisiesto) \n";
}
#prograam si un numero es divisible por 3 y 5*/
$numero=intval(readline("ingrese un numero \n"));
if ($numero%3==0&&$numero%5==0){
    echo"este numero es divisible por 3 y 5 \n";
}
else{
    echo "este numero no es divisible por 3 y 5 \n";
    
}
$calificacion=intval(readline("ingrese el resultado de su calificacion de (1/100) \n"));
if ($calificacion>=60&&$calificacion<90){
    echo"querido estudinte tu resultado es aprobado \n";
}
else if($calificacion>=90){
    echo"sobresaiente \n";
}
else {
    echo"reprobado \n";
}

$edad=readline("ingrese su edad \n");
$genero=readline("ingrese su genero \n");
if ($edad>=60&&$genero=="masculino"){
    echo "querido amigo ya te puedes pensionar \n";
}
else if ($edad>=54&&$genero=="femenino"){
echo"ya estas en edad de pensionarte \n";
}
else{
    echo"aun no te puedes pensionar \n";
    
}
$cantidad=intval(readline("ingrese el numero de camisetas que desea comprar \n"));
$descuento=$cantidad>3?"tiene un descuento del 10%":"tiene descuento del 20% \n";
echo"descuento \n";

$dia=intval(readline("escriba un numero del 1 al 7 \n"));
switch($dia){
    case"1":
        echo "lunes \n";
        break;
        case"2":
            echo"martes \n";
            break;
            case"3":
                echo"miercoles \n";
                break;
                case "4":
                    echo"jueves \n";
                    break;
                    case "5":
                        echo"viernes \n";
                        break;
                        case"6":
                            echo"sabado \n";
                            break;
                            case"7":
                                echo"domingo \n";
                                default: echo 'fuera de rango \n';
}
$numero=intval(readline("ingrese un numero \n"));
if ($numero<0){
    echo"este numero es negativo \n";
}
else if ($numero==0){
    echo"este numero es neutro cero \n";
}
else {
    echo"este numero es positivo \n";
}
$dato=intval(readline("ingrese un numero \n"));
if ($dato%2==0){
    echo" este numero es par \n";
}
else{
    echo"este numero es impar \n";
}
$numero=intval(readline ("ingrese cualquier numero \n"));
$resultado=($numero%2==0)?"es par":"es impar";
echo "$resultado \n";
#calcular el mayor de dos numeros
$nmero=intval(readline ("ingrese un numero \n"));
$nmer1=intval(readline ("ingrese un numero \n"));
$resultado=($nmero>$nmer1)?"este es mayor":"este es menor \n";
echo"$resultado \n";

$cantidad=intval(readline("cuantas camisas desea comprar \n"));
$descuento=($cantidad>3)?"tiene descuento del 20%":"tienen descuento del 10%";
echo"$descuento \n";
#determiar si un numero es positivo, negativo o cero
$number=intval(readline("ingrese un numero \n"));
$descripcion=($number>0)?"es positivo":(($number<0)?"es negativo":"es cero");
echo "$descripcion \n";



?>
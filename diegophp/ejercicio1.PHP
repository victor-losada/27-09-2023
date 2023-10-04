   <?php
$num=-10;
while($num <= 20){
   echo $num. " ";
   $num++;
}
/*Diseñe un código que imprima la tabla de multiplicar de un numero entre el 1 y 12.*/
$numero=7;
$i=1;
while($i<=12){
    $resultado=$numero*$i;
    echo"$numero x $i= $resultado\n";
    $i++;
}
/*Diseñe un código que muestre los números pares entre 0 y 100.*/
$numero=0;
while($numero<=100){
    echo $numero . " ";
    $numero+=2;
}
$num=10;
for($i=-10;$i<=$num;$i++)
echo$i . " ";
$sum=0;
for($i=1;$i<=18;$i++){
    $sum+=$i;
}
echo "la suma de los 18 primeros numeros es". $sum;
for ($i = 1; $i <= 10; $i++) {
    
   echo "Tabla de multiplicar del $i:\n";
   
   for ($j = 1; $j <= 10; $j++) {
       $resultado = $i * $j;
       echo "$i x $j = $resultado \n"; 
   }
   
   }

  
echo  "\n"; 
?>
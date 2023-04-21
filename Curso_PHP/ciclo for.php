<?php
/*for (iniciar el ciclo; condicion ; incremento o decremento){
    instrucciones que se ejecutaran si se cumple la condicion 
}

for(iniciar el ciclo; condicion; incremento  o decremento):
    las instrucciones que se realizaran si se cumple el ciclo 
endfor;
*/

echo "la lista de numeros pares es: ";
for ($i=2; $i <=26 ; $i= $i+2) {
    echo "<br>";
    echo $i;
    echo"<br>";
}

echo "otra forma <br><br>";
for ($x=1; $x <= 20;  $x=$x+1) { 
    echo $x." ejecutando el ciclo <br>";
} echo "termina el ciclo <br><br>";



//otra forma 
echo "otra forma ";

for ($j=1; $j <=5;  $j++) :
    echo $j;
    echo "<br>";
endfor;
echo "aqui termina el ciclo for ya que se repite".$j;


?>
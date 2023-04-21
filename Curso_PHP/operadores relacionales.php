<?php
$Valor1=50;
$Valor2=75;
$Valor3=180;

/*sentencia if operadores relacionales o logicos
(condicion)
{codigo o accion al realizar en el navegador si se cimple la condicion}
*/
if($Valor1 >= $Valor2){
   // echo"el valor uno es mayor al valor dos el cual es: ".$Valor1;
   echo "verdadero ";
    

}else{
 //dentro de el else, si la accion es contaria al if dentro de las llaver la accion a ejecutarse    
//echo "la declaracion de que el valor1 es mayor que el valor2 es falsa";
    echo"falso";


}


//comparar el valor de la variable con un string"."<br>";
echo "comparando el valor de la variable con un string"."<br>";
$persona="Hombre";

if($persona == 'Hombre'){
 echo "el genero de la variable persona es Hombre se llamara Luis"."<br> <br>";
}else{
    echo "no se cumple el if entonces el genero no es hombre por lo tanto no puedo ponerle nombre";
}



//comparando el valor de la variable con un string 
//operadores logicos
//and && si solo si 
//or || que se cumpla cualquiera de las dos 


if($Valor1 >= $Valor2 &&  $Valor1 >= $Valor3 ){
echo"el valor de: ".$Valor1.  "es mayor a ".$Valor2. "pero si mayor a  ".$Valor3;

}else if($Valor2 >= $Valor1 and $Valor2 >= $Valor3 ){
 echo "el valor de:".$Valor2." es mayor a ".$Valor1." y mayor a ".$Valor3;
}
elseif ($Valor3 >= $Valor1 && $Valor3 >= $Valor2) {
    echo "el valor de: ".$Valor3 ."es mayor a " .$Valor1." y mayor a ".$Valor2;

}else{
    echo"no se cumple ninguna de las condiciones";
}

echo "<br> <br>";


//validar si es una consonante 
$letra="a";
if($letra == 'a' || $letra == 'e' || $letra == 'i' || $letra == 'o '||$letra == 'u'){
    echo "el valor de la variable de la letra es ".$letra ." es una vocal";
}else{
    echo "el valor de la variable es una consonante";
}


?>
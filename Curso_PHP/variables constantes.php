<?php
//declarar variable + identificador + asignacion de datos o valores 

$Variables =45;
$Mensaje ="El valor de la variables es: ";
$Numero1= 56;
$Numero2= 24;
$Numero3= 89;

//operadores aritmeticos (+,-,*,/)
$Suma =$Numero1+$Numero2+$Numero3;
echo "la suma de".$Numero1."+".$Numero2."+".$Numero3."=".$Suma."<br>";

$resta=$Numero1-$Numero2-$Numero3;
echo "la resta de".$Numero1."-".$Numero2."-".$Numero3."=".$resta."<br>";

$Multiplicacion=$Numero1*$Numero2*$Numero3;
echo "la multipliacion de".$Numero1."*".$Numero2."*".$Numero3."=".$Multiplicacion."<br>";

$Division=$Numero1/$Numero2/$Numero3;
echo "la division de".$Numero1."/".$Numero2."/".$Numero3."=".$Division."<br>";

//declarar una contante (no cambia)
define ('Hora','consta de 60 minutos');
echo Hora;
echo constant('Hora')."<br>";
echo var_dump(constant('Hora'))."<br>";
echo var_dump($Suma)."<br>"."<br>";

//ocupar operadores con variables y constantes 
$Radio=2;

define('Pi', '3.1416');
$Ejemplo = Pi * $Radio *$Radio; 
echo $Ejemplo;

$Mensaje2= "el area del circulo radio es ".$Radio." por el valor de Pi que es: ". Pi." el resultado es ".$Ejemplo;
echo $Mensaje2."<br>";

echo var_dump(constant('Pi'));
echo "<br>";


$Decremento =10;
echo "el valor del Decremento es: ".--$Decremento."<br>";

$Incremento = 10;
echo "el valor del incremento es de: ".++$Incremento;










?>
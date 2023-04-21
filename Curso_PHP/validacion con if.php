<?php
//validacion numericos con if 

$Calificacion1=0;
$Calificacion2=0;
$Calificacion3=5;
$Calificacion4=5;
$Calificacion5=7;
$pasas=7;

//forma corta de validacion 
echo"forma corta de validacion de que sea un numero el valor de la variable <br><br>";


if(is_numeric($Calificacion1)&& is_numeric($Calificacion2)&& is_numeric($Calificacion3)&& is_numeric($Calificacion4)&& is_numeric($Calificacion4)){
$promedio=($Calificacion1+$Calificacion2+$Calificacion3+$Calificacion4+$Calificacion5)/5;
  if($promedio>=$pasas){
    echo"sacaste ".$promedio." ya estas del otro lado";

  }else{
    echo"sacaste ".$promedio." vas para recurse por menso jeje";
  }
}else{
echo "no valido";
}

echo "<br><br><br><br>";

echo "otra forma larga  de validacion <br> <br> ";

//validacion forma larga 


if(!is_numeric($Calificacion1)){
   echo "el valor de la calificacion es: ".$Calificacion1." no es un valor numerico ";
}
  elseif (!is_numeric($Calificacion2)) {
    echo "el valor de la calificacion es: ".$Calificacion2." no es un valor numerico "; 
}
  
elseif (!is_numeric($Calificacion3)) {
    echo "el valor de la calificacion es: ".$Calificacion3." no es un valor numerico ";
 }

elseif (!is_numeric($Calificacion4)) {
    echo "el valor de la calificacion es: ".$Calificacion4." no es un valor numerico ";
 }

elseif (!is_numeric($Calificacion5)) {
    echo "el valor de la calificacion es: ".$Calificacion5." no es un valor numerico ";
 }


else {
    $promedio=($Calificacion1+$Calificacion2+$Calificacion3+$Calificacion4+$Calificacion5)/5;
  if($promedio>=$pasas){
    echo"El promedio obtenido es de  ".$promedio." por lo tanto  estas aprobado";

  }else{
    echo"El promedio obtenido es de".$promedio." por lo tanto estas no reprobrado ";
  }
   
}

?>
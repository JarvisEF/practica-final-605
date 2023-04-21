<?php
/*utilizar las sentencia de flujo if y else en su metodo alternativo
utilizar constantes, variables, operadores aritmeticos , logicos y de relacion 

el ejercicio: Calcular la edad con años, meses, dias, horas utilizando un año de nacimiento e indicando si es mayor o menor 
de edad imprimiendo los datos como años, meses, dias, horas.
*/

define('actualidad', 2023);
define('meses', 12);
define('dias', 365);
define('horas',24);

$año=2005;
$mayor=18;

$edad= actualidad - $año;
$meses=$edad* meses;
$dias=$edad*dias;
$horas= dias*horas*$edad;

if (is_numeric($año)&& is_numeric($mayor)&& is_numeric($meses)&& is_numeric($dias)&& is_numeric($horas)):
  if ($edad >= $mayor):  
    echo "tu eres mayor de edad por que: ";
    echo "tienes: ".$edad." años de vida <br>";
    echo "son: ".$meses." meses de vida <br>";
    echo "son: ".$dias." dias de vida <br>";
    echo "son: ".$horas." horas de vida <br>";
  else:
    
    echo "eres menor de edad por que: ";
    echo "tienes: ".$edad." años de vida <br>";
    echo "son: ".$meses." meses de vida <br>";
    echo "son: ".$dias." dias de vida <br>";
    echo "son: ".$horas." horas de vida <br>";
  endif;

else:

    echo "algunos de los valores asignados en las variables no son valor numericos ";

endif;
?>
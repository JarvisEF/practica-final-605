<?php
//la salida de datos sera true el valor es tipo string y false de lo contrario 

//foreach blucle especial el cual permite recorrer las estructuras que contienen varios elementos

$valores= array(false,true,null,'aeiou','23',23,'23.5','','','0',0); 
 foreach ($valores as $valor){
    echo "es un string(";
    //var_export: obtiene la informacion estructurada de la varible dada , saca la informacion 
    var_export($valor);
    echo")=";

   echo var_dump(is_string($valor));
 
echo"<br><br><br>";

}



$mensaje="esto es una cadena de caracteres";
if (is_string($mensaje)) {
   
    echo $mensaje."<br>";

var_dump($mensaje);

}else{
    echo"esto no es una cadena de caracteres  por que es: ".$mensaje; 
}





?>
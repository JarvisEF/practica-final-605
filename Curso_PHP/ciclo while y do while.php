<?php
/*trabajare con el ciclo while y do...while ;

while: evalua la expresion para poder llevar acabo una accion, valida la expresion y se ejecuta accion

do while: primero se hace la acccion y despues se valida la expresion 


while (expresion o validacion) {
    acciones se cumpla la expresion
}

do{
    sentencia o accion 

}while(expresion o validacion);

*/

$variable=0;
while ($variable < 25) {
    $variable ++; //incremento en la variable de uno en uno 
    echo"el valor de la variable es: = ".$variable."<br> <br>";

}
echo "el ciclo while acaba en ".$variable;

echo"<br><br><br>";


// el ciclo do while , hace la expresion a evaluar se efectua al final de la sentencia

$Variable=9;
do {
 echo $Variable."<br>";
 $Variable++;
 //echo "se ejecutara el codigo por que primero genera la accion antes que la validacion";

} while ($Variable <=10);
//echo "se ejecuta el codigo una vez que la expresion o validaciion se cumple";

echo"<br><br>";




echo "generar la tabla de multiplicar utilizando el ciclo while <br>";
//generar la tabla de multiplicar utilizando el ciclo while



$num=2;
$i=1;

while ($i<= 10):

    echo $i."x".$num."=".($i *$num)."<br>";
    $i++;

endwhile;
    
echo " <br><br><br>";
//do while

do {
    
    echo $num." x ".$i. " =".($i*$num)."<br>";
    $i++;

} while ($i <= 10);

?>
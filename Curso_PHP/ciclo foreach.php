<?php

/*
foreach (expresion as $variable){
    acciones que se tendra dentro del bucle 
}
*/
$Arreglo = ["abcdefghijk",54,'e',14.5,true];
echo "<pre>\n";
var_dump($Arreglo);
echo "<pre>\n";
foreach ($Arreglo as $Recorrido) {
    echo "<p>$Recorrido</p>\n";
}
echo "termina el cliclo <br>";
?>
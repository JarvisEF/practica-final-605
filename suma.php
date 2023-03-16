
<?php

if(isset($_POST['btnSuma'])){
    $num1 = $_POST ['caja1'];
    $num2 = $_POST ['caja2'];

    $num1 = (int) $num1;
    $num2 = (int) $num2;

    $resultado = $num1 + $num2;
    $valor = $resultado;
}else{
    echo "No existen valores";
}
?>





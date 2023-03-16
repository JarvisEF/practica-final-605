<?php
    include 'suma.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practica 3</title>
</head>
<body>

    <div class= "col col-ig_12">
        <div class="row">
            <h1 class="text-center">sumas</h1>
        </div>
</div>


<div class="row">

<form action="<?php echo $SERVER['PHP_SELF'] ?>" method="post">

  <imput type="text" name="caja1" required> +

  <imput type="text" name="caja2" required> = 

  <imput type="text" name="resultado" value="<?php echo $valor?>"
  > 
  <imput type="submit" name="btnSuma" value="calcular">

</form>
</div>



</body>
</html>
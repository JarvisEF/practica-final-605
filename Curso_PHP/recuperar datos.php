<?php
//validacion del boton 
if (isset($_POST['Enviar'])) {

    //recuperacion de los campos 
    $Nombre=$_POST['nombre'];
    $Apellidos=$_POST['apellidos'];
    $Fecha=$_POST['fecha'];
    $Email=$_POST['email'];

    //validacion si los datos estan vacios 
    if ($Nombre=="") {
        echo" Falta asignar un nombre ";
    }    elseif ($Apellidos=="") {
            echo" Falta asignar apellidos ";
        }elseif ($Fecha=="") {
            echo" Falta asignar tu fecha de nacimiento ";
        }elseif ($Email=="") {
            echo" Falta asignar tu correo electronico";
        }
        //alertas 
    else {
        echo"Tu nombre es ".$Nombre." Tus apellidos son: ".$Apellidos." tu dia de nacimiento es: ".$Fecha." tu correo es ".$Email;
    }


}else {
    echo"No diste click al boton";
}

//Enmaquetacion html
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Datos</title>
</head>
<body>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <input type="text" name="nombre" placeholder="ingresa tu nombre "> <br>
        <input type="text" name="apellidos" placeholder=" ingresa apellidos"> <br>
        <label for="">Selecciona tu fecha de nacimiento </label><input type="date" name="fecha" > <br>
        <input type="email" name="email" placeholder="correo electronico"> <br>
        <input type="submit" value="Enviar" name="Enviar"><br>
    </form>
    



</body>
</html>
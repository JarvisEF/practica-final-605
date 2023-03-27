<? PHP
error_reporting(0);
incluir 'include/acciones.php';

? >

<! DOCTYPE html>
<html lang="en">

<cabeza>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.6.4.min.js"></script>
    <title>Registro</title>
</head>

<cuerpo>

    <div class="contenedor m-auto justify-content-center py-auto">
        <div class="filar texto-centro">
            <h1 class="text-success">Registro</h1>
        </div>
        <form id="Registro" action="<? php echo $_SERVER['PHP_SELF']; ? >" method="POST">

            <div class="filar texto-centro">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <input type="text" name="Nombre" id="" class="form-control" placeholder="Nombre">
                </div>
            </div>

            <div class="filar texto-centro">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <input type="text" name="ApellidoP" class="form-control" placeholder="Apellido Paterno" >
                </div>
            </div>

            <div class="filar texto-centro">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <input type="text" name="ApellidoM" class="form-control" placeholder="Apellido Materno" >
                </div>
            </div>

            <div class="filar texto-centro">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <input type="text" name="Username" class="form-control" placeholder="Nombre de Usuario" >
                </div>
            </div>

            <div class="filar texto-centro">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <textarea name="Direccion" id="" cols="30" rows="5" class="form-control" placeholder="Direccion"></textarea>
                </div>
            </div>

            <div class="filar texto-centro">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <input type="tel" name="Telefono" id="" class="form-control" placeholder="Tel: " >
                </div>
            </div>

            <div class="filar texto-centro">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <input type="date" name="Fecha" id="" class="form-control" >
                </div>
            </div>

            <div class="filar texto-centro">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <input type="email" name="Email" id="" class="form-control" placeholder="@example.com" >
                </div>
            </div>

            <div class="filar texto-centro">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <input type="Password" name="Password" class="form-control" placeholder="Contraseña" >
                </div>
            </div>

            <div class="filar texto-centro">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <input type="submit" name="btnRegistro" id="" class="btn btn-success form-control" value="Registro">
                </div>
            </div>
        </form>
    </div>

</body>

</html>

<? PHP
    incluir 'include/accionesPlantel.php';
? >
<! DOCTYPE html>
<html lang="en">
<cabeza>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.6.4.min.js"></script>
    <title>Registro Plantel</title>
</head>
<cuerpo>
    
<div class="contenedor m-auto justify-content-center py-auto">
        <div class="filar texto-centro">
            <h1 class="text-success">Registro</h1>
        </div>
        <form id="Registro" action="<? php echo $_SERVER['PHP_SELF']; ? >" method="POST">

            <div class="filar texto-centro">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <input type="text" name="nombrePlantel" id="" class="form-control" placeholder="Nombre Plantel">
                </div>
            </div>

            <div class="filar texto-centro">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <input type="text" name="clavePlantel" id="" class="form-control" placeholder="Clave Plantel">
                </div>
            </div>

            <div class="filar texto-centro">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <input type="text" name="direccionPlantel" class="form-control" placeholder="Direccion del Plantel" >
                </div>
            </div>

            <div class="filar texto-centro">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <input type="tel" name="telefonoPlantel" class="form-control" placeholder="Telefono del Plantel" >
                </div>
            </div>

            <div class="filar texto-centro">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <input type="text" name="responsable" class="form-control" placeholder="Responsable" >
                </div>
            </div>

            <div class="filar texto-centro">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <input type="submit" name="btnRegistroPlantel" id="" class="btn btn-success form-control" value="Registrar">
                </div>
            </div>
        </form>
    </div>


    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>

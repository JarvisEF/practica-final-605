<? PHP
incluir 'include/accionesLugar.php';
? >
<! DOCTYPE html>
<html lang="en">
<cabeza>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.6.4.min.js"></script>
    <title>Registro Lugar</title>
</head>
<cuerpo>

<div class="contenedor m-auto justify-content-center py-auto">
        <div class="filar texto-centro">
            <h1 class="text-success">Registro</h1>
        </div>
        <form id="Registro" action="<? php echo $_SERVER['PHP_SELF']; ? >" method="POST">

            <div class="filar texto-centro">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <input type="text" name="nombreLugar" id="" class="form-control" placeholder="Nombre Lugar">
                </div>
            </div>

            <div class="filar texto-centro">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <input type="text" name="descripcionLugar" id="" class="form-control" placeholder="Descripcion Lugar">
                </div>
            </div>

            <div class="filar texto-centro">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <input type="tel" name="telefonoLugar" class="form-control" placeholder="Telefono Lugar" >
                </div>
            </div>

            <div class="filar texto-centro">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <input type="email" name="emailLugar" class="form-control" placeholder="Email" >
                </div>
            </div>
            <div class="filar texto-centro">
                <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="text" name="facebook" class="form-control" placeholder="Facebook">
            </div>

            <div class="filar texto-centro">
                <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="text" name="horarioLugar" class="form-control" placeholder="Horario">
            </div>
            

            <div class="filar texto-centro">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <input type="submit" name="btnRegistroLugar" id="" class="btn btn-success form-control" value="Registrar">
                </div>
            </div>
        </form>
    </div>


<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>

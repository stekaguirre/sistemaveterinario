<?php
include ('../app/config.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login - <?php echo APP_NAME; ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo $URL;?>/public/templeates/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?php echo $URL;?>/public/templeates/AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo $URL;?>/public/templeates/AdminLTE-3.2.0/dist/css/adminlte.min.css">

    <!-- Libreria Sweetallert2-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <!-- /.login-logo -->

    <?php
    session_start();
    
    if(isset($_SESSION['mensaje'])){
        $respuesta = $_SESSION['mensaje'];?>

        <script>
                Swal.fire({
                position: 'top-end',
                icon: 'error',
                title: '<?php echo $respuesta ?>',
                showConfirmButton: false,
                timer: 1500
                })
        </script>

        <?php
            }

            ?>

            <center>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTrhjBJW0N21rfhqhetJyTEVNSHXnDiogTgZUTfV26Dz84RsrTrHduuN-ttb8hg-MgGCbs&usqp=CAU" 
                width="50%" alt="">
            </center>
            <p class="login-box-msg">Ingresar a la <?php echo APP_NAME; ?></p>

            <form action="<?php echo $URL;?>/app/controllers/login/ingreso.php" method="post">
                <label for="">Correo electronico</label>
                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <label for="">Contraseña</label>
                <div class="input-group mb-3">
                    <input type="password" name="password_user" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" style="width: 100%">Ingresar</button>
                <br><br>
                <a href="<?php echo $URL;?>/index.html" class="btn btn-secondary" style="width: 100%">Cancelar</a>
            </form>
            <p>Si aun no estas registrado <a href="<?php echo $URL;?>/login/registro.php">Registrate</a></p>
            <p>Volver a la pagina principal <a href="<?php echo $URL;?>/index.html">Inicio</a></p>
            
        </div>
        <!-- /.login-card-body -->
    </div>
    <br><br>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo $URL;?>/public/templeates/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo $URL;?>/public/templeates/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $URL;?>/public/templeates/AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
</body>
</html>

<?php 

$err = isset($_GET['error']) ? $_GET['error'] : null;

 ?>
<!DOCTYPE html>
<html>
<head>
<?php include("includes/head.php"); ?>

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="login"><b>Saludable</b>Systems</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Ingresa tus claves para Iniciar Session</p>

  <form action="session_init.php" method="post">
                  <?php 
                    if($err==1){
                      echo '
                        <script>
                          sweetAlert("Lo sentimos...", "El Usuario o Contraseña Erroneos!", "error");
                        </script>
                        ';

                    }
                    if($err==2){

                      echo '
                        <script>
                          sweetAlert("Lo sentimos...", "Debe iniciar sesion para poder acceder al sitio!", "error");
                        </script>
                        ';
                    }

                   ?>
      <div class="form-group has-feedback">
         <input type="text" name="usern" id="user"  class="form-control">
        <span class="glyphicon glyphicon-user  form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="passwd" id="password" class="form-control">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="enter" class="btn btn-primary btn-block btn-flat">Ingresar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>


  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>

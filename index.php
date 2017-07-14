
<!DOCTYPE html>
<html>
<head>
<?php   include("includes/head.php"); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>S</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Saludable</b> Systems</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
<?php include("includes/navegador.php"); ?>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
<?php include("includes/navegador_izq.php"); ?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Saludable Systems
        <small>Inicio</small>

    </section>

    <!-- Main content -->
    <section class="content">

      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        

        <section class="col-lg-12">

          <!-- Custom tabs (Charts with tabs)-->
          <?php include("paginas_nutri/tabla_pacientes.php"); ?>

        </section>

      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include("includes/footer.php"); 
?>




<!-- ./wrapper -->


</body>
</html>

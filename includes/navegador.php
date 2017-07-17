<?php 
session_start();

if(!$_SESSION['nameProfi'] == "Admin"){
header("location:index"); die();
}


$inactivo = 600000;

if(isset($_SESSION['tiempo'])) {
  $vida_session = time() - $_SESSION['tiempo'];

  if($vida_session > $inactivo) {

    session_destroy();


    header("location:index");


    
  }
}

$_SESSION['tiempo'] = time();
?> 
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">




          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="image/logo_solo.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION["loginUsers"];?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="image/logo_solo.png" class="img-circle" alt="User Image">

                <p>
                  Tipo: <?php echo $_SESSION["nameProfi"];?>
                  <small><?php echo $_SESSION["loginUsers"];?></small>
                </p>
              </li>

              <!-- Menu Footer-->
              <li class="user-footer">

                <div class="pull-right">
                  <a href="log_out" class="btn btn-default btn-flat">Cerrar Session</a>
                </div>
              </li>
            </ul>
          </li>

        </ul>
      </div>
    </nav>
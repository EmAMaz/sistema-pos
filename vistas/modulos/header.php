<header class="main-header">
    
    <!-- Logo -->
    <a href="inicio" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img src="vistas/img/plantilla/icono-blanco.png" alt="logo_mini" class="img-responsive" style="padding:10px"></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img src="vistas/img/plantilla/logo-blanco-lineal.png" alt="logo_lg" class="img-responsive" style="padding:10px 0px"></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">


            <?php
              if($_SESSION["foto"] != ""){

                echo '<img src="'.$_SESSION["foto"].'" class="user-image">';

              }else{
                
                echo '<img src="vistas/img/usuarios/default/anonymous.png" class="user-image">';
              }
            ?>
              
              <span class="hidden-xs"><?php echo $_SESSION["nombre"] ?></span>
            </a>

            <ul class="dropdown-menu">
              <!-- User image -->

              <li class="user-header">

                <?php
                  if($_SESSION["foto"] != ""){

                    echo '<img src="'.$_SESSION["foto"].'" class="img-circle" alt="User Image">';

                  }else{
                    
                    echo '<img src="vistas/img/usuarios/default/anonymous.png" class="user-image">';

                  }
                ?>
                
                <p><?php echo $_SESSION["nombre"] ?></p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                
                <div class="pull-right">
                  <a href="salir" class="btn btn-default btn-flat">Cerrar sesion</a>
                </div>
              
              </li>
              
            </ul>
          </li>
          
        </ul>
      </div>
    </nav>
  </header>
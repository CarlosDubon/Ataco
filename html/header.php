<?php
   if($_SERVER['REQUEST_URI']!="/Ataco/php/contacto-admin.php"){
      session_start();
   }
?>
<div class="menu_bar">
    <a href="#" class="bt-menu"><i id="toggle_menu" class="fa fa-th-list" name="bars" aria-hidden="true"></i>Concepcion de Ataco</a>
</div>
<a href="Index.php" style="text-decoration:none;">
  <div id="banner-container">
      <h1 id="banner-title">CONCEPCION DE ATACO</h1>
  </div>
</a>
<nav  id="banner-container" class="navbar-ext">
    <ul>
        <li><a href="historia.php"><i class="fa fa-file-text-o" aria-hidden="true"></i>Historia </a></li>
        <li><a href="turismo.php"><i class="fa fa-map-signs" aria-hidden="true"></i>Turismo </a></li>
        <li class="submenu">
            <a href="../php/geografia.php"><i class="fa fa-globe" aria-hidden="true"></i>Geografia<i id="slide-icon" class="fa fa-angle-double-down" aria-hidden="true"></i> </a>
            <ul class="children">
                <li><a href="../php/ubicacion.php"><i class="fa fa-map-o" aria-hidden="true"></i>Ubicación<i class="fa fa-ellipsis-h subitem" aria-hidden="true"></i></a></li>
                <li><a href="../php/orografia.php"><i class="fa fa-picture-o" aria-hidden="true"></i>Orografía<i class="fa fa-ellipsis-h subitem" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-tint" aria-hidden="true"></i>Hidrografía<i class="fa fa-ellipsis-h subitem" aria-hidden="true"></i></a></li>
                <li><a href="../php/Vias_De_Comunicacion.php"><i class="fa fa-street-view" aria-hidden="true"></i>Vias de comunicación<i class="fa fa-ellipsis-h subitem" aria-hidden="true"></i></a></li>
            </ul>
        </li>
        <li class="submenu">
            <a href="../php/gobierno.php"><i class="fa fa-user-circle" aria-hidden="true"></i>Gobierno<i id="slide-icon" class="fa fa-angle-double-down" aria-hidden="true"></i> </a>
            <ul class="children">
                <li><a href="../php/gobierno-local.php"><i class="fa fa-info" aria-hidden="true"></i>Gob. Local<i class="fa fa-ellipsis-h subitem" aria-hidden="true"></i></a></li>
                <li><a href="../php/divpolitica.php"><i class="fa fa-map-marker" aria-hidden="true"></i>Div. Politica<i class="fa fa-ellipsis-h subitem" aria-hidden="true"></i></a></li>
                <li><a href="../php/poblacionVivienda.php"><i class="fa fa-users" aria-hidden="true"></i>Población y Vivienda<i class="fa fa-ellipsis-h subitem" aria-hidden="true"></i></a></li>
            </ul>
        </li>
        <li class="submenu">
            <a href="#"><i class="fa fa-universal-access" aria-hidden="true"></i>Accesibilidad <i id="slide-icon" class="fa fa-angle-double-down" aria-hidden="true"></i> </a>
            <ul class="children">
                <li><a href="#" data-toggle="modal" data-target="#fontSize"><i class="fa fa-font" aria-hidden="true"></i>Tamaño de Letra<i class="fa fa-ellipsis-h subitem" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-info" aria-hidden="true"></i>Sub Item<i class="fa fa-ellipsis-h subitem" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-info" aria-hidden="true"></i>Sub Item <i class="fa fa-ellipsis-h subitem" aria-hidden="true"></i></a></li>
            </ul>
        </li>
        <?php
        if(isset($_SESSION['Nombre'])){
            
            echo  '<li><a href="../php/contacto-admin.php"><i class="fa fa-users" aria-hidden="true"></i>Contactanos</a></li>
            <li class="rigth-list"><a href="../php/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Cerrar  Sesion</a></li>
            
';
        }else{
            echo' <li><a href="../php/contacto.php"><i class="fa fa-users" aria-hidden="true"></i>Contactanos</a></li>
            <li class="rigth-list"><a href="../php/login.php"><i class="fa fa-sign-in" aria-hidden="true"></i>Iniciar Sesion</a></li>
';
        }
        ?>

    </ul>
</nav>

<!-- BARRA DE NAVEGACION PARA MOVILES -->
<nav  class="movil" style="display:none">
  <ul>
      <li><a href="../php/index.php"><i class="fa fa-home" aria-hidden="true"></i>Inicio</a></li>
      <li><a href="../php/historia.php"><i class="fa fa-file-text-o" aria-hidden="true"></i>Historia </a></li>
      <li><a href="turismo.php"><i class="fa fa-map-signs" aria-hidden="true"></i>Turismo </a></li>
      <li class="submenu">
          <a href="#"><i class="fa fa-globe" aria-hidden="true"></i>Geografia<i id="slide-icon" class="fa fa-angle-double-down" aria-hidden="true"></i> </a>
          <ul class="children">
              <li><a href="../php/ubicacion.php"><i class="fa fa-map-o" aria-hidden="true"></i>Ubicación<i class="fa fa-ellipsis-h subitem" aria-hidden="true"></i></a></li>
              <li><a href="../php/orografia.php"><i class="fa fa-picture-o" aria-hidden="true"></i>Orografía<i class="fa fa-ellipsis-h subitem" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-tint" aria-hidden="true"></i>Hidrografía<i class="fa fa-ellipsis-h subitem" aria-hidden="true"></i></a></li>
              <li><a href="../php/Vias_De_Comunicacion.php"><i class="fa fa-street-view" aria-hidden="true"></i>Vias de comunicación<i class="fa fa-ellipsis-h subitem" aria-hidden="true"></i></a></li>
          </ul>
      </li>
      <li class="submenu">
          <a href="#"><i class="fa fa-user-circle" aria-hidden="true"></i>Gobierno<i id="slide-icon" class="fa fa-angle-double-down" aria-hidden="true"></i> </a>
          <ul class="children">
              <li><a href="../php/gobierno-local.php"><i class="fa fa-info" aria-hidden="true"></i>Gob. Local<i class="fa fa-ellipsis-h subitem" aria-hidden="true"></i></a></li>
              <li><a href="../php/divpolitica.php"><i class="fa fa-map-marker" aria-hidden="true"></i>Div. Politica<i class="fa fa-ellipsis-h subitem" aria-hidden="true"></i></a></li>
              <li><a href="../php/poblacionVivienda.php"><i class="fa fa-users" aria-hidden="true"></i>Población y Vivienda<i class="fa fa-ellipsis-h subitem" aria-hidden="true"></i></a></li>
          </ul>
      </li>
      <li class="submenu">
          <a href="#"  data-toggle="modal" data-target="#fontSize"><i class="fa fa-universal-access" aria-hidden="true"></i>Accesibilidad <i id="slide-icon" class="fa fa-angle-double-down" aria-hidden="true"></i> </a>
          <ul class="children">
              <li><a href="#"><i class="fa fa-font" aria-hidden="true"></i>Tamaño de Letra<i class="fa fa-ellipsis-h subitem" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-info" aria-hidden="true"></i>Sub Item<i class="fa fa-ellipsis-h subitem" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-info" aria-hidden="true"></i>Sub Item <i class="fa fa-ellipsis-h subitem" aria-hidden="true"></i></a></li>
          </ul>
      </li>
      <?php
        if(isset($_SESSION['Nombre'])){
            
            echo  '<li><a href="../php/contacto-admin.php"><i class="fa fa-users" aria-hidden="true"></i>Contactanos</a></li>
            <li class=""><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Cerrar Sesion</a></li>
            
';
        }else{
            echo' <li><a href="../php/contacto.php"><i class="fa fa-users" aria-hidden="true"></i>Contactanos</a></li>
            <li class=""><a href="../php/login.php"><i class="fa fa-sign-in" aria-hidden="true"></i>Iniciar Sesion</a></li>
';
        }
        ?>
  </ul>
</nav>

<!--Desplegando Modals-->
<div class="modal fade" id="fontSize" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-font" aria-hidden="true"></i>Tamaño de letra</h4>
      </div>
      <div class="modal-body">
          <div class="row">
              <div class="col-md-4 center"><button type="button" id="small" class="defaultModal-btn">Pequeño</button></div>
              <div class="col-md-4 center" ><button type="button" id="normal" class="defaultModal-btn">Normal</button></div>
              <div class="col-md-4 center"><button type="button" id="big" class="defaultModal-btn">Grande</button></div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" id="button-modal" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i>Cerrar</button>
      </div>
    </div>
  </div>
</div>

<script src="../js/accesibilidad.js"></script>
<?php
   if($_SERVER['REQUEST_URI']!="/Ataco/php/en/contacto-admin.php"){
      session_start();
   }
?>
<div class="menu_bar">
    <a href="#" class="bt-menu"><i id="toggle_menu" class="fa fa-th-list" name="bars" aria-hidden="true"></i>Concepcion de Ataco</a>
</div>
<a href="/Ataco/php/en/Index.php" style="text-decoration:none;">
  <div id="banner-container">
      <h1 id="banner-title">CONCEPCION DE ATACO</h1>
  </div>
</a>
<nav  id="banner-container" class="navbar-ext">
    <ul>
        <li><a href="/Ataco/php/en/historia.php"><i class="fa fa-file-text-o" aria-hidden="true"></i>History</a></li>
        <li><a href="/Ataco/php/en/turismo.php"><i class="fa fa-map-signs" aria-hidden="true"></i>Turismo </a></li>
        <li class="submenu">
            <a href="/Ataco/php/en/geografia.php"><i class="fa fa-globe" aria-hidden="true"></i>Geografia<i id="slide-icon" class="fa fa-angle-double-down" aria-hidden="true"></i> </a>
            <ul class="children">
                <li><a href="/Ataco/php/en/ubicacion.php"><i class="fa fa-map-o" aria-hidden="true"></i>Ubicación<i class="fa fa-ellipsis-h subitem" aria-hidden="true"></i></a></li>
                <li><a href="/Ataco/php/en/orografia.php"><i class="fa fa-picture-o" aria-hidden="true"></i>Orografía<i class="fa fa-ellipsis-h subitem" aria-hidden="true"></i></a></li>
                <li><a href="/Ataco/php/en/hidrografia.php"><i class="fa fa-tint" aria-hidden="true"></i>Hidrografía<i class="fa fa-ellipsis-h subitem" aria-hidden="true"></i></a></li>
                <li><a href="/Ataco/php/en/Vias_De_Comunicacion.php"><i class="fa fa-street-view" aria-hidden="true"></i>Vias de comunicación<i class="fa fa-ellipsis-h subitem" aria-hidden="true"></i></a></li>
            </ul>
        </li>
        <li class="submenu">
            <a href="/Ataco/php/en/gobierno.php"><i class="fa fa-user-circle" aria-hidden="true"></i>Gobierno<i id="slide-icon" class="fa fa-angle-double-down" aria-hidden="true"></i> </a>
            <ul class="children">
                <li><a href="/Ataco/php/en/gobierno-local.php"><i class="fa fa-info" aria-hidden="true"></i>Gob. Local<i class="fa fa-ellipsis-h subitem" aria-hidden="true"></i></a></li>
                <li><a href="/Ataco/php/en/divpolitica.php"><i class="fa fa-map-marker" aria-hidden="true"></i>Div. Politica<i class="fa fa-ellipsis-h subitem" aria-hidden="true"></i></a></li>
                <li><a href="/Ataco/php/en/poblacionVivienda.php"><i class="fa fa-users" aria-hidden="true"></i>Población y Vivienda<i class="fa fa-ellipsis-h subitem" aria-hidden="true"></i></a></li>
            </ul>
        </li>
        <li class="submenu">
            <a href="#" id="Prevent"><i class="fa fa-universal-access" aria-hidden="true"></i>Accesibilidad <i id="slide-icon" class="fa fa-angle-double-down" aria-hidden="true"></i> </a>
            <ul class="children">
                <li><a href="#" data-toggle="modal" data-target="#fontSize"><i class="fa fa-font" aria-hidden="true"></i>Tamaño de Letra<i class="fa fa-ellipsis-h subitem" aria-hidden="true"></i></a></li>
                <li><a href="#" data-toggle="modal" data-target="#Espectro_Color"><i class="fa fa-eye" aria-hidden="true"></i>Espectro de Color<i class="fa fa-ellipsis-h subitem" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-info" aria-hidden="true"></i>Sub Item <i class="fa fa-ellipsis-h subitem" aria-hidden="true"></i></a></li>
            </ul>
        </li>
        <?php
        if(isset($_SESSION['Nombre'])){

            echo  '<li><a href="/Ataco/php/en/contacto-admin.php"><i class="fa fa-users" aria-hidden="true"></i>Contactanos</a></li>
            <li class="rigth-list"><a href="/Ataco/php/en/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Cerrar  Sesion</a></li>

';
        }else{
            echo' <li><a href="/Ataco/php/en/contacto.php"><i class="fa fa-users" aria-hidden="true"></i>Contactanos</a></li>
            <li class="rigth-list"><a href="/Ataco/php/en/login.php"><i class="fa fa-sign-in" aria-hidden="true"></i>Iniciar Sesion</a></li>
';
        }
        ?>

    </ul>
</nav>

<!-- BARRA DE NAVEGACION PARA MOVILES -->
<nav  class="movil" style="display:none">
  <ul>
      <li><a href="/Ataco/php/en/index.php"><i class="fa fa-home" aria-hidden="true"></i>Inicio</a></li>
      <li><a href="/Ataco/php/en/historia.php"><i class="fa fa-file-text-o" aria-hidden="true"></i>Historia </a></li>
      <li><a href="/Ataco/php/en/turismo.php"><i class="fa fa-map-signs" aria-hidden="true"></i>Turismo </a></li>
      <li class="submenu">
          <a href="#" id="Prevent"><i class="fa fa-globe" aria-hidden="true"></i>Geografia<i id="slide-icon" class="fa fa-angle-double-down" aria-hidden="true"></i> </a>
          <ul class="children">
              <li><a href="/Ataco/php/en/ubicacion.php"><i class="fa fa-map-o" aria-hidden="true"></i>Ubicación<i class="fa fa-ellipsis-h subitem" aria-hidden="true"></i></a></li>
              <li><a href="/Ataco/php/en/orografia.php"><i class="fa fa-picture-o" aria-hidden="true"></i>Orografía<i class="fa fa-ellipsis-h subitem" aria-hidden="true"></i></a></li>
              <li><a href="/Ataco/php/en/hidrografia.php"><i class="fa fa-tint" aria-hidden="true"></i>Hidrografía<i class="fa fa-ellipsis-h subitem" aria-hidden="true"></i></a></li>
              <li><a href="/Ataco/php/en/Vias_De_Comunicacion.php"><i class="fa fa-street-view" aria-hidden="true"></i>Vias de comunicación<i class="fa fa-ellipsis-h subitem" aria-hidden="true"></i></a></li>
          </ul>
      </li>
      <li class="submenu">
          <a href="#" id="Prevent"><i class="fa fa-user-circle" aria-hidden="true"></i>Gobierno<i id="slide-icon" class="fa fa-angle-double-down" aria-hidden="true"></i> </a>
          <ul class="children">
              <li><a href="/Ataco/php/en/gobierno-local.php"><i class="fa fa-info" aria-hidden="true"></i>Gob. Local<i class="fa fa-ellipsis-h subitem" aria-hidden="true"></i></a></li>
              <li><a href="/Ataco/php/en/divpolitica.php"><i class="fa fa-map-marker" aria-hidden="true"></i>Div. Politica<i class="fa fa-ellipsis-h subitem" aria-hidden="true"></i></a></li>
              <li><a href="/Ataco/php/en/poblacionVivienda.php"><i class="fa fa-users" aria-hidden="true"></i>Población y Vivienda<i class="fa fa-ellipsis-h subitem" aria-hidden="true"></i></a></li>
          </ul>
      </li>
      <li class="submenu">
          <a href="#" id="Prevent" ><i class="fa fa-universal-access" aria-hidden="true"></i>Accesibilidad <i id="slide-icon" class="fa fa-angle-double-down" aria-hidden="true"></i> </a>
          <ul class="children">
            <li><a href="#" id="Prevent" data-toggle="modal" data-target="#fontSize"><i class="fa fa-font" aria-hidden="true"></i>Tamaño de Letra<i class="fa fa-ellipsis-h subitem" aria-hidden="true"></i></a></li>
            <li><a href="#" id="Prevent" data-toggle="modal" data-target="#Espectro_Color"><i class="fa fa-eye" aria-hidden="true"></i>Espectro de Color<i class="fa fa-ellipsis-h subitem" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-info" aria-hidden="true"></i>Sub Item <i class="fa fa-ellipsis-h subitem" aria-hidden="true"></i></a></li>
          </ul>
      </li>
      <?php
        if(isset($_SESSION['Nombre'])){

            echo  '<li><a href="/Ataco/php/en/contacto-admin.php"><i class="fa fa-users" aria-hidden="true"></i>Contactanos</a></li>
            <li class=""><a href="/Ataco/php/en/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Cerrar Sesion</a></li>

';
        }else{
            echo' <li><a href="/Ataco/php/en/contacto.php"><i class="fa fa-users" aria-hidden="true"></i>Contactanos</a></li>
            <li class=""><a href="/Ataco/php/en/login.php"><i class="fa fa-sign-in" aria-hidden="true"></i>Iniciar Sesion</a></li>
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

<div class="modal fade bs-example-modal-lg" id="Espectro_Color" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-font" aria-hidden="true"></i>Espectro de color</h4>
      </div>
      <div class="modal-body">
          <div class="row">
              <div class="col-lg-4 center"><button type="button" id="Desactivar" style="width:75%; margin-top:10px;" class="defaultModal-btn">Desactivar</button></div>
              <div class="col-lg-4 center"><button type="button" id="Protanopia" style="width:75%; margin-top:10px;" class="defaultModal-btn">Protanopia</button></div>
              <div class="col-lg-4 center"><button type="button" id="Protanomaly" style="width:75%; margin-top:10px;" class="defaultModal-btn">Protanomaly</button></div>
              <div class="col-lg-4 center"><button type="button" id="Deuteranopia" style="width:75%; margin-top:10px;" class="defaultModal-btn">Deuteranopia</button></div>
              <div class="col-lg-4 center"><button type="button" id="Deuteranomaly" style="width:75%; margin-top:10px;" class="defaultModal-btn">Deuteranomaly</button></div>
              <div class="col-lg-4 center"><button type="button" id="Tritanopia" style="width:75%; margin-top:10px;" class="defaultModal-btn">Tritanopia</button></div>
              <div class="col-lg-4 center"><button type="button" id="Tritanomaly" style="width:75%; margin-top:10px;" class="defaultModal-btn">Tritanomaly</button></div>
              <div class="col-lg-4 center"><button type="button" id="Achromatopsia" style="width:75%; margin-top:10px;" class="defaultModal-btn">Achromatopsia</button></div>
              <div class="col-lg-4 center"><button type="button" id="Achromatomaly" style="width:75%; margin-top:10px;" class="defaultModal-btn">Achromatomaly</button></div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" id="button-modal" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i>Cerrar</button>
      </div>
    </div>
</div>
</div>

<!DOCTYPE html>
<html lang="es">
<head>
  <?php
    include '../html/head.html';
  ?>
  <title>Vias de Comunicacion</title>
</head>
<body>
  <header>
    <?php
      include '../html/header.html';
     ?>
  </header>
  <section>
    <div class="container">
      <h1 style="display: inline-block">Vias de comunicacion</h1><button type="button" class="play-buttom"><i name="play" class="fa fa-play" aria-hidden="true"></i><span name="play">Reproducir</span></button>
      <div class="row" >
        <div class="col-md-6">
          <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="col-md-6">
            <div class="padre">
               <div class="hijo">
                   <a href="#" class="thumbnail" data-toggle="modal" data-target="#mapeo">
                        <img id="FotoRuta" class="img-fluid miniaruta"  src="../img/ruta_flores.jpg" alt="">
                   </a>   
               </div>
            </div>
        </div>
      </div>
      <div class="row">
        <h2 style="display:inline-block"> Como llegar </h2>
        <div class="col-12">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
      <div class="col-12">
          <div class="row GaleriaVias">
            <div class="col-lg-3 col-sm-6">
              <img class="img-fluid" src="../img/Img5.jpg" alt="">
            </div>
            <div class="col-lg-3 col-sm-6 Limit">
              <img class="img-fluid" src="../img/Img5.jpg" alt="">
            </div>
            <div class="col-lg-3 col-sm-6 Limit">
              <img class="img-fluid" src="../img/Img5.jpg" alt="">
            </div>
            <div class="col-lg-3 col-sm-6 Limit">
              <img class="img-fluid" src="../img/Img5.jpg" alt="">
            </div>
          </div>
      </div>
    </div>
  </section>
  <footer>
      <div class="modal fade bs-example-modal-lg" id="mapeo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Ruta de las flores</h4>
              </div>
              <div class="modal-body">
                  <div class="container">
                      <div class="row">
                         <iframe src="https://www.google.com/maps/d/embed?mid=1TlshQTzDfDnDfTmglSuyvNQWPEA&hl=en_US" style="width:100%; height:70vh; margin-left:auto; margin-right:auto; "></iframe>
                      </div>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" id="button-modal" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i>Cerrar</button>
              </div>
            </div>
          </div>
        </div>
  </footer>
</body>
</html>

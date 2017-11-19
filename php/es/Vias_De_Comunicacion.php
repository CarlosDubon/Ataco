<?php
require 'sql_conn.php';
$query = "select * from municipio";
$vias = getResult($query);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <?php
    include '../../html/head.html';
  ?>
  <title>Vias de Comunicacion</title>
</head>
<body>
  <header>
    <?php
      include '../../html/es/header.php';
     ?>
  </header>
    <div class="container">
    <section>
      <h1 style="display: inline-block">Vias de comunicacion</h1><button type="button" class="play-buttom"><i name="play" class="fa fa-play" aria-hidden="true"></i><span name="play">Reproducir</span></button>
      <audio id="medio" width="200px">
          <source src="../../audios/es/Víasdecomunicacion.mp3" >
      </audio>
      <div class="row" >
        <div class="col-md-6">
          <p><?php echo $vias[0]['ViasComunicacion'] ?></p>
        </div>
        <div class="col-md-6">
            <div class="padre">
               <div class="hijo">
                   <a href="#" class="thumbnail" data-toggle="modal" data-target="#mapeo">
                        <img id="FotoRuta" class="img-fluid miniaruta"  src="../../img/ruta_flores.jpg" alt="">
                   </a>
               </div>
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <h2> Como llegar </h2>
          <p><?php echo $vias[0]['DViasComunicacion'] ?></p>
        </div>
      </div>
      <div class="col-12">
          <div class="row GaleriaVias">
            <div class="col-lg-3 col-sm-6">
              <img class="img-fluid" src="../../img/Img5.jpg" alt="">
            </div>
            <div class="col-lg-3 col-sm-6 Limit">
              <img class="img-fluid" src="../../img/Img5.jpg" alt="">
            </div>
            <div class="col-lg-3 col-sm-6 Limit">
              <img class="img-fluid" src="../../img/Img5.jpg" alt="">
            </div>
            <div class="col-lg-3 col-sm-6 Limit">
              <img class="img-fluid" src="../../img/Img5.jpg" alt="">
            </div>
          </div>
      </div>
    </section>
    </div>
  <footer>
    <?php
      include '../../html/Topscroller-dark.html';
      include '../../html/footer.html';
    ?>
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

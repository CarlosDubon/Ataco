<!DOCTYPE html>
<html lang="es">
<head>
  <?php
      include '../../html/head.html';
  ?>
  <title>Geography</title>
</head>
<body>
  <header>
    <?php
        include '../../html/en/header.php';
    ?>
  </header>
  <section style="margin:0;">
    <div class="padre" id="boxGeo">
      <div class="Box_Container">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6">
              <a href="ubicacion.php" class="BotonHome" style="width:100%;margin-top:15px;"><span class="Bold-Beba HPurple">Locate</span></a>
            </div>
            <div class="col-lg-3 col-md-6">
              <a href="orografia.php" class="BotonHome" style="width:100%; margin-top:15px;"><span class="Bold-Beba HGreen">Orography</span></a>
            </div>
            <div class="col-lg-3 col-md-6">
              <a href="hidrografia.php" class="BotonHome" style="width:100%; margin-top:15px;"><span class="Bold-Beba HBlue">Hydrography</span></a>
            </div>
            <div class="col-lg-3 col-md-6">
              <a href="Vias_De_Comunicacion.php" class="BotonHome" style="width:100%; margin-top:15px;margin-bottom:15px;"><span class="Bold-Beba HRedIntenso">Communication R.</span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <footer>
      <?php
          include '../../html/Topscroller-dark.html';
      ?>
    </footer>
  </footer>
</body>
</html>

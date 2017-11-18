<!DOCTYPE html>
<html lang="es">
<head>
  <?php
      include '../html/head.html';
  ?>
  <title>Geografia</title>
</head>
<body>
  <header>
    <?php
        include '../html/header.php';
    ?>
  </header>
  <section style="margin:0;">
    <div class="padre" id="boxGeo">
      <div class="Box_Container">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6">
              <a href="../php/ubicacion.php" class="BotonHome" style="width:100%;margin-top:15px;"><span class="Bold-Beba HPurple">Ubicacion</span></a>
            </div>
            <div class="col-lg-3 col-md-6">
              <a href="../php/orografia.php" class="BotonHome" style="width:100%; margin-top:15px;"><span class="Bold-Beba HGreen">Orografia</span></a>
            </div>
            <div class="col-lg-3 col-md-6">
              <a href="../php/hidrografia.php" class="BotonHome" style="width:100%; margin-top:15px;"><span class="Bold-Beba HBlue">Hidrografia</span></a>
            </div>
            <div class="col-lg-3 col-md-6">
              <a href="../php/Vias_De_Comunicacion.php" class="BotonHome" style="width:100%; margin-top:15px;margin-bottom:15px;"><span class="Bold-Beba HRedIntenso">V.Comunicacion</span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <footer>
      <?php
          include '../html/Topscroller-dark.html';
      ?>
    </footer>
  </footer>
</body>
</html>

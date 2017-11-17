<!DOCTYPE html>
<html lang="es">
<head>
  <?php
      include '../html/head.html';
  ?>
  <title>Gobierno</title>
</head>
<body>
  <header>
    <?php
        include '../html/header.php';
    ?>
  </header>
  <section style="margin:0px;">
    <div class="padre" id="boxGob">
      <div class="Box_Container">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <a class="BotonHome" href="../php/gobierno-local.php" style="width:100%; margin-top:15px;"><span class="Bold-Beba HBlue2">Gobierno Local.</span></a>
            </div>
            <div class="col-md-4">
              <a class="BotonHome" href="../php/divpolitica.php" style="width:100%; margin-top:15px;"><span class="Bold-Beba HOrange">Division Politica.</span></a>
            </div>
            <div class="col-md-4">
              <a class="BotonHome" href="#" style="width:100%; margin-top:15px;"><span class="Bold-Beba HTurquese">Poblacion y vida.</span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <?php
        include '../html/Topscroller-dark.html';
    ?>
  </footer>
</body>
</html>

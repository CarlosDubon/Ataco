<!DOCTYPE html>
<html lang="es">
<head>
   <?php
   include '../html/head.html';
   require 'sql_conn.php';
   ?>
    <title>Concepción de Ataco</title>
</head>
<body>
   <header>
       <?php
       include '../html/header.php';
       ?>
   </header>
    <section style="margin:0">
      <div id="Box1">
        <div class="Box_Container">
          <a href="historia.php" class="BotonHome fadeIn animated wowload">
            Conoce la <span class="Bold-Beba HBlue" >historia</span> de Concepción de Ataco...
          </a>
        </div>
      </div>
      <div id="Box2">
        <div class="Box_Container" >
          <a href="#" class="BotonHome fadeIn animated wowload">
            Conoce el <span class="Bold-Beba HGreen">turismo</span> de Concepción de Ataco...
          </a>
        </div>
      </div>
      <div id="Box3">
        <div class="Box_Container" >
          <a href="#" class="BotonHome fadeIn animated wowload">
            Conoce la <span class="Bold-Beba HBlack">geografía</span> de Concepción de Ataco...
          </a>
        </div>
      </div>
      <div id="Box4">
        <div class="Box_Container" >
          <a href="../php/turismo.php" class="BotonHome fadeIn animated wowload">
            Conoce el <span class="Bold-Beba HRed">gobierno</span> de Concepción de Ataco...
          </a>
        </div>
      </div>
    </section>
    <footer>
        <div id="Topscroller" onclick>
            <a href="#"><i style="margin:0;padding:0" class="fa fa-arrow-up" aria-hidden="true"></i></a>
        </div>
    </footer>
</body>
<script src="../js/navBarColor.js"></script>

</html>

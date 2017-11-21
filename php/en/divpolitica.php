<?php
  require 'sql_conn.php';
  $Query_Municipio='SELECT Estructura as E From municipio;';
  $Result_Municipio= getResult($Query_Municipio);
  $Estructura=explode('|',$Result_Municipio[0]['E']);

    $query="SELECT * FROM Img_municipio where Tipo = 1";
  $img=getResult($query);
    
  $Query_Canton='SELECT * FROM CANTON;';
  $Cantones= getResult($Query_Canton);
    

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <?php
    include '../../html/head.html';
    ?>
    <title>Political Division</title>
</head>
<body>
    <header>
    <?php
       include '../../html/en/header.php';
    ?>
    </header>
    <section>
       <div class="container">
            <h1 style="display: inline-block">Political Division</h1><button type="button" class="play-buttom"><i name="play" class="fa fa-play" aria-hidden="true"></i><span name="play">Play</span></button>
            <audio id="medio" width="200px">
                <source src="../../audios/en/Politicaldivision.mp3" >
            </audio><hr><br>
            <h1>Structure</h1>
                <div class="row">
                  <div class="col-lg-8 col-md-12">
                    <?php
                        for($i=0; $i<count($Estructura); $i++){
                          echo "<p>".$Estructura[$i]."</p><br>";
                        }
                     ?>
                  </div>
                  <div class="col-lg-4 col-md-12 " style="display:table;height:100%;">
                      <div id="carouselExampleIndicators" class="carousel slide" style="display:table-cell; vertical-align:middle;" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                              <img class="d-block img-fluid active" src="../../img/calleataco.jpg" >
                           </div>
                           <div class="carousel-item">
                              <img class="d-block img-fluid active" src="../../img/Mirador1.jpg" >
                           </div>
                           <div class="carousel-item">
                              <img class="d-block img-fluid active" src="../../img/ATF1/ATF2222.jpg" >
                           </div>
                           <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                      </div>
                  </div>
                </div>
            <hr>

            <h1>Cantons</h1>
            <div class="row">
            	<div class="col-lg-6 col-md-12"><br>
                      <img class="miniaruta" src="../../img/mataco2.jpg" alt="...">
                </div>
                <div class="col-lg-6 col-md-12">
                    <p>For its administration the municipality of Ataco is divided into 11 cantons and 24 hamlets, which are:</p>
                    <div class="container">
                      <div class="row">
                        <?php
                          for ($i=0; $i < count($Cantones); $i++) {
                            $Query_Caserios='SELECT * FROM CASERIO WHERE IDCANTON='.($i+1).';';
                            $Caserios=getResult($Query_Caserios);
                            echo '
                              <div class="col-6">
                                <ol>
                                  <li value="'.($i+1).'">'.$Cantones[$i]['Nombre'].'.
                                </ol>
                              </div>';

                            echo '<div class="col-6"><ul>';
                            for ($j=0; $j < count($Caserios); $j++) {
                              echo '<li>'.$Caserios[$j]['Nombre'].'.';
                            }
                            echo "</ul></div>";
                          }
                         ?>
                      </div>
                </div>

            </div>
    </div>
    </section>
    <footer>
        <?php
          include '../../html/Topscroller-dark.html';
          include '../../html/footer.html';
        ?>
    </footer>
    <!--Modals-->
</body>
</html>

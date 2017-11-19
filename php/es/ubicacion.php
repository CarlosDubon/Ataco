<?php
require 'sql_conn.php';
$query ="SELECT * FROM municipio";
$query2="SELECT * FROM Img_municipio";
$img=getResult($query2);
$municipio = getResult($query);
$arrayMunicipio = explode("\r\n",$municipio[0]['Ubicacion']);
$arrayComo = explode("\r\n",$municipio[0]['Como_Llegar']);


$rand = mt_rand(0,count($img));
$pull[] = $rand;
for($i=0; $i<2;$i++){
    $rand = mt_rand(0,count($img));
    while(in_array($rand,$pull)){
        $rand = mt_rand(0,count($img));
    }
    $pull[]=$rand; 
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <?php
    include '../../html/head.html';
    ?>
    <title>Ataco</title>
</head>
<body>
    <header>
    <?php
       include '../../html/es/header.php';
    ?>
    </header>
    <section>
        <div class="container">
          <h1 style="display: inline-block">Ubicación</h1>
          <button type="button" class="play-buttom"><i name="play" class="fa fa-play" aria-hidden="true"></i><span name="play">Reproducir</span></button>
          <audio id="medio" width="200px">
            <source src="../../audios/es/Ubicacion.mp3" >
          </audio>
            <div class="row">
              <div class="col-lg-8 col-md-12">
                  <strong><h1>Concepción de Ataco</h1></strong>
                  <?php
                  for($i=0;$i<count($arrayMunicipio);$i++){
                      echo '<p>'.$arrayMunicipio[$i].'</p>';
                  }
                  ?>
              </div>
                <div class="col-lg-4 col-md-12 FadeInDown animated">
                    <a href="#" class="thumbnail">
                      <iframe class="miniaruta" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15494.042866076405!2d-89.85844982203909!3d13.868382844352247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f62a2d56a3f4957%3A0xf414f843a3de3786!2sConcepci%C3%B3n+de+Ataco!5e0!3m2!1ses!2ssv!4v1509923670169" width="800" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </a>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <h1>Cómo llegar a Ataco?</h1>
                    <?php
                    for($i=0;$i<count($arrayComo);$i++){
                        echo '<p>'.$arrayComo[$i].'</p>';
                    }
                    ?>
                </div>
                <div class="col-lg-4 col-md-12 bounceInRight animated">
                    <a href="#" class="thumbnail">
                      <img class="miniaruta pulse infinite animated" src="<?php echo $img[0]['ruta']?>" alt="...">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-12 bounceInLeft animated wowload">
                  <!-- <iframe width="700" height="480" src="https://www.youtube.com/embed/x89W6kBJko8" frameborder="0" gesture="media" allowfullscreen></iframe> -->
                    <div id="carouselExampleIndicators" class="carousel slide col-md-12" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                      </ol>
                      <div class="carousel-inner">
                        <?php
                        $first=true;
                        for($i=0;$i<count($pull);$i++){
                            if($first){
                              echo '
                                <div class="carousel-item active">
                                    <img class="d-block img-fluid active" src="'.$img[$pull[$i]]["ruta"].'" >
                                </div>';
                                $first=false;
                            }else{
                                echo '
                                <div class="carousel-item">
                                    <img class="d-block img-fluid active" src="'.$img[$pull[$i]]["ruta"].'" >
                                </div>';
                            }
                            
                            
                        }
                           
                        ?>
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
                <div class="col-lg-4 col-md-12">
                    <div class="padre">
                       <div class="hijo">
                           <a href="#" class="thumbnail">
                               <img class="miniaruta pulse infinite animated" src="<?php echo $img[1]['ruta']?>" alt="...">
                           </a>
                       </div>
                    </div>
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
    </footer>
    <!--Modals-->
</body>
</html>

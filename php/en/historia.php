<?php
    require 'sql_conn.php';
    $sql = "SELECT * FROM municipio";
    $queryImg_Municipio1="SELECT * FROM img_municipio";
    $descripcion = getResult($sql);
    $Ruta_Imagenes= getResult($queryImg_Municipio1);
    $secciones= explode('|',$descripcion[0]['Descripcion']);
    $historia= explode('|',$descripcion[0]['Historia']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <?php
    include '../../html/head.html';
    ?>
    <title>San Miguel de Mercedes</title>
</head>
<body>
    <header>
    <?php
       include '../../html/en/header.php';
    ?>
    </header>
    <section>
        <div class="container">
            <h1 style="display: inline-block">Historia</h1><button type="button" class="play-buttom"><i name="play" class="fa fa-play" aria-hidden="true"></i><span name="play">Reproducir</span></button>
            <audio id="medio" width="200px">
                <source src="../../audios/audio.mp3" >
            </audio>
            <div class="row">
                <div class="col-lg-4 col-md-12 bounceInLeft animated">
                    <a href="#" class="thumbnail">
                      <img class="miniaruta" src="<?php echo $Ruta_Imagenes[0]['ruta'] ?>" alt="...">
                    </a>
                </div>
                <div class="col-lg-8 col-md-12">
                    <?php
                        echo '<h1>'.$descripcion[0]['Nombre'].'</h1>';
                        echo '<p>'.$secciones[0].'</p>';
                    ?>
                </div>
            </div>
            <div class="row">
                <?php
                    echo '<p>'.$secciones[1].'</p>';
                ?>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-8 col-md-12">
                   <h3>Orígenes y Etimología</h3>
                    <?php
                        echo '<p>'.$historia[0].'</p>'
                    ?>
                </div>
                <div class="col-lg-4 col-md-12 bounceInRight animated">
                    <a href="#" class="thumbnail">
                      <img class="miniaruta" src="../../img/Img5.jpg" alt="...">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12 bounceInLeft animated wowload">
                    <a href="#" class="thumbnail">
                      <img class="miniaruta" src="../../img/Img7.jpg" alt="...">
                    </a>
                </div>
                <div class="col-lg-8 col-md-12">
                   <h3>Época Colonial</h3>
                    <?php
                        echo '<p>'.$historia[1].'</p>'
                    ?>
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

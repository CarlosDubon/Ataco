<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <?php
    include '../html/head.html';
    require 'sql_conn.php';
    ?>
    <title>San Miguel de Mercedes</title>
</head>
<body>
    <header>
    <?php
       include '../html/header.html';
         $sql = "SELECT * FROM municipio";
         $result = getResult($sql,$conn);
         $municipio = getRows($result);
         $seccion = explode('|',$municipio[2]);
         $historia = explode('|',$municipio[4]);

    ?>
    </header>
    <section>
        <div class="container">
            <h1 style="display: inline-block">Historia</h1><button type="button" class="play-buttom"><i name="play" class="fa fa-play" aria-hidden="true"></i><span name="play">Reproducir</span></button>
            <audio id="medio" width="200px">
                <source src="../audios/audio.mp3" >
            </audio>
            <div class="row">
                <div class="col-lg-4 col-md-12 bounceInLeft animated">
                    <a href="#" class="thumbnail">
                      <img class="miniaruta" src="../img/Img8.jpg" alt="...">
                    </a>
                </div>
                <div class="col-lg-8 col-md-12">
                    <?php
                        echo '<h1>'.$municipio[1].'</h1>';
                        echo '<p>'.$seccion[0].'</p>'
                    ?>
                </div>
            </div>
            <div class="row">
                <?php
                    echo '<p>'.$seccion[1].'</p>'
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
                      <img class="miniaruta" src="../img/Img5.jpg" alt="...">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12 bounceInLeft animated wowload">
                    <a href="#" class="thumbnail">
                      <img class="miniaruta" src="../img/Img7.jpg" alt="...">
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
          include '../html/Topscroller-dark.html';
        ?>
    </footer>
    <!--Modals-->
</body>
</html>

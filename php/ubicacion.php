<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <?php
    include '../html/head.html';
    ?>
    <title>Ataco</title>
</head>
<body>
    <header>
    <?php
       include '../html/header.html';
    ?>
    </header>
    <section>
        <div class="container">
            <div class="row">
              <div class="col-md-12 FadeInDown animated">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                  </ol>

                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="../img/mg1.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="item">
                      <img src="../img/mg2.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="item">
                      <img src="../img/mg3.jpg" class="img-responsive" alt="">
                    </div>
                  </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 FadeInDown animated">
                <h1 style="display: inline-block">Ubicación</h1>
              </div>
              <div class="col-md-8">
                <button type="button" class="play-buttom"><i name="play" class="fa fa-play" aria-hidden="true"></i><span name="play">Reproducir</span></button>
                <audio id="medio" width="200px">
                  <source src="../audios/audio.mp3" >
                </audio>
              </div>
              </div>
            </div>
            <div class="row">
                <div class="col-lg-5 col-md-12 FadeInDown animated">
                    <a href="#" class="thumbnail">
                      <iframe class="miniaruta" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15494.042866076405!2d-89.85844982203909!3d13.868382844352247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f62a2d56a3f4957%3A0xf414f843a3de3786!2sConcepci%C3%B3n+de+Ataco!5e0!3m2!1ses!2ssv!4v1509923670169" width="800" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </a>
                </div>
                <div class="col-lg-7 col-md-12">
                    <strong><h1>Concepción de Ataco</h1></strong>
                    <br><br>
                    <h4>Concepción de Ataco esta localizada en el departamento de Ahuachapán, a 1275 m SNM, en una meseta de la sierra Apaneca-Ilamatepec. Es parte de la Ruta de las Flores. A esta podemos llegar por la CA 8 desde Sonsonate, 105 km, o desde Ahuachapán.</h4>
                    <br>
                    <h4>Fue fundada por tribus nahuas. Concepción de Ataco tiene lugares de atracción turística como, la piscina de Atzumpa, las cascadas de Los Apantes, Salinas, miradores, además de telares de cintura. Según algunos lingüistas, Ataco quiere decir "Lugar de Elevados Manantiales". El historiador Tomás Fidias Jiménez nació en esta ciudad. Sus fiestas patronales son celebradas del 11 al 15 de diciembre en honor a la Virgen de Concepción.</h4>
                    <br>
                    <h4>En este poblado todavía podemos ver algunas de sus calles empedradas, un legado de la colonia. Su principal medio de ingreso es el café, otros rubros son el textil y las artesanías.</h4>
                </div>
            </div>
            <div class="row">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt nisi facilis doloremque! Doloribus omnis, quaerat temporibus odio quo quasi voluptas dolorem. Sunt dolorum nostrum ab velit alias pariatur, libero porro?</p>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <h1>Cómo llegar a Ataco?</h1>
                    <h4>Si procede de San Salvador deberá tomar la Carretera Panamericana (CA-8) en dirección a Santa Ana- Sonsonate. En el punto conocido como “El Poliedro” del municipio de Lourdes deberá tomar el desvío hacia Sonsonate que está a la derecha.</h4>
                    <br>
                    <h4>A lo largo del camino encontrará la señalización que le indica cómo llegar a cada destino de la Ruta de las Flores. El recorrido en vehículo lleva una hora con 30 minutos aproximadamente.</h4>
                    <br>
                    <h4>Si va en autobús, hay varias opciones. Desde la terminal de Occidente en San Salvador, puede tomar la 205 especial a $1.30 USD (1 hora y 15 minutos aproximadamente), la 205 normal a $0.75 USD (1 hora y 45 minutos aproximadamente). También podrá abordar la ruta 249 con destino Sonsonate-Ahuachapán.</h4>
                </div>
                <div class="col-lg-4 col-md-12 bounceInRight animated">
                    <a href="#" class="thumbnail">
                      <img class="miniaruta pulse infinite animated" src="../img/ubi1.jpg" alt="...">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-12 bounceInLeft animated wowload">
                  <iframe width="700" height="480" src="https://www.youtube.com/embed/x89W6kBJko8" frameborder="0" gesture="media" allowfullscreen></iframe>
                </div>
                <div class="col-lg-4 col-md-12">
                  <a href="#" class="thumbnail">
                    <img class="miniaruta pulse infinite animated" src="../img/ubi2.jpg" alt="...">
                  </a>
                  <br>
                  <a href="#" class="thumbnail">
                    <img class="miniaruta pulse infinite animated" src="../img/ubi3.jpg" alt="...">
                  </a>
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

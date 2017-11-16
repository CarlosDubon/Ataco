<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <?php
    include '../html/head.html';
    ?>
    <title>Poblacion Y Vivienda</title>
</head>
<body>
    <header>
    <?php
       include '../html/header.html';
    ?>
    </header>
    <section>
       <div class="container">
           <h1 style="display: inline-block">Población Y Vivienda</h1><button type="button" class="play-buttom"><i name="play" class="fa fa-play" aria-hidden="true"></i><span name="play">Reproducir</span></button>
           <audio id="medio" width="200px">
                <source src="../audios/audio.mp3" >
           </audio>

       </div>
    </section>
    <footer>
        <?php
          include '../html/Topscroller-dark.html';
          include '../html/footer.html';
        ?>
    </footer>
    <!--Modals-->
</body>
</html>

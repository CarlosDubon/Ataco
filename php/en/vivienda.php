<?php
require 'sql_conn.php';
$query = "SELECT * FROM municipio";
$rs = getResult($query);
$vivienda = explode('|',$rs[0]['Vivienda']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <?php
    include '../../html/head.html';
    ?>
    <title>Housing</title>
</head>
<body>
    <header>
    <?php
       include '../../html/en/header.php';
    ?>
    </header>
    <section>
       <div class="container">
            <h1 style="display: inline-block">Population and Housing</h1><button type="button" class="play-buttom"><i name="play" class="fa fa-play" aria-hidden="true"></i><span name="play">Play</span></button>
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <?php
                    for($i=0;$i<count($vivienda);$i++){
                        echo '<p>'.$vivienda[$i].'</p>';
                    }
                    ?>
                </div>
                <div class="col-lg-4 col-md-12">
                      <img class="miniaruta" src="../../img/calleataco.jpg" alt="...">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <h5 align="center"><b>Population</b></h5><hr>
                    <p>According to the census that was carried out in 2007, the population of Concepción de Ataco has increased every year. Below is a list of these data for a better understanding.</p>
                    <div class="row">
                        <div class="col-lg-6 col-md-12 center">
                            <ol>
                                <li>Poblacion total</li>
                                <ul>
                                    <li>Hombres</li>
                                    <li>Mujeres</li>
                                </ul><br>

                                <li>Urbano</li>
                                <ul>
                                    <li>Hombres</li>
                                    <li>Mujeres</li>
                                </ul><br>

                                <li>Rural</li>
                                <ul>
                                    <li>Hombres</li>
                                    <li>Mujeres</li>
                                </ul><br>
                            </ol>
                        </div>
                        <div class="col-lg-6 col-md-12 center">
                            <ul>
                                <li>12,786</li>
                                <ul>
                                    <li>6,276</li>
                                    <li>6,510</li>
                                </ul><br>

                                <li>5,902</li>
                                <ul>
                                    <li>2,836</li>
                                    <li>3,066</li>
                                </ul><br>

                                <li>6,884</li>
                                <ul>
                                    <li>3,440</li>
                                    <li>3,444</li>
                                </ul><br>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <h5 align="center"><b>Tipo de Vivienda</b></h5><hr>
                    <p>Otro aspecto de gran importancia en el censo son los tipos de vivienda de la región, los cuales se muestran a continuación:</p>
                    <div class="row">
                        <div class="col-lg-12 col-md-12" style="margin-left:5%">
                            <ol>
                                <li>Casa Independite</li>
                                <li>Apartamento</li>
                                <li>Pieza en Casa</li>
                                <li>Pieza en Mesón</li>
                                <li>Rancho o Choza</li>
                                <li>Casa Improvisada</li>
                                <li>Local no Destinado para Habitación Humana</li>
                                <li>Otra (Vivienda Movil, Carpa, Etc.)</li>
                                <li>Viviendas Colectivas</li>
                                <li>Personas sin Vivienda</li>
                            </ol>
                        </div>

                    </div>
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

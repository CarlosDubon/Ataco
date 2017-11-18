<?php
require 'sql_conn.php';
$query="SELECT * FROM Orografia";
$query2="SELECT * FROM municipio";
$orografia=getResult($query2);
$cerros=getResult($query);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <?php
    include '../../html/head.html';
    ?>
    <title>Orography</title>
</head>
<body>
    <header>
    <?php
       include '../../html/en/header.php';
    ?>
    </header>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1 style="display: inline-block">Orography </h1><button type="button btn btn-large btn-success" class="play-buttom"><i name="play" class="fa fa-play" aria-hidden="true"></i>
                      <span name="play">Play</span>
                  </button>
                    <p><?php echo $orografia[0]['Orografia'] ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <img class="miniaruta" src="../../img/relieve.jpg" alt="...">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="polig1"></div>
                    <p>High Relief</p>
                </div>
                <div class="col-md-4">
                    <div class="polig2"></div>
                    <p>Medium Relief</p>
                </div>
                <div class="col-md-4">
                    <div class="polig3"></div>
                    <p>Low Relief</p>
                </div>
            </div>
            <h1>Main hills</h1>
            <div class="row">
                <?php
                for($i=0;$i<count($cerros);$i++){
                    echo '<div class="col-md-4">
                            <div class="success-container">
                                <div class="success-container-header">
                                    <h4><i class="fa fa-picture-o" aria-hidden="true"></i>'.$cerros[$i]['Nombre'].'</h4>
                                </div>
                                <div class="success-container-body">
                                    <p>'.$cerros[$i]['Descripcion'].'</p>
                                </div>
                            </div>
                        </div>';
                }
                ?>
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

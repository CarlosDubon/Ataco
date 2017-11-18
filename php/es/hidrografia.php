
<?php
require 'sql_conn.php';
$query="SELECT * FROM municipio";
$query2="SELECT * FROM hidrografia";
$hidrografia = getResult($query);
$rios = getResult($query2);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <?php
    include '../html/head.html';
    ?>
    <title>Hidrografia</title>
</head>
<body>
    <header>
    <?php
       include '../html/header.php';
    ?>
    </header>
    <section>
        <div class="container">

            <h1 style="display: inline-block">Hidrografia </h1><button type="button btn btn-large btn-success" class="play-buttom"><i name="play" class="fa fa-play" aria-hidden="true"></i>
              <span name="play">Reproducir</span>
          </button>
            <div class="row">
              <div class="col-md-12 center">
               <a class="navbar-brand logo fadeIn animated" href="index.html">
                  <img src="../img/RIOS/RIOS.png" alt="mapa hidrografico" style="width: 100%;">
               </a>
             </div>
          </div>
          <div class="text-center" style="">
           <p class="lead"><?php echo $hidrografia[0]['Hidrografia'] ?></p>
         </div>
         <?php
                $flag = true;
                for($i=0;$i<count($rios);$i++){
                    $query3="SELECT * FROM Img_hidrografia WHERE idHidrografia = ".($i+1)."";
                    $imgs = getResult($query3);
                    if($flag){
                        echo '
                            <div class="row">
                                <div class="col-lg-4 col-md-12 bounceInLeft animated">
                                    <a href="#" class="thumbnail">
                                      <img class="miniaruta" src="'.$imgs[0]['ruta'].'" alt="...">
                                    </a>
                                </div>
                                <div class="col-lg-8 col-md-12">
                                    <h1>'.$rios[$i]['Nombre'].'</h1>
                                    <p>'.$rios[$i]['Descripcion'].'</p>
                                </div>
                            </div>
                            <hr>';
                        
                         $flag=false;
                    }else{
                        echo '
                            <div class="row">
                                <div class="col-lg-8 col-md-12">
                                    <h1>'.$rios[$i]['Nombre'].'</h1>
                                    <p>'.$rios[$i]['Descripcion'].'</p>
                                </div>
                                <div class="col-lg-4 col-md-12 bounceInLeft animated">
                                    <a href="#" class="thumbnail">
                                      <img class="miniaruta" src="'.$imgs[0]['ruta'].'" alt="...">
                                    </a>
                                </div>
                            </div>
                            <hr>
                            ';
                        $flag=true;
                    }
                }
                
               ?>
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

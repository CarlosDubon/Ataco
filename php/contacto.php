<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <?php
    include '../html/head.html';
    ?>        
    <title>Contacto</title>
</head>
<body>
    <header>
    <?php
       include '../html/header.html';
    ?>
    </header>
    <section>
        <div class="container">
            <br>
            <h1 style="display: inline-block">Contacto</h1><br>
            <h6 class="mt-0 pt-0">Te invitamos a contactarnos, te responderemos a la brevedad.</h6>
            <hr color="black" size=1>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                   <div class="form-container">
                        <form id="contactForm" action="form-process.php" method="POST">
                            <div class="form-group">
                                <h5><label for="name">Nombre:</label>
                                <input name="name" type="text" placeholder="Escribe tu nombre" class="form-control" required></h5>
                            </div>
                            <div class="form-group">
                                <h5><label for="mail">Email:</label>
                                    <input name="mail" type="email" placeholder="ejemplo@dominio.com" class="form-control" required></h5>
                            </div>
                            <div class="form-group">
                                <h5><label for="message">Comentario:</label>
                                <textarea name="message" class="form-control" placeholder="Escribe tu comentario" rows="5" required></textarea></h5>
                              </div>
                            <div class="form-group">
                                <input class="btn btn-info" type="submit" id="submit" value="Enviar">
                            </div>
                        </form>
                    </div>  
                </div>
                <div class="col-md-6">
                        <div>
                        </div>
                        <h5 class="h5-contact"><span class="icon-laptop"></span><a class="a-contact" href="index.php"> Inicio</a></h5>
                        <br>
                        <div>
                            <br>
                        </div>
                        <h5 class="h5-contact"><span class="icon-location"></span> Carretera Panamericana (CA-8) en dirección a Santa Ana- Sonsonate tomar el desvío hacia Sonsonate a lo largo del camino encontrará la señalización a la Ruta de las Flores para llegar a Concepción de Ataco</h5>
                        <br>
                        <br>
                        <h5 class="h5-contact" ><span class="icon-facebook"></span><a class="a-contact" href="https://www.facebook.com/alcaldiamunicipalatacoamca"> Facebook</a></h5>
                    </div>
                </div>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="col-lg-12">
                <div class="comment-container">
                    <div class="comment-container-header">
                        
                    </div>
                    <div class="comment-container-body">
                        
                    </div>
                    <div class="comment-container-footer">
                        
                    </div>
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
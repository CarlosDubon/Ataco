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
                <form action="">
                    <div class="form-group">
                        <h5><label>Nombre:</label>
                        <input type="text" placeholder="Escribe tu nombre" class="form-control"></h5>
                    </div>
                    <div class="form-group">
                        <h5><label>Email:</label>
                            <input type="email" placeholder="Escribe tu email" class="form-control"></h5>
                    </div>
                    <div class="form-group">
                        <h5><label>Mensaje:</label>
                        <textarea class="form-control" placeholder="Escribe tu mensaje" rows="5"></textarea></h5>
                      </div>
                    <div class="form-group">
                        <button class="btn btn-info" type="submit">Enviar</button>
                    </div>
                </form>  
            </div>
            <div class="col-lg-6 col-md-6">

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
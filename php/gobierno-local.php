<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <?php
        include '../html/head.html';
    ?>
    <script src="../js/delayAnimate.js"></script>
    <title>Gobierno Local</title>
</head>
<body>
   <header>
       <?php
            include '../html/header.html';
       ?>
   </header>
   <section>
       <div class="container">
           <h1 style="display: inline-block">Gobierno Local</h1><button type="button" class="play-buttom"><i name="play" class="fa fa-play" aria-hidden="true"></i><span name="play">Reproducir</span></button>
           <p>El municipio de Concepción de Ataco cuenta actualmente con la siguiente estructura:</p>
           <p>Miembros de Concejo, 6:</p>
           <div class="row">
               <div class="col-md-4">
                   <a href="#" id="first"  class="thumbnail" style="visibility:hidden">
                       <img class="profile" src="../img/President.png" alt="...">
                   </a>
                   <p><b>Alcalde:</b> 1.</p>
                   <p><b>Alcalde actual:</b> Óscar Oliverio Gómez</p>
               </div>
               <div class="col-md-4">
                   <a href="#" id="second" style="visibility:hidden" class="thumbnail">
                       <img class="profile" src="../img/Sindico.png" alt="...">
                   </a>
                   <p><b>Síndico:</b> 1</p>
               </div>
               <div class="col-md-4">
                   <a href="#" id="thirt" class="thumbnail" style="visibility:hidden">
                       <img style="width:100%;" src="../img/Regidores.png" alt="...">
                   </a>
                   <p><b>Regidores:</b> 4</p>
               </div>
           </div>
           <hr>
           <div class="row">
               <div class="col-lg-6">
                   <p class="h5"><b>Personal municipal por nombramiento:</b></p>
                   <p class="tab"><i class="fa fa-users" aria-hidden="true"></i> 9 Personas</p>
               </div>
               <div class="col-lg-6">
                   <p class="h5"><b>Cuenta con las siguientes dependencias:</b></p>
                   <p class="tab"><i class="fa fa-address-card" aria-hidden="true"></i> Secretaria</p>
                   <p class="tab"><i class="fa fa-address-book" aria-hidden="true"></i> Registro Civil</p>
                   <p class="tab"><i class="fa fa-address-card-o" aria-hidden="true"></i> Cedula</p>
                   <p class="tab"><i class="fa fa-money" aria-hidden="true"></i> Tesoreria</p>
               </div>

           </div>

       </div>

   </section>

</body>
</html>
<style>
    .tab{
        margin-left: 4em;
    }
</style>

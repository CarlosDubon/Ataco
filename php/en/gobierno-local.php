<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <?php
        include '../../html/head.html';
    ?>
    <script src="../../js/delayAnimate.js"></script>
    <title>Local Government</title>
</head>
<body>
   <header>
       <?php
            include '../../html/en/header.php';
       ?>
   </header>
   <section>
       <div class="container">
           <h1 style="display: inline-block">Local Government</h1><button type="button" class="play-buttom"><i name="play" class="fa fa-play" aria-hidden="true"></i><span name="play">Play</span></button>
           <audio id="medio" width="200px">
               <source src="../../audios/en/Localgovernment.mp3" >
           </audio>
           <p>The municipality of Concepción de Ataco currently has the following structure:</p>
           <p>Council Members, 6:</p>
           <div class="row">
               <div class="col-md-4">
                   <a href="#" id="first"  class="thumbnail" style="visibility:hidden">
                       <img class="profile" src="../../img/President.png" alt="...">
                   </a>
                   <p><b>Mayor:</b> 1.</p>
                   <p><b>Current Mayor:</b> Óscar Oliverio Gómez</p>
               </div>
               <div class="col-md-4">
                   <a href="#" id="second" style="visibility:hidden" class="thumbnail">
                       <img class="profile" src="../../img/Sindico.png" alt="...">
                   </a>
                   <p><b>Receiver:</b> 1</p>
               </div>
               <div class="col-md-4">
                   <a href="#" id="thirt" class="thumbnail" style="visibility:hidden">
                       <img style="width:100%;" src="../../img/Regidores.png" alt="...">
                   </a>
                   <p><b>Aldermen:</b> 4</p>
               </div>
           </div>
           <hr>
           <div class="row">
               <div class="col-lg-6">
                   <p class="h5"><b>Municipal staff by appointment:</b></p>
                   <p class="tab"><i class="fa fa-users" aria-hidden="true"></i> 9 People</p>
               </div>
               <div class="col-lg-6">
                   <p class="h5"><b>It has the following dependencies:</b></p>
                   <p class="tab"><i class="fa fa-address-card" aria-hidden="true"></i> Secretary</p>
                   <p class="tab"><i class="fa fa-address-book" aria-hidden="true"></i> Civil registration</p>
                   <p class="tab"><i class="fa fa-address-card-o" aria-hidden="true"></i> Identification card</p>
                   <p class="tab"><i class="fa fa-money" aria-hidden="true"></i> Tesorery</p>
               </div>

           </div>

       </div>

   </section>
   <footer>
     <?php
        include '../../html/footer.html';
        include '../../html/Topscroller-dark.html';
      ?>
   </footer>

</body>
</html>
<style>
    .tab{
        margin-left: 4em;
    }
</style>

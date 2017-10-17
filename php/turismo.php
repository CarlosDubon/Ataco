<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <?php
    include '../html/head.html';
    ?>
    <title>San Miguel de Mercedes</title>
</head>
<body>
    <header>
    <?php
       include '../html/header.html';
    ?>
    </header>
    <section>
       <div class="container">
           <h1 style="display: inline-block">Turismo</h1><button type="button" class="play-buttom"><i name="play" class="fa fa-play" aria-hidden="true"></i><span name="play">Reproducir</span></button>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse provident ducimus harum ut quibusdam fugit eos error veritatis libero excepturi fuga illum quia, quaerat placeat sapiente, doloremque hic minus fugiat.
           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum ex voluptatibus dicta vel quaerat illo quod. Fuga architecto deleniti, quos ad beatae perferendis et voluptatibus delectus, ea voluptate quae. Asperiores.</p>
           <div class="row">
                <div class="col-md-4">
                    <a href="#" class="thumbnail" data-toggle="modal" data-target="#Turismo1">
                      <img class="miniaruta" src="../img/Img3.jpg" alt="...">
                    </a>
                    <hr>
                    <h1>Lorem</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore sed voluptate, labore laudantium repellat autem accusamus voluptas! Ipsa ab officiis soluta porro libero in, provident vitae corporis optio consequatur modi!</p>
                </div>
                <div class="col-md-4">
                    <a href="#" class="thumbnail" data-toggle="modal" data-target="#Turismo2">
                      <img class="miniaruta" src="../img/Img2.png" alt="...">
                    </a>
                    <hr>
                    <h1>Lorem</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis eaque, dicta. Provident dolore, ullam temporibus autem accusantium fuga veniam incidunt ut dicta atque accusamus commodi rerum dignissimos culpa eius rem.</p>
                </div>
                <div class="col-md-4">
                    <a href="#" class="thumbnail" data-toggle="modal" data-target="#Turismo3">
                      <img class="miniaruta" src="../img/Img4.jpg" alt="...">
                    </a>
                    <hr>
                    <h1>Lorem</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic eligendi, qui. Quasi illo sit, fugiat, veritatis ad eum repudiandae eaque maxime id aut dolor alias autem soluta quam! Veritatis, modi?</p>
                </div>
            </div>
            <hr>
            <div class="row" >
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla explicabo expedita ipsum veritatis, vel ut, saepe officia facere porro. Suscipit dignissimos necessitatibus fuga sit, voluptatum architecto aspernatur assumenda deserunt obcaecati.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam magni nemo deserunt voluptas ut, sint molestiae? Ea repellendus vitae adipisci molestias, in sunt odit recusandae, at aperiam. Delectus, magni, a.</p>
            </div>
       </div>

    </section>
    <footer>
      <?php
        include '../html/Topscroller-dark.html';
      ?>
<!--MODAL TURISMO 1 -->
        <div class="modal fade bs-example-modal-lg" id="Turismo1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Turismo 1</h4>
              </div>
              <div class="modal-body">
                <div class="container">
                  <div class="row gallery">
                      <div class="col-4 gallery-container"><img src="../img/Img6.jpg" width="100%"></div>
                      <div class="col-4 gallery-container"><img src="../img/Img2.png" width="100%"></div>
                      <div class="col-4 gallery-container"><img src="../img/Img9.jpg" width="100%"></div>
                  </div>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam hic dolorem fugit id beatae, sunt perferendis ducimus ab, labore vel, vitae laborum quis vero a reiciendis. Adipisci molestias, voluptatem velit.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe suscipit debitis a ipsum mollitia quibusdam in provident quasi molestiae, distinctio assumenda, beatae repellat, perferendis quis cum! Iste necessitatibus, minus aliquid.</p>
              </div>
              <div class="modal-footer">
                <button type="button" id="button-modal" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i>Cerrar</button>
              </div>
            </div>
          </div>
        </div>
<!--MODAL TURISMO 1 -->

<!--MODAL TURISMO 2 -->
        <div class="modal fade bs-example-modal-lg" id="Turismo2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Turismo 2</h4>
              </div>
              <div class="modal-body">
                <div class="container">
                  <div class="row gallery">
                      <div class="col-4 gallery-container"><img src="../img/Img5.jpg" width="100%"></div>
                      <div class="col-4 gallery-container"><img src="../img/Img8.jpg" width="100%"></div>
                      <div class="col-4 gallery-container"><img src="../img/Img7.jpg" width="100%"></div>
                  </div>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam hic dolorem fugit id beatae, sunt perferendis ducimus ab, labore vel, vitae laborum quis vero a reiciendis. Adipisci molestias, voluptatem velit.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe suscipit debitis a ipsum mollitia quibusdam in provident quasi molestiae, distinctio assumenda, beatae repellat, perferendis quis cum! Iste necessitatibus, minus aliquid.</p>
              </div>
              <div class="modal-footer">
                <button type="button" id="button-modal" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i>Cerrar</button>
              </div>
            </div>
          </div>
        </div>
<!--MODAL TURISMO 2 -->

<!--MODAL TURISMO 3 -->
        <div class="modal fade bs-example-modal-lg" id="Turismo3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Turismo 3</h4>
              </div>
              <div class="modal-body">
                <div class="container">
                  <div class="row gallery">
                    <div class="col-4 gallery-container"><img src="../img/Img9.jpg" width="100%"></div>
                    <div class="col-4 gallery-container"><img src="../img/Img6.jpg" width="100%"></div>
                    <div class="col-4 gallery-container"><img src="../img/Img4.jpg" width="100%"></div>
                  </div>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam hic dolorem fugit id beatae, sunt perferendis ducimus ab, labore vel, vitae laborum quis vero a reiciendis. Adipisci molestias, voluptatem velit.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe suscipit debitis a ipsum mollitia quibusdam in provident quasi molestiae, distinctio assumenda, beatae repellat, perferendis quis cum! Iste necessitatibus, minus aliquid.</p>
              </div>
              <div class="modal-footer">
                <button type="button" id="button-modal" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i>Cerrar</button>
              </div>
            </div>
          </div>
        </div>
<!--MODAL TURISMO 3 -->
    </footer>

</body>
</html>

<?php
  require 'sql_conn.php';
  $Query_User='SELECT * from Usuario;';
  $Result= getResult($Query_User);
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <?php
    include '../../html/head.html';
  ?>
  <title>Login</title>
</head>
<body>
  <header>
    <?php
      include '../../html/en/header.php';
    ?>
  </header>
  <section style="height: 100vh;">
    <div class="container">
      <h1 style="text-align:center;">Administrator</h1>
      <div class="row">
          <div id="LoginContainer">
            <?php
              require 'login-process.php';
            ?>
              <form class="" action="login.php" method="post">
                <p style="margin-top:0;" class="LoginTitle">User: </p>
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1"><i style="margin:0;" id="toggle_menu" class="fa fa-user" name="bars" aria-hidden="true"></i></span>
                  <input  type="text" class="form-control" placeholder="User" aria-describedby="basic-addon1" name="User" value="">
                </div>
                <p class="LoginTitle">Password: </p>
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1"><i style="margin:0;" id="toggle_menu" class="fa fa-key" name="bars" aria-hidden="true"></i></span>
                  <input  type="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1" name="Pass" value="">
                </div>
                <input type="submit" style="display:block; width:100%; margin-top:30px;" class="btn btn-success" name="Submit" value="Submit">
              </form>
      </div>
    </div>
  </section>
  <footer>
    <?php
      include '../../html/Topscroller-dark.html';
      include '../../html/footer.html';
    ?>
  </footer>
</body>
</html>

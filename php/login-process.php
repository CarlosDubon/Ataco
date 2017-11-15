<?php
    $flag = true;
    if(isset($_POST['User']) && isset($_POST['Pass'])){
      if (!empty($_POST['User']) && !empty($_POST['Pass'])) {
        $flag=true;
        for($i=0; $i<count($Result); $i++){
          if($Result[$i]['Usuario']==$_POST['User'] && $Result[$i]['Password']==$_POST['Pass']){
            session_start();
            $_SESSION['nombre']= $_POST['User'];
            header('Location: /Ataco/php/contacto-admin.php');
            // echo 'Variables Correctas';
          }else{
            $flag=false;
          }
        }
        if(!$flag){
            echo '<div class="alert alert-danger" role="alert"><strong>Lo sentimos</strong> sus credenciales no son correctas</div>';
        }

      }else {
        echo '<div class="alert alert-danger" role="alert"><strong>Lo sentimos</strong> sus credenciales no pueden estar vacias</div>';
      }

    }
 ?>

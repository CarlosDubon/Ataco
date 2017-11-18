<?php
    $flag = true;
    if(isset($_POST['User']) && isset($_POST['Pass'])){
      if (!empty($_POST['User']) && !empty($_POST['Pass'])) {
        $flag=true;
        for($i=0; $i<count($Result); $i++){
          if($Result[$i]['Usuario']==$_POST['User'] && $Result[$i]['Password']==$_POST['Pass']){
            $_SESSION['Nombre']= $_POST['User'];
            $_SESSION['Mail']= $Result[$i]['Mail'];
              echo "<script>location.href='/Ataco/php/en/contacto-admin.php'</script>";
            // header('Location: /Ataco/php/contacto-admin.php');
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

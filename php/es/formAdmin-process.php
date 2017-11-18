<?php
    session_start();
    if(!isset($_SESSION['Nombre'])){
<<<<<<< HEAD
        header('Location: /Ataco/php/Index.php');
=======
        header('Location: /Ataco/php/es/Index.php');
>>>>>>> MasterBackup
    }
    require 'sql_conn.php';
    $conn=Arrancar();
    $stmt = $conn->prepare('Insert into comentario (Nombre,Correo,Comentario,idMunicipio) values (:Nombre,:Correo,:Comentario,:idMunicipio)');
    $stmt->bindParam(':Nombre',$nombre);
    $stmt->bindParam(':Correo',$mail);
    $stmt->bindParam(':Comentario',$message);
    $stmt->bindParam(':idMunicipio',$id);

    $nombre = $_SESSION['Nombre'];
    $mail =$_SESSION['Mail'];
    $message=$_POST['message'];
    $id = 1;

    if(isset($nombre,$mail,$message)){
        $stmt->execute();
<<<<<<< HEAD
        echo '<script> window.location.replace("/Ataco/php/contacto-admin.php")</script>';
        // echo 'bien';
    }else{
        echo '<script> window.location.replace("/Ataco/php/contacto-admin.php")</script>';
=======
        echo '<script> window.location.replace("/Ataco/php/es/contacto-admin.php")</script>';
        // echo 'bien';
    }else{
        echo '<script> window.location.replace("/Ataco/php/es/contacto-admin.php")</script>';
>>>>>>> MasterBackup
        // echo $nombre.$mail.$message.$id;
    }
?>

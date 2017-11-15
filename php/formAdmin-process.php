<?php
    session_start();
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
        echo '<script> window.location.replace("/Ataco/php/contacto-admin.php")</script>';
        // echo 'bien';
    }else{
        echo '<script> window.location.replace("/Ataco/php/contacto-admin.php")</script>';
        // echo $nombre.$mail.$message.$id;
    }
?>

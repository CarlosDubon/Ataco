<?php
    require 'sql_conn.php';
    $conn=Arrancar();
    $stmt = $conn->prepare('Insert into comentario (Nombre,Correo,Comentario,idMunicipio) values (:Nombre,:Correo,:Comentario,:idMunicipio)');
    $stmt->bindParam(':Nombre',$nombre);
    $stmt->bindParam(':Correo',$mail);
    $stmt->bindParam(':Comentario',$message);
    $stmt->bindParam(':idMunicipio',$id);
    
    $nombre = $_POST['name'];
    $mail =$_POST['mail'];
    $message=$_POST['message'];
    $id = 1;
    
    if(isset($nombre,$mail,$message)){
        $stmt->execute();
        echo '<script> window.location.replace("/Ataco/php/es/contacto.php")</script>';
    }else{
        echo '<script> window.location.replace("/Ataco/php/es/contacto.php")</script>';
    }
?>
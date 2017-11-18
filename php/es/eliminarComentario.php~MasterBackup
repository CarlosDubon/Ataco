<?php
session_start();
if(!isset($_SESSION['Nombre'])){
    header('Location: /Ataco/php/es/Index.php');
}else{
    require 'sql_conn.php';
    $conn = Arrancar();
    $id = $_GET['idComentario'];
    $query="DELETE FROM Comentario WHERE idComentario =".$id."";
    $conn->exec($query);
    header ('Location: /Ataco/php/es/contacto-admin.php');
}

?>
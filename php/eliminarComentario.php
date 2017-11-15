<?php
require 'sql_conn.php';
$conn = Arrancar();
$id = $_GET['idComentario'];
$query="DELETE FROM Comentario WHERE idComentario =".$id."";
$conn->exec($query);
header ('Location: /Ataco/php/contacto-admin.php');
?>
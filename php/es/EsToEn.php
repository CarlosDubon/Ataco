<?php
  $Ruta=$_GET['id'];
  $Arc=explode('/',$Ruta)[4];
  header('Location: /Ataco/php/en/'.$Arc.'');
 ?>

<?php
	$con=mysqli_connect('localhost','root','','prueba');

	$name=$_POST["name"];
	$mail=$_POST["mail"];
	$message=$_POST["message"];

	$sql="INSERT INTO prueba1 VALUES ('$name','$mail','$message')";
	$ejecutar=mysqli_query($con,$sql);
?>
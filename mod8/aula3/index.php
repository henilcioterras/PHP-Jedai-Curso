<?php 
	$pdo= new PDO('mysql:host=localhost;dbname=modulo_8','root','');

	$id=3;

	$sql=$pdo->prepare("UPDATE `clientes` SET nome='Nelicia',sobrenome='Alves' where id=$id "); 

	if ($sql->execute()) {
		echo "sucess";
	}
 ?>
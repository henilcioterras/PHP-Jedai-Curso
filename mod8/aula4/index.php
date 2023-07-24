<?php 
	$pdo= new PDO('mysql:host=localhost;dbname=modulo_8','root','');

	$id=3;

	$sql=$pdo->prepare("DELETE from `clientes` where id=? "); 

	if ($sql->execute(array($id))) {
		echo "sucess";
	}
 ?>
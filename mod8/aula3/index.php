<?php 
	$pdo= new PDO('mysql:host=localhost;dbname=modulo_8','root','');

	$id=3;

	$sql=$pdo->prepare("UPDATE `clientes` SET nome=?,sobrenome=? where id=$id "); 

	if ($sql->execute(array($nome,$sobrenome))) {
		echo "sucess";
	}
 ?>
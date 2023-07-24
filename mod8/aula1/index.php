<?php 
	$pdo= new PDO('mysql:host=localhost;dbname=modulo_8','root','');
	date_default_timezone_set('Africa/Sao_Tome');

	#$sql= $pdo->prepare("insert into `clientes` values (null,'Jonelcio','Terras','2023-07-24 19:58:00')");

	if (isset($_POST['acao'])) {
		$nome=$_POST['nome'];
		$sobrenome=$_POST['sobrenome'];
		$momento_registo= date('Y-m-d H:i:s');

	    $sql= $pdo->prepare("INSERT INTO `clientes` VALUES (null,?,?,?)");

		$sql->execute(array($nome,$sobrenome,$momento_registo));

		echo 'sucess';

	}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Cadastro no banco</title>
 </head>
 <body>
 	<form method="post">
 		<input type="text" name="nome">
 		<input type="text" name="sobrenome">
 		<input type="submit" name="acao" value="Enviar">
 	</form>
 </body>
 </html>
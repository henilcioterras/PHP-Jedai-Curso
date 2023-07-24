<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario get e post</title>
</head>
<body>

	<?php 

	#colocar o @ retira todos os tipos de warning para o caso de nao estar inicialiazado as variaveis
		$nome=@$_GET['nome'];

		echo $nome;

	 ?>
	<form>
		<input type="text" name="nome" ><br>
		<input type="email" name="email"><br>
		<input type="submit">

	</form>
</body>
</html>
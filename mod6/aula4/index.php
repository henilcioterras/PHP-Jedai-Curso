<?php
	function mostrarNome($nome="Henilcio"){
		echo "<h2>Nome eh: $nome</h2>";
	}

	#mostrarNome("Joao");

	$nome="Henilcio";


	$empresas="emp1 emp2 emp3";

	date_default_timezone_set('Africa/Sao_Tome');

	$dia=date("d/m/Y H:i:s");
	$titulo="Teste para ficar bem mau";

	include ("header.php");
?>
	<h1>Estou dentro do body</h1>




<?php

	include ("footer.php");

?>
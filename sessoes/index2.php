<?php 
	session_start();
	if (isset($_SESSION['nome'])) {
		echo $_SESSION['nome'];
	}
	
	#session_destroy();


	setcookie('nome','Heni',time() - 60,'/');

	echo $_COOKIE['nome'];

 ?>
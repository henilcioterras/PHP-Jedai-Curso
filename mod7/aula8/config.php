<?php 
		function myautoLoad($class){
		if (file_exists("classes/".$class.".php")) {
			include ("classes/".$class.".php");	
		}

	}

	spl_autoload_register("myautoLoad");


 ?>
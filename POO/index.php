<?php 
	class Pessoa{

		private $nome="Henilcio";
		private $idade="23";
		private $peso="70kg";

		private fuction crescer(){
			echo "i'm growing";

		}
		private fuction cagar(){
			echo "i'm caganding";
		}


	}


	$pessoa = new Pessoa;

	$pessoa -> crescer();


 ?>
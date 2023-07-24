<?php 
	 class Filha{

		public  function mostrarOla(){
			echo "Ola mundo";

		}

		protected  function mostrarTeste(){
			echo "Ola teste";

		}

	}

	class Pai extends Filha{

		public function mostrarOla(){
			echo "Novo ola";
			parent::mostrarOla();
		}

		public function mostrarTchau(){
			echo "Tchau mundo<br>";
			$this->mostrarTeste();
		}

	}


	$pai = new Pai;

	$pai->mostrarOla();

	#$filha=new Filha;

	#$filha->mostrarOla();

 ?>
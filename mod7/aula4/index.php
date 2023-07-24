<?php 
	abstract class Teste{

		public function fun1(){
			echo "function 1";
		}

		abstract function fun2();
	}
 
	class Principal extends Teste{
		public function fun2(){
			self::metodoestatico();
			echo "estou declarando oficialmente o function 2";

		}

		public static function metodoestatico(){
			echo "metodo estatico ";
		}


	}


	$principal=new Principal;

	#$principal->fun1();
	$principal->fun2();

	#Principal::metodoestatico();

 ?>
<?php
	/*
		Classe para retornar os termos da sequência de Fibonacci.
	*/
	class Fibonacci{ 

			//Construtor.
        	function __construct() {
            	print '<div class="criando-objeto">O objeto da classe Fibonacci foi instanciado.</div><br/>';
        	}
        
        	//Destrutor
        	function __destruct() {
            	print '<div class="destruindo-objeto">O objeto da classe Fibonacci acaba de ser destruído...<br/>';
        	}

			/*Calcula o valor de um termo específico da sequência de Fibonacci*/
			public function fibonacciRecursive($termo){ 
	
				if($termo == 0) 
					return 0; //Por definição f0=0
				elseif ($termo == 1) 
					return 1; //Por definição f1=1
				else 
					return $this->fibonacciRecursive($termo - 1) + $this->fibonacciRecursive($termo - 2);
					
			}

			/*Calcula uma sequência de n-termos*/
			public function calculaNTermos($nroTermos){

				$saida = "";//Instanciando a variável.

				for ($i = 0; $i <= $nroTermos; $i++){
					$saida = $saida.$this->fibonacciRecursive($i).'<br>';
				}

				return $saida;
			}
	}
?>
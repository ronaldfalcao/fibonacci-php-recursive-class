<?php
	/*
		Classe para retornar os termos da sequência de Fibonacci.
	*/
	class Fibonacci{ 
            
                private $inicialTimeExecution;
                private $finalTimeExecution;

		//Construtor.
        	function __construct() {
                    print '<div class="criando-objeto">O objeto da classe Fibonacci foi instanciado.</div><br/>';
        	}
        
        	//Destrutor
        	function __destruct() {
                    print '<div class="destruindo-objeto">O objeto da classe Fibonacci acaba de ser destruído...<br/>';
        	}
                
                //Função get para incialTimeExecution (tempo incial de execução)
                public function getInicialTimeExecution(){
                    return $this->inicialTimeExecution;
                }
                
                //Função set para incialTimeExecution (tempo incial de execução)
                public function setInicialTimeExecution($valorInseridoTime){
                    $this->inicialTimeExecution = $valorInseridoTime;
                }
                
                //Função get para finalTimeExecution (tempo incial de execução)
                public function getFinalTimeExecution(){
                    return $this->finalTimeExecution;
                }
                
                //Função set para finalTimeExecution (tempo incial de execução)
                public function setFinalTimeExecution($valorInseridoTime){
                    $this->finalTimeExecution = $valorInseridoTime;
                }
                
                
                /*Função para apresentação de erros*/
                public function erros($mensagem){
                    
                    $erroMensagem = '<div class="errorTerm"><img src="imagens/Erros.png" alt="Error icon"/><p>'.$mensagem.'</p></div>' ;
                    
                    return $erroMensagem;
                }

                /*Calcula o valor de um termo específico da sequência de Fibonacci*/
                public function fibonacciRecursive($termo){
                    
                    $this->setInicialTimeExecution(date ("u"));
                    
                    if ($termo >= 0){

                        if($termo == 0) 
                                return 0; //Por definição f0=0
                        elseif ($termo == 1) 
                                return 1; //Por definição f1=1
                        else 
                                return $this->fibonacciRecursive($termo - 1) + $this->fibonacciRecursive($termo - 2);
                    }
                    else{
                            return $this::erros("O valor está incorreto, ele deve ser positivo. O valor atual é $termo.");
                    }
                    
                    $this->setFinalTimeExecution(date ("u"));
                    echo $this->finalTimeExecution;
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
	<head>
		<title>Teste para a classe Fibonacci</title>
		<link rel="stylesheet" type="text/css" href="css/estilo.css" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	</head>

	<body>
		<div class="cabecalho">
				<span id="imagem-cabecalho-1"></span>
				<span id="titulo">Teste da classe Fibonacci</span>
				<span id="imagem-cabecalho-1"></span>
		</div>
		
		<div class="corpo">
				<?php

					//incluíndo o arquivo da classe.
					include_once 'classes/fibonacci.class.php';

					//Instanciando um objeto.
					$objetoFibonacci = new Fibonacci();

					//echo $objetoFibonacci->fibonacciRecursive(5);

					//Usa a funÃ§Ã£o que mostra N termos (um nÃºmero grande - maior do que 20- acarreta lentidÃ£o)
					echo $objetoFibonacci->calculaNTermos(30);

				?>
		</div>
		
		<div class="footer">
			<div class="html-validator">
				<p>
					<a href="http://validator.w3.org/check?uri=referer">
						<img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" height="31" width="88" />
					</a>
				</p>
			</div>
		</div>
	</body>
</html>
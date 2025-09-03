<?php 

	echo("Trabalhando com operadores em PHP <br /><br />");
	echo ("Operadores de soma <br /><br />");
	echo ("Operadores de subtração <br /><br />");
	echo ("Operadores de multiplicação <br /><br />");
	echo ("Operadores de divisão <br /><br />");

	echo("Insira a Operação desejada: <br/><br />");

 	$num1 = 10;
 	$num2 = 2;

 	$resp = $num1 + $num2;
 	$resp1 = $num1 - $num2;
 	$resp2 = $num1 * $num2;
 	$resp3 = $num1 / $num2;
 	$resp4 = $num1 % $num2;

 	echo("A Operação escolhida foi soma: <br/>");
 	echo ("A soma de $num1 mais $num2 é: $resp <br/><br />");

 	echo("A Operação escolhida foi subtração: <br/>");
 	echo ("A subtração de $num1 mais $num2 é: $resp1 <br/><br />");

 	echo("A Operação escolhida foi multiplicação: <br/>");
 	echo ("A multiplicação de $num1 mais $num2 é: $resp2 <br/><br />");

 	echo("A Operação escolhida foi divisão: <br/>");
 	echo ("A divisão de $num1 mais $num2 é: $resp3 <br/>");

 ?>
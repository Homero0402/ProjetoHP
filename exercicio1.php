<?php

//Você deverá mostra no final
//Salário Folha: R$
//Desconto INSS: R$
//Desconto IR: R$
//Salário Líquido: R$

echo("Sistema de folha de pagamento<br/><br/>");
$salario = 1500;

function inss($num1){
	return  ($num1 - ($num1 * 14/100));
}

$valor = $salario;
$inss = inss($valor);

function valor($num1, $num2, $num3){
	return  ($num1 = $num2 - $num3);
}
$valor = valor($valor, $salario, $inss);
$sl = 0;


if ($salario <= 2428.80){
	$desc = 0;

} elseif ($salario >= 2428.80 && $salario <= 2826.65) {
	$desc = 7.5;

	
} elseif ($salario >= 2826.65 && $salario <= 3751.05){
	$desc = 15;

	
} elseif ($salario >= 3752.05 && $salario <= 4664.68){
	$desc = 22.5;
	
	
} elseif ($salario >= 4664.68 ){
	$desc = 27.5;
	
	
}

function sl($num1, $num2, $num3){
	return  ($num1 = $num2 - ($num2 * $num3 / 100));
}

$sl = sl($sl, $salario, $desc);

function sl1($num1, $num2){
	return  ($num1 = $num1 - $num2);
}

$sl = sl1($sl, $valor) ;



echo ("Salário folha: $salario R$ <br/>");
	echo ("Desconto INSS: $valor <br/>");
	echo ("Desconto IR: $desc% <br/>");
	echo ("Salário líquido: $sl R$ <br/><br/>");

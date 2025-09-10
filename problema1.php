<?php 
echo("Insira dois numeros: <br/>");
$num1 = 5;
$num2 = 5;

echo("Os numeros escolhidos foram $num1	e $num2 <br/>");
$resp = $num1 + $num2;
	if ($resp > 20){
	
	$resp = $resp + 8;
	echo("O numero é $resp ");

} else{	
	
	$resp = $resp - 5; 
	echo("O numero é $resp");
}

 ?>
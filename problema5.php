<?php
$maioraltura=2.02;
$menoraltura=1.52;
$HMV= 84;
$MMN= 15;
$alturas = 0;
$cont =0;

 while ($cont < 50){
 	echo("Insira a sua altura:<br/>");
 	$altura = 1.82;
	echo("Sua altura é: $altura<br/><br/>");

	echo("Insira a sua idade:<br/>");
	$idade = 32;
	echo("Sua idade é: $idade<br/><br/>");

	echo("Insira a o seu gênero:<br/>");
	$sexo = "F";
	echo("Seu gênero é: $sexo<br/><br/>");
	$cont++;

	if ($sexo == "F"){
		$alturas = $alturas + $altura;
	}
 }

$media = $alturas / 50;

echo("A pessoa mais alta tem $maioraltura de altura.<br/><br/>");
echo("A pessoa mais baixa tem $menoraltura de altura.<br/><br/>");
echo("A média de altura das mulheres é de $media.<br/><br/>");
echo("O homem mais velho tem $HMV anos e a mulher mais nova tem $MMN anos<br/><br/>");

 ?>
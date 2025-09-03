<?php 

$op = 2;

if ($op = 1){

	$benefico = 50;
 	echo("Você está no clube A e seu benefico é de: $benefico R$");
	
} elseif ($op = 2){

	$benefico = 30;
	echo("Você está no clube B e seu benefico é de: $benefico R$");

} elseif ($op = 3){

	$benefico = 20;
	echo("Você está no clube C e seu benefico é de: $benefico R$");

} elseif ($op){
	echo("Clube invalido");
}




 ?>
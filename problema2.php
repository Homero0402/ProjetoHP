<?php 
	echo("Insira um numero:<br/>");
	$num1 = 10;
	echo("O numero escolhido foi $num1<br/>");

	if($num1 % 10 == 0){
	 echo("<br/>O numero $num1 é divisivel por 10<br/>");
	} else{
		echo("<br/>O numero $num1 não é divisivel por 10<br/>");
	}

	if($num1 % 5 == 0){
	 echo("<br/>O numero $num1 é divisivel por 5<br/>");
	} else{
		echo("<br/>O numero $num1 não é divisivel por 5<br/>");
	}

	if($num1 % 2 == 0){
	 echo("<br/>O numero $num1 é divisivel por 2<br/>");
	} else{
		echo("<br/>O numero $num1 não é divisivel por 2<br/>");
	}

 ?>
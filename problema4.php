<?php 
echo("Insira 3 números:<br/>");
$num1=3;
$num2 =1;
$num3=2;
echo("Os numero escolhidos foram $num1, $num2 e $num3<br/><br/>");

	if ($num1 >= $num2 && $num1 >= $num3) {
    
    if ($num2 >= $num3) {
        echo ("Esses números em ordem decrescente ficam assim: $num1, $num2, $num3");
    } else {
        echo ("Esses números em ordem decrescente ficam assim: $num1, $num3, $num2");
    }
} else if ($num2 >= $num1 && $num2 >= $num3) {
    
    if ($num1 >= $num3) {
        echo ("Esses números em ordem decrescente ficam assim: $num2, $num1, $num3");
    } else {
        echo ("Esses números em ordem decrescente ficam assim: $num2, $num3, $num1");
    }
} else {

    if ($num1 >= $num2) {
        echo ("Esses números em ordem decrescente ficam assim: $num3, $num1, $num2");
    } else {
        echo ("Esses números em ordem decrescente ficam assim: $num3, $num2, $num1");
    }
}
 ?>
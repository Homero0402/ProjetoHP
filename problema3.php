<?php 
echo("Insira seu nome:<br/>");
 $nome = "Homer";
 echo("Seu nome é $nome<br/><br/>");
 echo("Insira seu sexo:<br/>");
 $sexo = "F";
 echo("Seu sexo é $sexo<br/><br/>");
 echo("Insira a sua idade<br/>");
 $idade = 26;
 echo("Sua idade é $idade<br/><br/>");

 if($sexo == "F" && $idade < 25 ){
 	echo("$nome ACEITA");

 }else{
 	echo("$nome NÃO ACEITA");
 }
 ?>
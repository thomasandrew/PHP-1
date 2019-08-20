<?php
  //Funções matemáticas
  //abs - Valor absoluto, para numero negativo em positivo
  $var_A=$_GET["a"];
  $var_B=$_GET["b"];
  echo'O valor absoluto de a é igual a '.abs($var_A);
  echo'<br>O valor absoluto de b é igual a '.abs($var_B);
  
  //sqrt() - Raiz quadrada
  echo'<br>A raiz quadrada de a é igual a '.sqrt(abs($var_A));
  echo'<br>A raiz quadrada de b é igual a '.sqrt(abs($var_B));
  
  //number_format() - Formatação de casas decimais
  echo'<br>O valor de a com duas casa decimais é igual a '.number_format($var_A,2);
  echo'<br>O valor de b com duas casa decimais é igual a '.number_format($var_B,2);
  
  //pow() - Potência
  echo'<br>A potência de a é igual a '.number_format(pow($var_A,2),2);
  echo'<br>A potência de b é igual a '.number_format(pow($var_B,2),2);
  
  $var_C=$_GET["c"];
  $var_D=$_GET["d"];
  //round() - Arredonda os valores
  echo'<br>O valor arredondado de c é igual a '.round($var_C);
  echo'<br>O valor arredondado de d é igual a '.round($var_D);
  
  //ceil() - Arredonda os valores obrigatoriamente para cima
  echo'<br>O valor de c arredondado para cima é igual a '.ceil($var_C);
  echo'<br>O valor de d arredondado para cima é igual a '.ceil($var_D);
  
  //floor() - Arredonda os valores obrigatoriamente para baixo
  echo'<br>O valor de c arredondado para baixo é igual a '.floor($var_C);
  echo'<br>O valor de d arredondado para baixo é igual a '.floor($var_D);
  
  //intval() - Pega somente o valor inteiro da variavel
  echo'<br>O valor da integral de c é igual a '.intval($var_C);
  echo'<br>O valor da integral de d é igual a '.intval($var_D);
  
  //Operadores de incremento: pre-incremento e pos-incremento
  
  //pre-incremento
  echo'<br>O valor de c '.$var_C.' pre-incrementado é igual a '.++$var_C;
  echo'<br>O valor de d '.$var_D.' pre-incrementado é igual a '.++$var_D;
  
  //pos-incremento
  echo'<br>O valor de c  pos-incrementado é igual a '.$var_C++;
  echo', --> '.$var_C;
  echo'<br>O valor de d  pos-incrementado é igual a '.$var_D++;
  echo', --> '.$var_D;
  
  //Operadores de atribuição
  $var_E=20;
  $valor=$var_E+=30;
  echo"<br>A soma dos valores é: $valor";
  
  //variavel=condição?verdadeiro:falso - Operador ternario
  $var_Idade=$_GET["idade"];
  $maior=$var_Idade>=18?"Pode dirigir":"Não pode dirigir";
  echo"<br>$maior";
  
  //Operadores relacionais
  //Operador igual == (Verifica se os dados são iguais)
  $var_F=3;
  $var_G="3";
  $result=($var_F==$var_G)?"sim":"não";
  echo"<br>O valor é igual ? $result";
  
  //Operador igual e identico === (Verifica se os dados e os tipos são iguais)
  $var_F=3;
  $var_G="3";
  $result=($var_F===$var_G)?"sim":"não";
  echo"<br>O valor e o tipos são iguais ? $result";
  
  //Operadores lógicos &&, or ||, not !=
  $var_ano=$_GET["Idade"];
  $var_idadE=2019-$var_ano;
  echo"<br>Quem nasceu no ano $var_ano tem idade igual a $var_idadE";
  $var_Voto=($var_idadE>=18)?"obrigatorio":"não é obrigatorio";
  echo"<br>O seu voto: $var_Voto";
?>
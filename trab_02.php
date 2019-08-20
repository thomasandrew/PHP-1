<?php
  //1)Elaborar um programa que leia um numero.Calcule e informe o dobro desse numero.
  $var_a=$_GET["a"];
  echo"O dobro de $var_a é igual a ". 2*$var_a;
  //2)Elaborar um programa que leia o valor de um jantar.Calcule e informe o valor da taxa do garçon(10%) e o valor total a ser pago.
  $var_b=$_GET["b"];
  $gorjeta=$var_b*0.1;
  echo"<br>O jantar vai custar $var_b a gorjeta de 10% vai custar $gorjeta dando no total ".($var_b+$gorjeta);
  /*3)Elaborar um programa para uma pizzaria, o qual leia o valor total de uma conta e quantos clientes vão paga-lá. 
  Calcule e informe o valor a ser pago por cliente.*/
  $var_valor=$_GET["pizza"];
  $var_pessoa=$_GET["pessoa"];
  $var_Valor=$var_valor/$var_pessoa;
  echo"O valor que cada pessoa vai pagar é $var_Valor";
?>
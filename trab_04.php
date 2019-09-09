<?php

  //1.Criar um vetor com 20 elementos inteiros. Imprimir o maior e o menor valor ,sem ordenar, o percentual de números pares e a média dos elementos
  // do vetor.
  $var=$_POST["aleatorio"];
  $vet=array(); //Criando vetor
  
  for($i=0;$i<$var;$i++){
    $vet[$i] = rand(1,100); //Passando Valores
  }
  $maior=$vet[0];
  $menor=$vet[0];
  $pares=0;
  $media=0;
  for($i=0;$i<$var;$i++){
    echo"$vet[$i] ";
    if($vet[$i]>=$maior)
      $maior=$vet[$i];
    if($vet[$i]<=$menor)
      $menor=$vet[$i];
    if($vet[$i]%2==0)
      $pares++;
    $media+=$vet[$i];
  }
  echo"<br>O maior valor é $maior e o menor valor é $menor";
  echo"<br>A porcentagem de numeros pares é ".($pares*100)/$var;
  echo"<br>A média da soma de todos os valores é ".$media/$var;
  
  //2.Escreva um programa que receba do usuário 3 notas para dado aluno, armazenando-as em um vetor; em seguida, o programa deve imprimir na 
  //tela tais notas. 
  $nota1=$_POST["nt1"];
  $nota2=$_POST["nt2"];
  $nota3=$_POST["nt3"];
  //echo"As notas são $nota_1 $nota_2 e $nota_3";
  echo"<br>";
  $notas=array($nota1,$nota2,$nota3);
  print_r($notas);
  
  //3. Para um jogo, precisamos saber se um personagem morreu ou não depois de sofrer um ataque. Faça uma função que receba 2 parâmetros, 
  //DANO e SAÚDE. A função deve retornar verdadeiro se o dano for matar o personagem (ou seja, deixar sua saúde menor ou igual a zero) e falso 
  //caso contrário. 
  $saude=$_POST["vida"];
  $morte=$_POST["dano"];

  if($saude>$morte){
      echo"<br>Ta Vivo Porra";
  }
  else{ 
      echo"<br>Ta Morto Trouxa";
  }
  
  //4.Efetue um programa em PHP que receba os valor A,B,C e D.Efetue a soma entre A e C e a multiplicação entre B e D , verifique se o 
  //resultado da soma é maior, menor ou igual ao da multiplicação.
  $A=$_POST["num1"];
  $B=$_POST["num2"];
  $C=$_POST["num3"];
  $D=$_POST["num4"];
  
  if(($A+$C)>($B*$D)){
    echo"<br>A soma é maior que a multiplicação";
  }
  else if(($A+$C)<($B*$D)){
    echo"<br>A soma é menor que a multiplicação";
  }
  else{
    echo"<br>A soma é igual a multiplicação";
  }
?>
<?php
  //1. Faça um Programa que peça um número e então mostre a mensagem: O número informado foi [número].
  $numero=$_POST["num"];
  echo"O número digitado é $numero";
  
  //2. Faça um Programa que converta metros para centímetros. (Dica: 1 metro = 100 centímetros)
  $metro=$_POST["metros"];
  $centimetro=100*$metro;
  echo"<br>$metro metro são $centimetro centimetros";
  
  //3. Faça um Programa que peça o raio de um círculo, calcule e mostre sua área. Fórmula: Area = pi * raio²
  $raio=$_POST["raio"];
  $area=3.14*($raio*$raio);
  echo"<br>A area do circulo é $area";
  
  /*4. Faça um Programa que peça a temperatura em graus Farenheit, transforme e mostre a temperatura em graus Celsius. 
    Fórmula: Celsius = (5 * (Farenheit -32) / 9).
  */
  $farenheit=$_POST["temperatura"];
  $celsius=(5*($farenheit-32))/9;
  echo"<br>Se está fazendo $farenheit farenheit, está fazendo $celsius graus celsius.";
  
  /*5.Faça um programa que leia números até o usuário digitar 0. Em seguida, mostre o histórico desses números, sendo 
    o mais recente em baixo e o mais antigo em cima.
  */
  $sequencia = explode(",",$_POST["sequencia"]);
  $total=  array_change_key_case($sequencia);
  echo"<br>";
  print_r($total);
  $x=count($total);
  echo"<br>";
  for($i=0;$i<$x;$i++){
    echo"$total[$i]<br>";
    if($total[$i]==0)
      break;
  }
  
  /*
    6. Faça um Programa que peça o valor da gasolina e do álcool de um posto e diga qual é o combustível mais vantajoso 
    abastecer, sabendo que somente é vantagem abastecer álcool se o preço do mesmo é menor ou igual a 70% do valor da gasolina.
  */
  $gasolina=$_POST["gasolina"];
  $alcool=$_POST["alcool"];
  $porcentagem= $gasolina-((30/100)*$gasolina);
  if($alcool<=$porcentagem)
    echo"Alcool é mais vantajoso";
  else
    echo"Gasolina é mais vantajosa";
  
  /*
    7. Este é um exercício difícil! Você deve sortear 6 números de 1 a 60 e guardar numa array. Depois peça para o usuário dizer 6 
    números, um de cada vez e guarde-os em uma outra array. Aí diga quantos números ele acertou. Sim, é a loteria certinha desta vez! 
    Tente acertar os 6 números. Depois faça as contas de quantas chances você tem de acertar todos os 6. Você nunca mais vai jogar na loteria!
  */
  for($i=0;$i<6;$i++){
    $q[$i]=rand(1,60);
  }
  $n=array();
  $n[1]=$_POST["g"];
  $n[2]=$_POST["h"];
  $n[3]=$_POST["i"];
  $n[4]=$_POST["j"];
  $n[5]=$_POST["k"];
  $n[6]=$_POST["l"];
  for($i=0;$i<6;$i++){
    for($j=0;$j<6;$j++){
      if($q[$i]==$n[$j])$cont++;
      else $cont2++;
    }
  }
  echo"Acertou $cont numeros";
  if($cont2>=cont*cont) echo"Acertou 0 numeros"; 
    $prob=60/6;
  echo"Voce tem $prob chances de acertar";
?>
<?php
  //Questão 01  
  $d=$_POST["data"];
  switch($d){
    case 1:"janeiro";
    echo "janeiro";
    break;
    
    case 2:"fevereiro";
    echo "fevereiro";
    break;
    
    case 3:"março";
    echo "março";
    break;
        
    case 4:"abril";
    echo "abril";
    break;
    
    case 5:"maio";
    echo "maio";
    break;
        
    case 6:"junho";
    echo "junho";
    break;
    
    case 7:"julho";
    echo "julho";
    break;
        
    case 8:"agosto";
    echo "agosto";
    break;
        
    case 9:"setembro";
    echo "setembro";
    break;
        
    case 10:"outubro";
    echo "outubro";
    break;
        
    case 11:"novembro";
    echo "novembro";
    break;
    
    case 12:"dezembro";
    echo "dezembro";
    break;
        
     default:
     echo"tá vendo calendário chinês,irmão?";
  }
  //Questão 02
  $cigarros=$_POST["cigarro"];
  $ano=$_POST["anos"];
  $maco=(365*$ano)*$cigarros/20;
  $preco=$_POST["maços"];
  $total=$maco*$preco;
  
  echo"Você gastou $total de reais com cigarros";
  
  //Questão 03
  $j= $_POST["j"];
  $a= $_POST["a"];
  if($a>$j) echo"Amália é mais velha";
  else if($j>$a) echo"Joaquim é mais velho";  
  else echo"Os dois tem a mesma idade";
  
  //Questão 04
  $ale=rand(1,14);
  if((ale%3==0)||(ale%5==0)){
    echo"O numero $ale é multiplo de 3 ou 5";
  }
  //Questão 05
  $a=$_POST["la"];
  $b=$_POST["lb"];
  $c=$_POST["c"];

  if($a==$b||$a==$c||$b==$c){
    echo"Tiangulo Isóceles";
  }
  if($a==$b&&$a==$c&&$b==$c){
    echo"Triangulo Equilátero";  
  }
  else{
    echo"triangulo Escaleno";
  }
?>
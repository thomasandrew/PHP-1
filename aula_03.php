<?php
  //Condição if, else, else if (simples)
  $data=$_POST["nascimento"];
  $idade=date("Y")-$data;
  echo"Voce nasceu em $data e atualmente tem $idade.";
  if($idade>=18){
    $votar="já pode votar";
    $preso="já pode ser preso";
  }
  else{
    $votar="não pode ser votar";
    $preso="não pode ser preso";
  }
  echo"<br>Com essa idade $votar e também $preso";
  
  $peso=$_POST["peso"];
  $altura=$_POST["altura"];
  echo"<br>O peso digitado é $peso kg e a altura é $altura m.";
  $imc=$peso/($altura*$altura);
  echo"<br>O seu imc é ".  round($imc);
  if($imc<18.5){
    echo"<br>Você está abaixo do peso";
  }
  if($imc>=18.6 && $imc<24.9){
    echo"<br>Você está com o peso ideal";
  }
  if($imc>=25 && $imc<=29.9){
    echo"Você está acima";
  }
  if($imc>=30 && $imc<=34.9){
    echo"Você está obeso";
  }
  if($imc>35){
    echo"Você é gordo morbido, está próximo a morte, se cuide.";
  }
  
  //switch condição multipla
  
  $semana=$_POST["semana"];
  switch($semana){
    case 1:"Domingo - Deus acordou";
      case 2:"Segunda - Deus criando o projeto universo";
        case 3:"Terça - Deus começando o projeto universo";
          case 4:"Quarta - Deus consertando erros no projeto universo";
            case 5:"Quinta - Deus continuando o projeto universo após corrigir os erros";
              case 6:"Sexta - Deus termina o projeto universo";
                case 7:"Sábado - Deus descança";
                  echo"<br>Foda-se Tudo";
                  break;
    case 8:"Sabadão";
      case 9:"Domingão";
        echo"<br>Vai Beber desgraçado.";
        break;
      default :
        echo"<br>Escolheu errado";
  }
  
?>

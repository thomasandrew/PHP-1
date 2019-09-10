<?php
  //Rotinas em parâmetros dinâmicos - Argumentos
  
   //func_get_args() - Função para pegar os argumentos que foram passados e inseridos dentro de um array 
   //func_num_args() - Função que retornar o numero de argumentos que fora passados

   //Exemplo de soma com multiplos valores
   function somar(){
     $valores=func_get_args(); //Para receber argumentos
     $total=func_num_args(); //Para mostrar a quantidade de argumentos
     $soma=0;
     for($i=0; $i<$total;$i++){
       $soma+=$valores[$i];
     }
     return $soma;
   }
   $A=somar(1,2,3,4,5,6,7,8,9,10);
   echo"A soma dos valores é $A";
   
   /*Procedimento para retornar valores de duas maneiras diferentes: 
    valor por meio de referência
    valor - peaga o valor e passa para o paramentro, ou seja, eu passo paenas o valor, a variavel continua tendo o mesmo valor
   */
   function teste($x){
     $x+=2;
     echo $x;
   }
   echo"<br>A soma de x é ";
   $a=15;
   teste($a);
   echo"<br>O valor da varialvel a é ".$a;
   
   //referencia - Quando passamos o valor por referência temos que inserir o & na frente da variavel que encontra-se dentro do parâmentro
   function teste_2(&$y){
     $y+=4;
     echo $y;
   }
   echo"<br>A soma de y é ";
   $b=10;
   teste_2($b);
   echo"<br>O valor da varialvel a é ".$b;
   
   //Manipulação de string
   //1° função - printf
   //% para mostrar que é uma strig
   /*%f como é um  número, o f de float, se quiser formatar as casas decimais coloca-se o 2 antes do f, isso significa que vou ter duas casas 
    decimais
   */
   
   //1ª Forma
   $p="açucar";
   $preco=1.69;
   echo"<br>O $p custa R$".  number_format($preco,2);
   printf("<br>O %s custa R$%.2f",$p,$preco);
   
   //2ª Forma
   $d=[5,9,1];
   echo"<br>";
   print_r($d);
   
   //Pode-se substituir o print_r por : var_dump ou var_export
   
  //var_dump
   $d=[5,9,1];
   echo"<br>";
   var_dump($d);
   
   //var_export
   $d=[5,9,1];
   echo"<br>";
   var_export($d);
   echo"<br>";
   
   //3ª Forma - wordwrap - para fazer quebra de linha
   $texto="Nem tudo que é ouro fulgura
    Nem todo vagante é vadio
    O velho que é forte perdura
    Raiz funda não sofre frio

    Das cinzas o fogo há vir
    Das sombras a luz vai jorrar
    A espada há, de nova, luzir
    O sem coroa há de reinar";
   $result=wordwrap($texto,32,"<br>","false"); 
  //false respeita a palavra e depois quebra, o true quebra sem repeitar a palavra
   echo $result;
?>
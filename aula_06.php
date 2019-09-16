<?php
  /* 4º Forma - trim (Para recortar os espaços do inicio e do final, o espaço do meio é preservado) */
  $nome="  Lucas Bernardes dos Santos  ";
  echo"<br>A quantidade caracteres é ". (strlen($nome));
  $novo=trim($nome);
  echo"<br>".($novo);
  echo"<br>A quantidade de caracteres é ".(strlen($novo));
  
  /*5º Função - ltrim (Para recortar os espaços da esquerda, o espaço do meio é preservado)*/
  $nome="  Lucas Bernardes dos Santos  ";
  echo"<br><br>A quantidade caracteres é ". (strlen($nome));
  $novo=  ltrim($nome);
  echo"<br>".($novo);
  echo"<br>A quantidade de caracteres é ".(strlen($novo));
  
  /*6º Função - rtrim (Para recortar os espaços da direita, o espaço do meio é preservado)*/
  $nome="  Lucas Bernardes dos Santos  ";
  echo"<br><br>A quantidade caracteres é ". (strlen($nome));
  $novo= rtrim($nome);
  echo"<br>".($novo);
  echo"<br>A quantidade de caracteres é ".(strlen($novo));
  
  /*7ª Função - str_word_count (Traz a quantidade de palavras que está dentro da string) */
  $frase="Nem tudo que e ouro fulgura.<br>Nem todo o vagante e vadio.<br>O velho que e forte perdura.<br>Raiz funda não sofre frio.";
  $count=  str_word_count($frase,0); /* A função 0 conta as palavras */
  echo"<br><br> $frase";
  echo"<br>A quantidade de palavras é ".($count);
  echo"<br><br>";
  
  $count=  str_word_count($frase,1); /* A função 1 traz a posição de cada palavra dentro de um array */
  print_r($count);
  echo"<br><br>";
  
  $count=  str_word_count($frase,2); /* A função 2 traz a posição onde a palavra começa dentro de um array */
  print_r($count);
  echo"<br>";
  
  /*8ª Função - chr (Identifica o caracter digitado)*/
  $letra=  chr(67);
  $letra1=  chr(99);
  echo"<br><br>A letra do código 67 é ".$letra;
  echo"<br>A letra do código 99 é ".$letra1;
  
  /*9ª Função - ord seria o contrário do chr, para mostrar o código da letra*/
  $letra="C";
  $cod= ord($letra);
  echo"<br>O código de C é $cod<br><br>";
  
  //10ª Função - strtolower (Para colocar a string em minusculo)
  $poema="NEM TUDO QUE E OURO FULGURA.<br>NEM TODO VAGANTE E VADIO.<br>O VELHOR QUE E FORTE PERDURA.<br>RAIZ FUNDA NAO SOFRE FRIO.";
  echo"<br> ".strtolower($poema);
  
  //11ª Função - strtoupper (Para colocar a string em minusculo)
  $poema="<br><br>Nem tudo que e ouro fulgura.<br>Nem todo o vagante e vadio.<br>O velho que e forte perdura.<br>Raiz funda não sofre frio";
  echo"<br> ".strtoupper($poema);
  
  //12ª Função - ucfirst (Para colocar as primeiras letras em maiuscula)
  $nome="lucas bernardes";
  echo"<br><br>Meu nome é ".ucfirst($nome);
  
  //13ª Função - ucwords (Para colocar as primeiras letras em maiuscula)
  $nome="lucas bernardes";
  echo"<br><br>Meu nome é ".ucwords($nome);
  
  //14ª Função - strrev  (Mostra as palavras ao contrário)
  $reverso="lucaS bernardeS doS santoS";
  echo"<br><br> ".  strrev($reverso);
  
  //15ª Função - strpos (Para mostrar a posição que uma determinada palavra se encontra)
  $motiva="Vou estudar PHP para tirar nota 10";
  $pos=  strpos($motiva,"PHP");
  echo"<br><br>A string está na posição $pos";
  
  //16ª Função - stripos (Traz a busca independente da escrita estar igual a frase)
  $motiva="Vou estudar PHP para tirar nota 10";
  $pos1=  stripos($motiva,"PHP");
  echo"<br><br>A string está na posição $pos1";
  ?>
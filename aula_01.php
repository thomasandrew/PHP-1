<?php     
    echo"<center><font size=12>Sejam Bem Vindos!!!</center></font>";
    print"<center>O Center também funciona.</center>";
    $nome="Lucas Bernardes";
    $n1=10;
    $n2=20;
    echo"<font size=5>N1 = $n1<br>N2 = $n2<br>Nome: $nome</font>";
    
    //Operações Matemáticas
    //Soma
    $soma=$n1+$n2;
    echo"<br><br>A soma de $n1 + $n2 é igual a $soma";
    //Subtração
    $sub=$n1-$n2;
    echo"<br>A subtração de $n1 - $n2 é igual a $sub";
    //Multiplicação
    $mult=$n1*$n2;
    echo"<br>A multiplicação de $n1 * $n2 é igual a $mult";
    //Divisão
    $div=$n1/$n2;
    echo"<br>A divisão de $n1 / $n2 é igual a $div";  
    //Resto da Divisão
    $res_div=$n1%$n2;
    echo"<br>O resto da divisão de $n1 % $n2 é igual a $res_div";
    
    //Outra maneira de fazer as operações, usando a concatenação.
    echo"<br><br>";
    echo"<font size=5>A soma de $n1 + $n2 =".($n1+$n2);
    echo"<font size=5><br>A subtração de $n1 - $n2 =".($n1-$n2);
    echo"<font size=5><br>A multiplicação de $n1 * $n2 =".($n1*$n2);
    echo"<font size=5><br>A divisão de $n1 / $n2 =".($n1/$n2);
    echo"<font size=5><br>O resto da divisão de $n1 % $n2 =".($n1%$n2);
    
    //Entrada de valores do usuário - Método GET
    $varA=$_GET["x"];
    $varB=$_GET["y"];
    $varC=$_GET["z"];
    echo"<br><br>Valor de a é:$varA";
    echo"<br>Valor de b é:$varB";
    echo"<br>Valor de c é:$varC";
    
    //Soma
    echo"<br><br>";
    echo"<br>A soma das variaveis $varA + $varB + $varC é igual a ".($varA+$varB+$varC);
    
    //Subtração
    echo"<br>A subtração das variaveis $varA - $varB - $varC é igual a ".($varA-$varB-$varC);
    
    //Multiplicação
    echo"<br>A multiplicação das variaveis $varA * $varB * $varC é igual a ".($varA*$varB*$varC);
    
    //Divisão
    echo"<br>A divisão das variaveis $varA / $varB / $varC é igual a ".($varA/$varB/$varC);
    
    //Resto da divisão
    echo"<br>A divisão das variaveis $varA % $varB % $varC é igual a ".($varA%$varB%$varC);
?>
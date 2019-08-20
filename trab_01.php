<?php
 //Exercício: Entre com a nota de 3 alunos, pelo metodo GET, e depois apresente o resultado com variavel e sem variavel
    $nota_1=$_GET["n1"];
    $nota_2=$_GET["n2"];
    $nota_3=$_GET["n3"];
    $media=($nota_1+$nota_2+$nota_3)/3;
    echo"<br><br>A média da Nota usando variavel é ($nota_1 + $nota_2 + $nota_3) / 3 = $media";
    echo"<br>A média da Nota sem usar a variavel é ($nota_1 + $nota_2 + $nota_3) / 3 = ".(($nota_1+$nota_2+$nota_3)/3);
?>
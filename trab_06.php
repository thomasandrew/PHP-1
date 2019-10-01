<?php 
 /* Variaveis obrigatórias */
 $host="localhost";
 $user="root";
 $pass="";
 $banco="lucaszada";
 $conexao=mysqli_connect($host,$user,$pass)or die(mysqli_error());
 /* Fim das variaveis obrigatorias */
 
 mysqli_select_db($conexao,$banco)or die(mysqli_error());
 
 $nome=$_POST['nome_cliente'];
 $endereco=$_POST['endereco_cliente'];
 $email=$_POST['email'];
 $data_nasc=$_POST['data_nasc'];
 
 $sql=mysqli_query($conexao,"insert into cadastro_cliente(nome_cliente,endereco_cliente,email,data_nasc)value('$nome','$endereco','$email','$data_nasc')");
 echo"<center>Cadastro realizado com sucesso</center>";
 mysqli_close($conexao);
?>
<?php
  /* Itens Obrigatorios */
  $host="localhost";
  $user="root";
  $pass="";
  $banco="aula008";
  $conexao=  mysqli_connect($host, $user, $pass) or die(mysql_error());
  mysqli_select_db($conexao,$banco) or die(mysqli_error());
  /* Itens Obrigatorios */
  
  $artista = $_POST['Nome_Artista'];
  $titulo = $_POST['Titulo_CD'];
  $descricao = $_POST['Descricao'];
  $preco = $_POST['Preco_CD'];
  $ano = $_POST['Data_Lancamento'];
  $estilo_musical = $_POST['Estilo_Musical'];
  $gravadora = $_POST['Gravadora'];
  $musica = $_POST['Musicas'];
  
  /*$sql = mysqli_query($conexao,"insert into cd(Nome_Artista, Titulo_CD, Descricao, Preco_CD, Data_Lancamento, Estilo_Musical, Gravadora, Musicas) values('$artista', '$titulo', '$descricao', '$preco', '$ano', '$estilo_musical', '$gravadora', '$musica')");*/
  
  /*if($_POST['button']=="Inserir"){
    $sql="insert into cd(Nome_Artista, Titulo_CD, Descricao, Preco_CD, Data_Lancamento, Estilo_Musical, Gravadora, Musicas) values('$artista', '$titulo', '$descricao', '$preco', '$ano', '$estilo_musical', '$gravadora', '$musica')";
      if(mysqli_query($conexao,$sql)){
        echo"<center><h1>Cadastro realizado com sucesso</h1></center>";
    }
  }*/
  
  if($_POST['button']=="Inserir"){
  $sql="insert into cd(Nome_Artista, Titulo_CD, Descricao, Preco_CD, Data_Lancamento, Estilo_Musical, Gravadora, Musicas) values('$artista', '$titulo', '$descricao', '$preco', '$ano', '$estilo_musical', '$gravadora', '$musica')";
  if(mysqli_query($conexao,$sql)){
    echo"<center><h1> Cadastro realizado com sucesso!!!</center></h1>";
}}
  
  /*if($_POST["button"]=="Selecionar"){
    $sql="select * from cd where artista='Bruno Mars'";
    $res=mysqli_query($conexao,$sql);
    $linha=mysqli_num_rows($res);
    echo"$linha registros encontrados";
    mysqli_close($conexao);
  }*/
  
  if($_POST["button"]=="Selecionar"){
   $sql="select * from cd where artista='Bruno Mars'";
   $res=mysqli_query($conexao,$sql);
   $linha=mysqli_num_rows($res);
   echo"$linha registros encontrados";
   mysqli_close($conexao);
  }
?>